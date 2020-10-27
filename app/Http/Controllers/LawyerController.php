<?php

namespace App\Http\Controllers;
use App\User;
use App\TypeOfAttorney;
use App\Booking;
use Illuminate\Http\Request;

class LawyerController extends Controller
{
    public function dashboard(){
    	return view('lawyer.dashboard',['lawyerAppointment'=>Booking::where('lawyer_id',auth()->user()->id)->get()]);
    }

    public function list_client(){
    	return view('lawyer.list_client',['client'=>Booking::where('lawyer_id',auth()->user()->id)->get()]);
    }
     // Needs finishing
    public function view_client($id){
        $book = Booking::find($id);
        return view('lawyer.view_client',['book'=>$book]);
    }

    public function profile(){
    	return view('lawyer.profile');
    }

    public function show_profile(User $lawyer){
    	return view('lawyer.edit_profile',['lawyer'=>$lawyer,'type'=>TypeOfAttorney::all()]);
    }

    public function update_profile(Request $request, User $lawyer){
    	$request->validate([
    	    'name'=>'required',
    		'email'=>'required | email',
    		'phone'=>'required',
    		'password'=>'required | confirmed'
    		]);
        if($request->has('password')){
            $lawyer->password = password_hash($request->password, PASSWORD_DEFAULT);
            $lawyer->update($request->except('password'));
            $lawyer->update([$lawyer->password]);
        }

        $lawyer->update($updateDetails);
        return redirect()->back()->with(['message' => 'You Updated Your Details Successfully', 'alert' => 'alert-success']);
    
    }

    public function view_appointment(Booking $appointment){
        return view('lawyer.view_appointment',['appointment'=>$appointment]);
    }

    public function approve_appointment(Booking $book){
        $book->update([
            $book->status = "Appointment Met"
        ]);
        return redirect()->back()->with(['message' => 'Appointment Approved', 'alert' => 'alert-success']);
    }


}
