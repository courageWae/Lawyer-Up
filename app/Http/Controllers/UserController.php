<?php

namespace App\Http\Controllers;
use App\ClientPackage;
use App\User;
use App\Booking;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function dashboard(){
    	return view('user.dashboard',['clientPackage'=>auth()->user()->package]);
    }

    public function package_details(Category $category_alias){
        return view('user.view_package',['category_alias'=>$category_alias]);
    }

    public function profile(){
    	return view('user.profile');
    }

    public function edit_profile(){
    	return view('user.edit_profile');
    }

    public function update_profile(Request $request, User $alias){
    	app('App\Http\Controllers\FormValidator')->myValidator($request);
        if($request->photo != ''){        
            $path = public_path().'/uploads/pictures/user';
            if($alias->file != ''  && $alias->photo != null){
                $file_old = $path.$alias->photo;
                   unlink($file_old);
                }
            $alias->update([
                'name'=>$request->name,
                'user_name'=>$request->user_name,
                'alias'=>Str::slug($request->name.$request->user_name,'-'),
                'email'=>$request->email,
                'phone'=>$request->phone,
                'photo'=>$request->photo,
            ]);
        }else{
            $alias->update([
                'name'=>$request->name,
                'user_name'=>$request->user_name,
                'alias'=>Str::slug($request->name.$request->user_name,'-'),
                'email'=>$request->email,
                'phone'=>$request->phone,
            ]);
        }
        return redirect()->back()->with(['message' => 'You Updated Your Details Successfully', 'alert' => 'alert-success']);
    }

    public function edit_password(){
        return view('user.edit_password');
    }

    public function update_password(Request $request, User $alias){
        app('App\Http\Controllers\FormValidator')->myValidator($request);
        if(Hash::check($request->old_password,$alias->password)){
            $alias->update([
                'password'=>password_hash($request->password, PASSWORD_DEFAULT)
            ]);
            return redirect()->back()->with(['message'=>'Password Updated Successfully','alert'=>'alert-success']);
        }else{
            return redirect()->back()->with(['message'=>'Please Enter the Correct Password','alert'=>'alert-danger']);  
        }
    }

    public function edit_email(){
        return view('user.edit_email');
    }

    public function update_email(Request $request, User $alias){
        $request->validate(['email'=>['required','string','email','max:255','unique:users']]);
        return redirect()->back()->with([
            'message'=>'Email activation code was sent to the email you provided',
            'alert'=>'alert-success'
        ]);
    }

    public function activate_email(){
        return view('user.activate_email');
    }
    
    //Needs refactoring
    public function activation_email(Request $request, User $alias){
        return redirect()->back()->with([
            'message'=>'Email Activated',
            'alert'=>'alert-success'
        ]);
    }

    public function appointments(){
    	return view('user.appointments',['booking'=>auth()->user()->booking]);
    }

    public function view_appointment(Booking $booking){
        return view('user.view_appointment',['booking'=>$booking]);
    }
}
