<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Notification;
use App\AdditionalInfo;
use App\Notifications\usernotification;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        return Validator::make($data, [
            'phone' => ['required', 'string', 'max:255','Unique:users,phone','max:11','min:10'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'ver_number' => ['nullable','unique:users,ver_number','max:6','min:6'],
            'nid_number'=>['Unique:users'],
        ]);
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
     // Notification::route('mail',$email)
     //  ->notify(new usernotification($password));

    public function create(array $data)
    {
      $a=User::select('nid_number')->pluck('nid_number');
      $ver_number="";
      $phone= $data['phone'];
      $email=$data['email'];
      if ($data['nid_number']!=$a) {
        $nid_number=$data['nid_number'];
      }
      else {
        echo "fail";
      }

      if(empty($data['ver_number'])){
        $ver_number= "";
      }
      else {
          $ver_number= $data['ver_number'];
      }
      $password=$data['password'];

        return User::create([

            'phone' => $data['phone'],
            'email' => $data['email'],
            'nid_number'=>$data['nid_number'],
            'status' => $data['status'],


            'ver_number'=>$data['ver_number'],
            'password' => Hash::make($data['password']),
        ]);
     }
}
