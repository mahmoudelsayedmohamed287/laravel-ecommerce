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
    //
    public  function index () {
      $title = array('pageTitle' => Lang::get("labels.AddCustomer"));


      return view("affilate.RegisterAffilate",$title);
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
