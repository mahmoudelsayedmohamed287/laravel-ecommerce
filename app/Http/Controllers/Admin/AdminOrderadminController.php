<?php
/*
Project Name: IonicEcommerce
Project URI: http://ionicecommerce.com
Author: VectorCoder Team
Author URI: http://vectorcoder.com/

*/
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;


use Validator;
use App;
use Lang;

use DB;
//for password encryption or hash protected
use Hash;
use App\Administrator;

//for authenitcate login data
use Auth;



//for requesting a value 
use Illuminate\Http\Request;


class AdminOrderadminController extends Controller
{
    
  public function index(){
    $title = array('pageTitle' => Lang::get("labels.MainCategories")); 
     $orders_admin = DB::table('orders_products')
            ->join('products', 'orders_products.products_id', '=', 'products.products_id')
            ->join('orders', 'orders_products.orders_id', '=', 'orders.orders_id')
//            ->join('orders_status_history', 'orders_products.orders_id', '=', 'orders_status_history.orders_id')
//          ->orderby('orders_status_history.date_added', 'DESC')
         
            ->where('products.admin_id', '=', session('admin_id'))
         
        
            ->get();
//         foreach($orders_admin as $orders_admin){}
         
        
					
		$result['orders_admin'] = $orders_admin;
      
      
      
      return view("admin.adminorders",$title)->with('result', $result);

  }  
    
    public function viewOrder(Request $request){
        
if(session('orders_view')==0){
			print Lang::get("labels.You do not have to access this route");
		}else{
			
		$title = array('pageTitle' => Lang::get("labels.ViewOrder"));
		$language_id             =   '1';	
		$orders_id        	 	 =   $request->id;			
		
		$message = array();
		$errorMessage = array();
		
		DB::table('orders')->where('orders_id', '=', $orders_id)
			->where('customers_id','!=','')->update(['is_seen' => 1 ]);
		
		$order = DB::table('orders')
				->LeftJoin('orders_status_history', 'orders_status_history.orders_id', '=', 'orders.orders_id')
				->LeftJoin('orders_status', 'orders_status.orders_status_id', '=' ,'orders_status_history.orders_status_id')
				->where('orders.orders_id', '=', $orders_id)
            
            ->orderby('orders_status_history.date_added', 'DESC')->get();
			
		
		foreach($order as $data){
			$orders_id	 = $data->orders_id;
			
			$orders_products = DB::table('orders_products')
				->join('products', 'products.products_id','=', 'orders_products.products_id')
				->select('orders_products.*', 'products.products_image as image')
				->where('orders_products.orders_id', '=', $orders_id)
                
                   ->where('products.admin_id', '=', session('admin_id'))
                
          
                ->get();
				$i = 0;
				$total_price  = 0;
				$total_tax	  = 0;
				$product = array();
				$subtotal = 0;
				foreach($orders_products as $orders_products_data){
					$product_attribute = DB::table('orders_products_attributes')
						->where([
							['orders_products_id', '=', $orders_products_data->orders_products_id],
							['orders_id', '=', $orders_products_data->orders_id],
						])
						->get();
						
					$orders_products_data->attribute = $product_attribute;
					$product[$i] = $orders_products_data;
					$total_price = $total_price+$orders_products[$i]->final_price;
					
					$subtotal += $orders_products[$i]->final_price;
					
					$i++;
				}
			$data->data = $product;
			$orders_data[] = $data;
		}
		
		$orders_status_history = DB::table('orders_status_history')
			->LeftJoin('orders_status', 'orders_status.orders_status_id', '=' ,'orders_status_history.orders_status_id')
			->orderBy('orders_status_history.date_added', 'desc')
			->where('orders_id', '=', $orders_id)->get();
				
		$orders_status = DB::table('orders_status')->get();
				
		$ordersData['message'] 					=	$message;
		$ordersData['errorMessage']				=	$errorMessage;
		$ordersData['orders_data']		 	 	=	$orders_data;
		$ordersData['total_price']  			=	$total_price;
		$ordersData['orders_status']			=	$orders_status;
		$ordersData['orders_status_history']    =	$orders_status_history;
		$ordersData['subtotal']    				=	$subtotal;
		
		
		//get function from other controller
		$myVar = new AdminSiteSettingController();
		$ordersData['currency'] = $myVar->getSetting();
		
		
	
      
      
      
      return view("admin.singleorder",$title)->with('data', $ordersData);    
        
        
}
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}