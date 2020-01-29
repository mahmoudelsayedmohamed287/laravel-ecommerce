<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
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

class admincustomerController extends Controller
{
    public function adminCustomer(){
        $title = array('pageTitle' => Lang::get("customer"));
        
        $customers = DB::table('orders_products')
        ->join('products', 'orders_products.products_id', '=', 'products.products_id')
        ->join('orders', 'orders_products.orders_id', '=', 'orders.orders_id')
        ->select(DB::raw('DISTINCT(orders.customers_id) as customers_id'),'orders.customers_name','orders.customers_telephone','orders.customers_city')
        
          
        ->where('products.admin_id', '=', session('admin_id'))
        ->get();

       
     
    return view('admin.admincustomer',$title)->with('customers',$customers);
    
    }
}
