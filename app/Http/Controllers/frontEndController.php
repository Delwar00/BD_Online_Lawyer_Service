<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\AdditionalInfo;
use App\lawyerPersonalInfo;
use App\lawyerAddress;
use App\lawyerPracticesArea;
use App\Cprofile;
use App\freeConsult;
use App\lawyer_feedback_message;
use App\Charts\ServiceChart;
use App\allService;

class frontEndController extends Controller
{

    public function index(){

      //header search
      // $testQuery = lawyerPersonalInfo::join('lawyer_practices_areas','lawyer_practices_areas.lawyer_personal_info_id','lawyer_personal_infos.id')
      // ->join('lawyer_addresses','lawyer_addresses.lawyer_personal_info_id','=','lawyer_personal_infos.id')
      // ->select('lawyer_personal_infos.*','lawyer_practices_areas.*','lawyer_addresses.*')
      // ->get()->pluck('prac_area');
      // $collectionArry = $testQuery->toArray();
      // $uniqueArea = array_unique($testQuery->toArray());
      // echo "<pre>";
      // print_r($uniqueArea);
      // die();
      $data['search_info']=collect(lawyerPersonalInfo::join('lawyer_practices_areas','lawyer_practices_areas.lawyer_personal_info_id','lawyer_personal_infos.id')
      ->join('lawyer_addresses','lawyer_addresses.lawyer_personal_info_id','=','lawyer_personal_infos.id')
      ->select('lawyer_personal_infos.*','lawyer_practices_areas.*','lawyer_addresses.*')
      ->pluck('prac_area'))->unique();
      $data['search_area']=collect(lawyerPersonalInfo::join('lawyer_practices_areas','lawyer_practices_areas.lawyer_personal_info_id','lawyer_personal_infos.id')
      ->join('lawyer_addresses','lawyer_addresses.lawyer_personal_info_id','=','lawyer_personal_infos.id')
      ->select('lawyer_personal_infos.*','lawyer_practices_areas.*','lawyer_addresses.*')
      ->pluck('p_address'))->unique();
      // echo "<pre>";
      // print_r( $data );
       //all-profile
      $data['personal_info'] = User::join('lawyer_personal_infos', 'lawyer_personal_infos.user-id', '=', 'users.id')
          ->join('lawyer_practices_areas', 'lawyer_practices_areas.user-id', '=', 'users.id')
          ->select('lawyer_personal_infos.*','users.*','lawyer_practices_areas.prac_area')
          // ->where('lawyer_practices_areas.add_status','=',1)
          ->paginate(6);
      $data['serv']= allService::get();
      $data['lawyer_count']=User::all()->where('status','=',1)->count();
      $data['client_count']=User::all()->where('status','=',2)->count();
     return view("welcome", $data);
    }
    //search
    public function lawyerSearch(Request $request){
// $name=lawyerPracticesArea::pluck('prac_area');
// echo $name;

      $data['service_area']=$request->input('service_area');
      $data['service_name']=$request->input('service_name');
      $data['search_appropriate_lawyer']=lawyerPersonalInfo::join('lawyer_practices_areas','lawyer_practices_areas.lawyer_personal_info_id','lawyer_personal_infos.id')
      ->join('lawyer_addresses','lawyer_addresses.lawyer_personal_info_id','=','lawyer_personal_infos.id')
      ->select('lawyer_personal_infos.*','lawyer_practices_areas.*','lawyer_addresses.*')
      ->where('prac_area','=',$request->input('service_name'))
      ->where('p_address','=',$request->input('service_area'))
       ->get();
       //count searching
       $data['count']=lawyerPersonalInfo::join('lawyer_practices_areas','lawyer_practices_areas.lawyer_personal_info_id','lawyer_personal_infos.id')
       ->join('lawyer_addresses','lawyer_addresses.lawyer_personal_info_id','=','lawyer_personal_infos.id')
       ->select('lawyer_personal_infos.*','lawyer_practices_areas.*','lawyer_addresses.*')
       ->where('prac_area','=',$request->input('service_name'))
       ->where('p_address','=',$request->input('service_area'))
        ->get()
        ->count();
        $data['serv']= allService::get();
        return view("include.searchLawyer",$data);
    }

    public function talkToLawyer(){
      $data['personal_info'] = User::join('lawyer_personal_infos', 'lawyer_personal_infos.user-id', '=', 'users.id')
          ->join('lawyer_practices_areas', 'lawyer_practices_areas.user-id', '=', 'users.id')
          ->select('lawyer_personal_infos.*','users.*','lawyer_practices_areas.prac_area')
          // ->where('lawyer_practices_areas.add_status','=',1)
          ->get();

      return view('include.talkToLawyer',$data);
    }

