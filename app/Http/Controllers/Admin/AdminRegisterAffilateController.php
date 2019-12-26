<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Auth;
use Lang;
use App\Affilate_user;
use Session;

use App\Http\Controllers\Controller;
class AdminRegisterAffilateController extends Controller
{
  
    public  function index () {
      $user_id= auth()->guard('admin')->user()->myid;
       $title = array('pageTitle' => Lang::get("labels.AddCustomer"));
       $affaliateDeatils = \DB::table('affilate_product_link')->where('user_id','=',$user_id)->get(); 
$clicks = [];

      return view("affilate.RegisterAffilate",$title)->with(['affaliateDeatils' => $affaliateDeatils]);
    }


    public function add(Request $request) {
      $user_id= auth()->guard('admin')->user()->myid;
      $affilate_code = uniqid();
       $Affilate_user = Affilate_user::firstOrCreate(['user_id' => $user_id],['affilate_code'=>$affilate_code]);
//       $message= "you have been registered successfully";
//       $Alert = \Session::flash('success',$message);

            return redirect('admin/generate/affilate/prouduct/link');
    }


}
