<?php

namespace App\Http\Controllers;
use App\ClientPackage;
use App\User;
use App\Booking;
use App\Category;
use Illuminate\Http\Request;

class UserController extends Controller
{
     public function dashboard(){
    	return view('user.dashboard',['clientPackage'=>auth()->user()->package]);
    }

    public function package_details(Category $category){
        return view('user.view_package',['category'=>$category]);
    }

    public function profile(){
    	return view('user.profile');
    }

    public function show_profile(User $user){
    	return view('user.edit_profile',['user'=>$user]);
    }

    public function update_profile(Request $request, User $user){
    	$request->validate([
    		'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' =>['required'],
            'insurer'=>['required'],
    	]);
        if($request->has('password')){
            $user->password = password_hash($request->password, PASSWORD_DEFAULT);
            $user->update($request->except('password'));
            $user->update([$user->password]);    
        }
        return redirect()->back()->with(['message' => 'You Updated Your Details Successfully', 'alert' => 'alert-success']);
    }

    public function appointments(){
    	return view('user.appointments',['booking'=>auth()->user()->booking]);
    }

    public function view_appointment(Booking $booking){
        return view('user.view_appointment',['booking'=>$booking]);
    }
}