    public function lawyerProfileView($id){
      // $lawyerPersonalInfo=lawyerPersonalInfo::join('lawyer_addresses','lawyer_addresses.lawyer_personal_info_id','lawyer_personal_infos.id')
      // ->join('lawyer_practices_areas','lawyer_practices_areas.lawyer_personal_info_id','=', 'lawyer_personal_infos.id')
      // ->where('user-id','=',$id)
      // ->firstOrFail();
      $chart = new ServiceChart;
      $lawyerPracticsInfo=lawyerPracticesArea::where('user-id','=',$id)->firstOrFail();
      //echo $lawyerPracticsInfo->prac_area;
      $chart->labels([$lawyerPracticsInfo->prac_area]);
      $chart->dataset("Practices Area,Rating $lawyerPracticsInfo->add_status out of 5", 'line', [$lawyerPracticsInfo->add_status,0])->backgroundColor('pink');


      // $lawyerPersonal=lawyerPersonalInfo::where('user-id','=',$id)->get();
      $lawyerPersonalInfo=lawyerPersonalInfo::where('user-id','=',$id)->firstOrFail();
      // echo "<pre>";
      // echo ;
      // die();
      $lawyerAddressInfo=lawyerAddress::where('user-id','=',$id)->firstOrFail();
      $serv= allService::get();
      $lawyerPersonal= User::join('lawyer_personal_infos', 'lawyer_personal_infos.user-id', '=', 'users.id')
          ->join('lawyer_practices_areas', 'lawyer_practices_areas.user-id', '=', 'users.id')
          ->select('lawyer_personal_infos.*','users.*','lawyer_practices_areas.prac_area')
          ->where('lawyer_practices_areas.prac_area','=',$lawyerPracticsInfo->prac_area)
          ->get();
      return view('include.singlelawyerview',compact('chart','lawyerPersonal','lawyerPersonalInfo','lawyerAddressInfo','lawyerPracticsInfo','serv'));
    }

    public function matchLverification(){
      echo User::all();
    }
    public function lawyerHiredSubmit($id){
      $lawyerPersonalInfo=lawyerPersonalInfo::where('user-id', $id)->firstOrFail();
      $lawyerPracticsInfo=lawyerPracticesArea::where('user-id', $id)->firstOrFail();
      $lawyerAddress=lawyerAddress::where('user-id', $id)->firstOrFail();
      $serv= allService::get();
      return view('include.hired',compact('lawyerPersonalInfo','lawyerPracticsInfo','serv','lawyerAddress'));
    }
    public function lawyerMessageSubmit($id){

      $data['lawyerPersonalInfo'] = lawyerPersonalInfo::where('user-id', $id)->firstOrFail();
        // $lawyerPersonalInfo=lawyerPersonalInfo::where('id','=',$id)->firstOrFail();
        $data['lawyerPracticsInfo'] = lawyerPracticesArea::where('user-id','=',$id)->firstOrFail();
        // $userInfo=User::where(['id' => $id, 'status' => 2])->firstOrFail();
        $data['serv']= allService::get();
        return view('include.message', $data);

    }
    public function lawyerfMessageSubmit(Request $request){

      lawyer_feedback_message::insertGetId([
        'personal_info_id'=>$request->personal_info_id,
        'user_id'=>Auth::id(),
        'message'=>$request->message,
      ]);
       return back();
      }
    public function messageSubmit(Request $request){

      freeConsult::insertGetId([
        'personal_info_id'=>$request->personal_info_id,
        'user_id'=>Auth::id(),
        'message'=>$request->message,
      ]);
       return back();
      }



//thik ache
      public function ClientMessageView(){
        $a='';
        if (Auth::user()->status == 2) {
            $a=Auth::id();
        }
        // $lawyerPersonalInfo=lawyerPersonalInfo::get()->id();
        // echo $lawyerPersonalInfo;
        $reply=User::join('lawyer_feedback_messages', 'lawyer_feedback_messages.personal_info_id', '=', 'users.id')
        // ->join('lawyer_personal_infos','lawyer_personal_infos.id','=','lawyer_feedback_messages.personal_info_id')
          ->select('lawyer_feedback_messages.*','users.*')
         ->where('users.id','=',$a)
         ->get();
        return view('include.clientMessageView',compact('reply'));
      }
      //thik ache ata
            public function lawyerMessageView(){
              $a='';
              if (Auth::user()->status == 1) {
                  $a=Auth::id();
              }
              $free_consult_message=lawyerPersonalInfo::join('free_consults', 'free_consults.personal_info_id', '=', 'lawyer_personal_infos.id')
               ->join('users','free_consults.user_id','users.id')
               ->select('free_consults.*','users.*')
               ->where('lawyer_personal_infos.user-id','=',$a)
               ->get();
                 //echo $free_consult_message;
              return view('include.messageView',compact('free_consult_message'));
            }
//target
      public function lawyerMessageFeedback($id){
        $a='';
        if (Auth::user()->status == 1) {
            $a=Auth::id();
        }

        $data['feedback_message']=lawyer_feedback_message::join('free_consults', 'free_consults.personal_info_id', '=', 'lawyer_feedback_messages.personal_info_id')
          ->join('users','free_consults.user_id','users.id')
         ->select('free_consults.*','lawyer_feedback_messages.*','users.*')

         ->firstOrFail();
         //$data['free_consult'] = freeConsult::where('user_id', $id)->firstOrFail();
           //echo $a;
           return view('include.feedbackform',$data);
      }
      public function clientMessageFeedback($id){
        // $a='';
        // if (Auth::user()->status == 2) {
        //     $a=Auth::id();
        // }
        $data['lawyerPersonalInfo'] = lawyerPersonalInfo::where('user-id', $id)->firstOrFail();
        $data['client_feedback_message']=lawyerPersonalInfo::join('free_consults', 'free_consults.personal_info_id', '=', 'lawyer_personal_infos.user-id')
         ->join('users','free_consults.user_id','users.id')
         ->select('free_consults.*','users.*','lawyer_personal_infos.*')
         // ->where('lawyer_personal_infos.user-id','=',$a)
         ->firstOrFail();
        return view('include.clientFeedbackform',$data);
      }
      public function clientMessageSubmit(Request $request){

        freeConsult::insertGetId([
          'personal_info_id'=>$request->personal_info_id,
          'user_id'=>Auth::id(),
          'message'=>$request->message,
        ]);
         return back();
        }


      public function complain(){
        $data['serv']= allService::get();
        return view('include.complain',$data);
      }






}
