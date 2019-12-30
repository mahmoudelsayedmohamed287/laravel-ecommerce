<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Auth;
use Lang;
use App\Affilate_user;
use Session;
use App\affilate_product_link;
use Carbon\Carbon;



use App\Http\Controllers\Controller;
class AdminRegisterAffilateController extends Controller
{

    public  function index () {
      $user_id= auth()->guard('admin')->user()->myid;
       $title = array('pageTitle' => Lang::get("labels.AddCustomer"));
       $affaliateDeatils = \DB::table('affilate_product_link')->where('user_id','=',$user_id)->get();
$clicks = [];
$confirmedOrder = [];
$i = 0;
for($i; $i < count($affaliateDeatils); $i++){
  array_push($clicks,$affaliateDeatils[$i]->click);
  array_push($confirmedOrder,$affaliateDeatils[$i]->confirmed);
}

      return view("affilate.RegisterAffilate",$title)->with(['clicks' => array_sum($clicks),
                                                             'confirmed' => array_sum($confirmedOrder)]);
    }


    public function add(Request $request) {
      $user_id= auth()->guard('admin')->user()->myid;
      $affilate_code = uniqid();
       $Affilate_user = Affilate_user::firstOrCreate(['user_id' => $user_id],['affilate_code'=>$affilate_code]);
//       $message= "you have been registered successfully";
//       $Alert = \Session::flash('success',$message);

            return redirect('admin/generate/affilate/prouduct/link');
    }


    public  function  report (Request $request)
    {

      $user_id= auth()->guard('admin')->user()->myid;
      $title = array('pageTitle' => Lang::get("labels.AddCustomer"));
               // dd($request->Period);
      $date = $request->Period;
      switch ($date) {
        case 'today':
        $date = Carbon::today()->format('Y-m-d');
        $affilate_product_link = affilate_product_link::where('user_id', $user_id)
                 ->with(['get_affilate_product_status' => function ($query)  use ($date) {
                     $query->where('date','=', $date);
                     $query->orderBy('date', 'asc');

                 }])->get();

          break;
          case 'yesterday':
            $date = Carbon::yesterday()->format('Y-m-d');
            $affilate_product_link = affilate_product_link::where('user_id', $user_id)
                     ->with(['get_affilate_product_status' => function ($query)  use ($date) {
                         $query->where('date','=', $date);
                         $query->orderBy('date', 'asc');

                     }])->get();

            break;

              case 'thisWeek':
              $currentDate = \Carbon\Carbon::now();
             $currentDate->startOfWeek()->subWeek();
             $date = $currentDate->format('Y-m-d');

             $affilate_product_link = affilate_product_link::where('user_id', $user_id)
                      ->with(['get_affilate_product_status' => function ($query)  use ($date) {
                          $query->where('date','>=', $date);
                          $query->orderBy('date', 'asc');

                      }])->get();

                break;
                case 'lastMonth':
                $firstDayofPreviousMonth = Carbon::now()->startOfMonth()->subMonth()->toDateString();
                $date= $firstDayofPreviousMonth;
                $affilate_product_link = affilate_product_link::where('user_id', $user_id)
                         ->with(['get_affilate_product_status' => function ($query)  use ($date) {
                             $query->where('date','>=', $date);
                             $query->orderBy('date', 'asc');

                         }])->get();
                         dd($date);

                  break;
                  case 'thisMonth':
                  $lastDayofPreviousMonth = Carbon::now()->subMonth()->endOfMonth()->toDateString();
                  $date= $lastDayofPreviousMonth;

                  $affilate_product_link = affilate_product_link::where('user_id', $user_id)
                           ->with(['get_affilate_product_status' => function ($query)  use ($date) {
                               $query->where('date','>=', $date);
                               $query->orderBy('date', 'asc');

                           }])->get();


                    break;
      }


$clicks = [];
 $confirmedOrder = [];
    foreach ($affilate_product_link as $value) {
    foreach ($value->get_affilate_product_status as $key) {
    array_push($clicks,$key->click);
      array_push($confirmedOrder,$key->confirmed);
    }
    }




// foreach ($affilate_product_link  as $value) {
//   // code...
//   $all[] = [$value->get_affilate_product_status];
// }
//
//
// $all_count = count($all);
// $clicks = [];
// $confirmedOrder = [];
// for ($i=0; $i < $all_count ; $i++) {
//
//   if (isset($all[$i][0]->click)) {
//     $click = $all[$i][0]->click;
//
//
//     $confirmed = $all[$i][0]->confirmed;
//    array_push($clicks,$click);
//    array_push($confirmedOrder,$confirmed);
//   }
//
// }

  $click_count  =array_sum($clicks);
  $confirmed_count=array_sum($confirmedOrder);

  // dd($click_count);

  $data = ['click'=>$click_count, 'confirmed'=>$confirmed_count];
      return response()->json($data);

    }


}
