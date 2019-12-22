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


class AdminhistoryController extends Controller
{
    
  public function index(){
    $title = array('pageTitle' => Lang::get("labels.MainCategories")); 
     $logs = DB::table('logs')
         ->join('administrators','logs.admin_id','=','administrators.myid')
         ->select('logs.*','administrators.first_name','administrators.last_name')
					->paginate(40);
					
		$result['logs'] = $logs;
      
      $timetogs=DB::table('administrators')->where('adminType', '!=', 1)->get();
      $result['timetogs'] = $timetogs;
      
      return view("admin.adminhistory",$title)->with('result', $result);

  }  
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}