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

use App\Admin;

use DB;
//for password encryption or hash protected
use Hash;
//use App\Administrator;

//for authenitcate login data
use Auth;
use Session;
//for requesting a value 
use Illuminate\Http\Request;

class admintypeController extends Controller
{

   public function dashboard(Request $request){
     $title 			  = 	array('pageTitle' => Lang::get("labels.title_dashboard"));
    $language_id      = 	'1';
    $result 		  =		array();

    $reportBase		  = 	$request->reportBase;
 $orders_admin = DB::table('orders_products')
            ->join('products', 'orders_products.products_id', '=', 'products.products_id')
            ->join('orders', 'orders_products.orders_id', '=', 'orders.orders_id')
            ->select(DB::raw('count(*) as order_count'))
            ->where('products.admin_id', '=', session('admin_id'))
            ->get();
		
		$result['orders_admin'] = $orders_admin;
       
       
    $product = DB::table('products')
        ->select (DB::raw('count(*) as product_count'))
        ->where('admin_id', session('admin_id'))->get();
       
         $result['product'] = $product; 
       
       
       	
		$products = DB::table('products')
			->leftJoin('products_description','products_description.products_id','=','products.products_id')
			->where('products_description.language_id','=', $language_id)
              ->where('products.admin_id', '=', session('admin_id'))
			->orderBy('products.products_id', 'DESC')
			->get();
		
//		$result = array();
		$products_array  = array();
		$index = 0;
		$lowLimit = 0;
		$outOfStock = 0;
		$products_ids = array();
		$data = array();
		foreach($products as $products_data){
			$currentStocks = DB::table('inventory')->where('products_id',$products_data->products_id)->get();
			
			if(count($currentStocks)>0){
				if($products_data->products_type!=1){				
					$c_stock_in = DB::table('inventory')->where('products_id',$products_data->products_id)->where('stock_type','in')->sum('stock');	
					$c_stock_out = DB::table('inventory')->where('products_id',$products_data->products_id)->where('stock_type','out')->sum('stock');
	
					if(($c_stock_in-$c_stock_out)==0){
						if(!in_array($products_data->products_id, $products_ids)){
							$products_ids[] = $products_data->products_id;	
							array_push($data,$products_data);
							$outOfStock++;
						}
					}					
				}
			}else{
				if(!in_array($products_data->products_id, $products_ids)){
					$products_ids[] = $products_data->products_id;	
					array_push($data,$products_data);
					$outOfStock++;
				}
				
			}
		}
			
		$result['products'] = $data;

       
       $result['productee']=count($result['products']);
 
        $MoneyEarned = DB::table('orders_products')
            ->join('products', 'orders_products.products_id', '=', 'products.products_id')
            ->select(DB::raw('SUM(final_price) as MoneyEarned'))
            ->where('products.admin_id', '=', session('admin_id'))
            ->get();

       
       $result['MoneyEarned'] = $MoneyEarned;
//       $result['MoneyEarned']=echo $result['MoneyEarned'];
////       echo $result['MoneyEarned'];
     
       
        $inventory = DB::table('orders_products')
             ->join('products', 'orders_products.products_id', '=', 'products.products_id')
             ->join('inventory', 'orders_products.products_id', '=', 'inventory.products_id')
            ->select(DB::raw('SUM(purchase_price) as purchase_price'))
          ->where('products.admin_id', '=', session('admin_id'))
            ->get();
       
       $result['inventory'] = $inventory;
//       dd($result['inventory']);
//       echo $inventory;
//       purchase_price
       
       $customer = DB::table('orders_products')
            ->join('products', 'orders_products.products_id', '=', 'products.products_id')
            ->join('orders', 'orders_products.orders_id', '=', 'orders.orders_id')
            ->select(DB::raw('DISTINCT(orders.customers_id) as order_countee'))
            ->where('products.admin_id', '=', session('admin_id'))
            ->get();
       
       $result['customer']= count($customer);
    return view("admin.admindashboard",$title)->with('result', $result);

    }
    
    
    
    
    
    
    
    //productsStock
	public function outofstock(Request $request){
		
		$title = array('pageTitle' => Lang::get("labels.outOfStock"));
		$language_id = 1;
			
		
			
		$products = DB::table('products')
			->leftJoin('products_description','products_description.products_id','=','products.products_id')
			->where('products_description.language_id','=', $language_id)
              ->where('products.admin_id', '=', session('admin_id'))
			->orderBy('products.products_id', 'DESC')
			->get();
		
		$result = array();
		$products_array  = array();
		$index = 0;
		$lowLimit = 0;
		$outOfStock = 0;
		$products_ids = array();
		$data = array();
		foreach($products as $products_data){
			$currentStocks = DB::table('inventory')->where('products_id',$products_data->products_id)->get();
			
			if(count($currentStocks)>0){
				if($products_data->products_type!=1){				
					$c_stock_in = DB::table('inventory')->where('products_id',$products_data->products_id)->where('stock_type','in')->sum('stock');	
					$c_stock_out = DB::table('inventory')->where('products_id',$products_data->products_id)->where('stock_type','out')->sum('stock');
	
					if(($c_stock_in-$c_stock_out)==0){
						if(!in_array($products_data->products_id, $products_ids)){
							$products_ids[] = $products_data->products_id;	
							array_push($data,$products_data);
							$outOfStock++;
						}
					}					
				}
			}else{
				if(!in_array($products_data->products_id, $products_ids)){
					$products_ids[] = $products_data->products_id;	
					array_push($data,$products_data);
					$outOfStock++;
				}
				
			}
		}
			
		$result['products'] = $data;
		$myVar = new AdminSiteSettingController();
		$result['currency'] = $myVar->getSetting();
		
		return view("admin.adminoutofstock",$title)->with('result', $result);
		}
	
	


   
}
