<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Booking;
use \App\clientPackage;
use \App\User;
use Auth;

class userController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('user');
    }

    public function index(){
    	$clientPackage = clientPackage::where('client_email', Auth::user()->email)->get();
    	return view('user.dashboard')->with('clientPackage',$clientPackage);
    }

    public function profile(){
    	return view('user.profile');
    }

    public function update(){
        $user = Auth::user();
        $this->validate(request(),[
         'name'=>'required',
         'email' => 'required | email',
         'phone'=> 'required',
         'insurer'=>'required',
         'password' => 'required | confirmed'
        ]);

        $newDetails = [
        $user->name = request('name'),
        $user->email = request('email'),
        $user->phone = request('phone'),
        $user->insurer = request('insurer'),
        $user->password = Hash::make(request('password'))
    ];
        $user->update($newDetails);
        return redirect('/user/profile');
    }

    public function appointments(){
        $book = Booking::where('email_of_client',auth()->user()->email)->get();
        return view('user.appointments',['book'=>$book]);
    }

    public function viewPackage($id){
       $clientPackage = ClientPackage::find($id);
       return view('user.view_package',['clientPackage'=>$clientPackage]);
    }

    public function viewAppointment($id){
        $book = Booking::find($id);
        return view('user.view_appointment',['book'=>$book]);
    }
}
