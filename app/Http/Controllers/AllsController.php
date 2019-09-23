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
class AllsController extends Controller
{
    public function BdallService($id){
        $data['service']= allService::where('id','=',$id)->firstOrFail();
        //header search


        $data['search_info']=lawyerPersonalInfo::join('lawyer_practices_areas','lawyer_practices_areas.lawyer_personal_info_id','lawyer_personal_infos.id')
        ->join('lawyer_addresses','lawyer_addresses.lawyer_personal_info_id','=','lawyer_personal_infos.id')
        ->select('lawyer_personal_infos.*','lawyer_practices_areas.*','lawyer_addresses.*')
        ->where('lawyer_practices_areas.prac_area',$data['service']->service_name)
        ->get();

        //service header search
        $data['service_search']=lawyerPersonalInfo::join('lawyer_practices_areas','lawyer_practices_areas.lawyer_personal_info_id','lawyer_personal_infos.id')
        ->join('lawyer_addresses','lawyer_addresses.lawyer_personal_info_id','=','lawyer_personal_infos.id')
        ->select('lawyer_personal_infos.*','lawyer_practices_areas.*','lawyer_addresses.*')
        ->where('lawyer_practices_areas.prac_area',$data['service']->service_name)
         ->firstOrFail();
        $data['serv']= allService::get();

        return view("include.allService",$data);
    }
    //service header search ftp_all
    public function lawyerServiceSearch(Request $request){
      $data['service_area']=$request->input('service_area');
      // echo $data['service_area'];
      $data['service_name']=$request->input('service_name');
      // echo $data['service_name'];
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
        return view("include.searchServiceLawyer",$data);
    }

}
// $testQuery = lawyerPersonalInfo::join('lawyer_practices_areas','lawyer_practices_areas.lawyer_personal_info_id','lawyer_personal_infos.id')
// ->join('lawyer_addresses','lawyer_addresses.lawyer_personal_info_id','=','lawyer_personal_infos.id')
// ->select('lawyer_personal_infos.*','lawyer_practices_areas.*','lawyer_addresses.*')
// ->get()->pluck('prac_area');
// $collectionArry = $testQuery->toArray();
// $uniqueArea = array_unique($testQuery->toArray());
// echo "<pre>";
// print_r($uniqueArea);
// die();
