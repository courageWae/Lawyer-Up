<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class InsurerController extends Controller
{
    public function dashboard(){
    	return view('insurer.dashboard');
    }

    public function profile(){
    	return view('insurer.profile');
    }

    public function show_profile(User $insurer){
    	return view('insurer.edit_profile',['insurer'=>$insurer]);
    }

    public function update_profile(Request $request, User $insurer){
    	$request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' =>['required'],
        ]);

        $updateDetails = [
        $insurer->name = $request->name,
        $insurer->email = $request->email,
        $insurer->phone = $request->phone,
        $insurer->password = password_hash($request->password, PASSWORD_DEFAULT),
        ];
        $insurer->update($updateDetails);
    	return redirect()->back()->with(['message' => 'You Updated Your Details Successfully', 'alert' => 'alert-success']);
    }

    public function list_client(){
    	return view('insurer.list_client',['client'=>User::where('insurer',auth()->user()->name)->get()]);
    }
}
