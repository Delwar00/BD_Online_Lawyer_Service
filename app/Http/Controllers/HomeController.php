<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\AdditionalInfo;
use App\lawyerPersonalInfo;
use App\lawyerAddress;
use App\lawyerPracticesArea;
use Auth;
use Carbon\Carbon;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
         $this->middleware('verified');
    }
//nirob5234
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      if (Auth::user()->status == 1) {
           //return redirect('/home');
           return view('home');
      }
      else{
          return view('client');
      }

    }
    public function updateProfile()
    {

        return view('admin.profileUpdate');
    }
    public function updateInfoSubmit(Request $request)
    {


        $request->validate([
            'l_name'=>'required',
            'l_birth'=>'required',
            // 'nid_num'=>'required',
            'gender'=>'required',
            'religion'=>'required',
            'maritual_status'=>'required',
            'details'=>'required',
            'price'=>'required',


        ]);
       $info_id=lawyerPersonalInfo::insertGetId([
         'user-id'=>Auth::id(),
         'l_name'=> $request->l_name,
         'l_birth'=> $request->l_birth,
         // 'nid_num'=>$request->nid_num,
         'gender'=>$request->gender,
         'religion'=> $request->religion,
         'highest_degree'=>$request->highest_degree,
         'maritual_status'=> $request->maritual_status,
         'details'=>$request->details,
         'price'=>$request->price,
         'qualifications'=>$request->qualifications,

      ]);

      $add_id=lawyerAddress::insertGetId([
        'user-id'=>Auth::id(),
        'lawyer_personal_info_id'=>$info_id,
         'p_address'=>$request->p_address,
         'o_address'=>$request->o_address,
        'created_at'=>Carbon::now(),
      ]);
      // foreach($request->prac_area as $prac_area_individual){
      //     //echo $designation_name_individual.'<br>';
      //     lawyerPracticesArea::insert([
      //       'user-id'=>Auth::id(),
      //       'lawyer_personal_info_id'=>$info_id,
      //       'prac_area'=>$prac_area_individual,
      //       'created_at'=>Carbon::now(),
      //     ]);
      // }
      lawyerPracticesArea::insertGetId([
        'user-id'=>Auth::id(),
        'lawyer_personal_info_id'=>$info_id,
         'prac_area'=>$request->prac_area,
         'add_status'=>$request->add_status,
         'created_at'=>Carbon::now(),
      ]);
      if($request->hasFile('profile_photo')){
            $path = $request->file('profile_photo')->store('profile_photos');
            lawyerPersonalInfo::where('id','=',$info_id)->update([
                'profile_photo'=>$path,
            ]);
          }
        return back();
    }

}
