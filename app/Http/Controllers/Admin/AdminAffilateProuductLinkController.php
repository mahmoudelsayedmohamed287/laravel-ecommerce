<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Auth;
use Lang;
use Session;
use DB;
use App\affilate_product_link;
use App\Http\Controllers\Controller;

class AdminAffilateProuductLinkController extends Controller
{
    //
    public function index ()
    {

      $title = array('pageTitle' => Lang::get("labels.AddCustomer"));


      return view("affilate.affilate_product_link",$title);
    }


    public function  add (Request $request)
    {
      $user_id= auth()->guard('admin')->user()->myid;
      $product_slug =  substr($request->product_link, strpos($request->product_link, "product-detail/") + 15);

      $check_product = DB::table('products')->where('products_slug',$product_slug)->get();
       $get_user_code = DB::table('affilate_users')->where('user_id',$user_id)->get();
        $affilate_code = $get_user_code[0]->affilate_code;

        if (!isset($check_product[0]) )  {
          $message="prouduct  does not exsisit";
          $Alert = \Session::flash('success',$message);
               return redirect()->back();
        }
        // $uid = md5(uniqid(rand(), true));

         $new_link  = $request->product_link.'?u-a='.$affilate_code.'&pro-d='.$check_product[0]->products_id;

        $save_link =   new affilate_product_link();




  $save_link = affilate_product_link::firstOrCreate(['user_id' => $user_id,'product_id'=>$check_product[0]->products_id,'product_link'=>$new_link],['affilate_code'=>$affilate_code,'product_link'=>$new_link]);

        $message="you new  link is ".$new_link;
        $Alert = \Session::flash('success',$message);

             return redirect()->back();


    }
}
