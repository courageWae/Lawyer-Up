<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;



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
   // protected $redirectTo = RouteServiceProvider::HOME;

    protected function redirectTo(){
      if(auth()->user()->role_id == 1){
        return route('admin.dashboard');
      }elseif(auth()->user()->role_id == 2){
        return route('insurer.dashboard');
      }elseif(auth()->user()->role_id == 3){
        return route('lawyer.dashboard');
      }elseif(auth()->user()->role_id == 4){
        return route('user.dashboard');
      }  
    }

    
    
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' =>['required'],
            'role_id' => ['required'],
            'insurer' =>['required'],
            'address_name'=>['required'],
            'address_number'=>['required'],
            'address_city'=>['required'],
            'house_address'=>['required'],
            'education'=>['required'],
            'experience'=>['required'],
            'type_of_lawyer'=>['required'],
            'personal_statement'=>['required']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
      if(request()->hasFile('photo')){
           $file = request()->file('photo');
           $extension = $file->getClientOriginalExtension(); //getting image exension
           $filename = time().'.'.$extension;
           $file->move('uploads/user/',$filename);
           request()->photo =$filename;
        }else{
           return $request;
           $user->photo = '../assets/images/holder.jpg';
       }
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'photo'=>request()->photo,
            'phone' => $data['phone'],
            'role_id' => $data['role_id'],
            'insurer' => $data['insurer'],
            'address_name'=>$data['address_name'],
            'address_number'=>$data['address_number'],
            'address_city'=>$data['address_city'],
            'house_address'=>$data['house_address'],
            'education'=>$data['education'],
            'experience'=>$data['experience'],
            'type_of_lawyer'=>$data['type_of_lawyer'],
            'personal_statement'=>$data['personal_statement']
        ]);

    }
}
