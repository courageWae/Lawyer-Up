<?php

namespace App\Http\Controllers;
use App\User;
use App\TypeOfAttorney;
use App\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class LawyerController extends Controller
{
    public function dashboard(){
    	return view('lawyer.dashboard',[
            'lawyerAppointment'=>Booking::where('lawyer_id',auth()->user()->id)->get()
        ]);
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

    public function show_profile(){
    	return view('lawyer.edit_profile',['type'=>TypeOfAttorney::all()]);
    }

    public function update_profile(Request $request, User $lawyer){
        app('App\Http\Controllers\FormValidator')->myValidator($request);
        if($request->photo != ''){        
            $path = public_path().'/uploads/pictures/user';
            if($lawyer->file != ''  && $lawyer->photo != null){
                $file_old = $path.$lawyer->photo;
                   unlink($file_old);
                }
            $lawyer->update([
                'name'=>$request->name,
                'user_name'=>$request->user_name,
                'alias'=>Str::slug($request->name.$request->user_name,'-'),
                'email'=>$request->email,
                'education'=>$request->education,
                'experience'=>$request->experience,
                'personal_statement'=>$request->personal_statement,
                'address'=>$request->address,
                'house_address'=>$request->house_address,
                'type_of_lawyer'=>$request->type_of_lawyer,
                'phone'=>$request->phone,
                'photo'=>$request->photo
            ]);
        }else{
            $lawyer->update([
                'name'=>$request->name,
                'user_name'=>$request->user_name,
                'alias'=>Str::slug($request->name.$request->user_name,'-'),
                'email'=>$request->email,
                'education'=>$request->education,
                'experience'=>$request->experience,
                'personal_statement'=>$request->personal_statement,
                'address'=>$request->address,
                'house_address'=>$request->house_address,
                'type_of_lawyer'=>$request->type_of_lawyer,
                'phone'=>$request->phone
            ]);
        }
        return redirect()->back()->with(['message' => 'You Updated Your Details Successfully', 'alert' => 'alert-success']);
    }

    public function edit_password(){
        return view('lawyer.edit_password');
    }

    public function update_password(Request $request, User $lawyer){
        app('App\Http\Controllers\FormValidator')->myValidator($request);
        if(Hash::check($request->old_password,$lawyer->password)){
            $lawyer->update([
                'password'=>password_hash($request->password, PASSWORD_DEFAULT)
            ]);
            return redirect()->back()->with(['message'=>'Password Updated Successfully','alert'=>'alert-success']);
        }else{
            return redirect()->back()->with(['message'=>'Please Enter the Correct Password','alert'=>'alert-danger']);  
        }
    }

    public function edit_email(){
        return view('lawyer.edit_email');
    }

    public function update_email(Request $request, User $lawyer){
        $request->validate(['email'=>['required','string','email','max:255','unique:users']]);
        return redirect()->back()->with([
            'message'=>'Email activation code was sent to the email you provided',
            'alert'=>'alert-success'
        ]);
    }

    public function activate_email(){
        return view('lawyer.activate_email');
    }
    
    // Not completed Needs refactoring
    public function activation_email(Request $request, User $alias){
        return redirect()->back()->with([
            'message'=>'Email Activated',
            'alert'=>'alert-success'
        ]);
    }

    public function view_appointment(Booking $appointment){
        return view('lawyer.view_appointment',['appointment'=>$appointment]);
    }

    public function approve_appointment(Booking $book){
        $book->update([
            $book->status = "Approved"
        ]);
        return redirect()->back()->with(['message' => 'Appointment Approved', 'alert' => 'alert-success']);
    }


}
