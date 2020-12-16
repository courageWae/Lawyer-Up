<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClientPackage;
use App\TypeOfAttorney;
use App\Invoice;
use App\Project;
use App\Message;
use App\User;
class AdminController extends Controller
{
     public function dashboard(){
    	return view('admin.dashboard',
    		[
            'package'=>ClientPackage::get(),
            'msg'=>Message::get()
        ]);
    }
    
    public function profile(){
    	 $str = explode(" ",auth()->user()->name);
    	return view('admin.profile',['str'=>$str]);
    }

    public function update_profile(Request $request, User $admin){
    	app('App\Http\Controllers\FormValidator')->myValidator($request);
        $admin->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'password'=>password_hash($request->password, PASSWORD_DEFAULT)
        ]);
        return redirect()->back();
    }

    public function add_admin(Request $request){
    	if($request->isMethod('post'))
    	{
            app('App\Http\Controllers\FormValidator')->myValidator($request);
            $request->validate(['email'=>['required','string','email','max:255','unique:users']]);
            User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'photo'=>$request->photo,
                'password'=>password_hash($request->password, PASSWORD_DEFAULT),
                'role_id'=>$request->role_id
            ]);
            return redirect()->back()->with(['message' => ' Administrator Created Successfully', 'alert' => 'alert-success']);
        }else{
     	    return view('admin.adminAdd');
        }
    }

    public function list_admin(){
       return view('admin.adminList',['admin'=>User::Admin()->get()]);
    }

    public function delete_admin(User $admin){
    	$admin->delete();
    	return redirect()->back()->with(['message' => 'Administrator Deleted Successfully', 'alert' => 'alert-success']);
    }

    public function view_admin(User $admin){
    	return view('admin.view_admin',['admin'=>$admin]);
    }

    public function add_lawyer(Request $request){
    	if($request->isMethod('post'))
    	{
        app('App\Http\Controllers\FormValidator')->myValidator($request);
        $request->validate(['email'=>['required','string','email','max:255','unique:users']]);
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'house_address'=>$request->house_address,
            'type_of_lawyer'=>$request->type_of_lawyer,
            'personal_statement'=>$request->personal_statement,
            'education'=>$request->education,
            'experience'=>$request->experience,
            'password'=>password_hash($request->password, PASSWORD_DEFAULT),
            'photo'=>$request->photo,
            'role_id'=>$request->role_id
        ]);
        return redirect()->back()->with(['message' => 'New Lawyer Created Successfully', 'alert' => 'alert-success']);
        }else{
    	    return view('admin.lawyerAdd');
        }
    }   
    
    public function list_lawyer(){
       return view('admin.lawyerList',['lawyer'=>User::lawyer()->get()]);
    }

    public function view_lawyer(User $lawyer){
    	return view('admin.view_lawyer',['lawyer'=>$lawyer]);
    }

    public function delete_lawyer(User $lawyer){
        $lawyer->delete();
    	return redirect()->back()->with(['message' => 'Lawyer Deleted Successfully', 'alert' => 'alert-success']);
    }

    public function add_insurer(Request $request){
    	if($request->isMethod('post'))
    	{
            app('App\Http\Controllers\FormValidator')->myValidator($request);
            $request->validate(['email'=>['required','string','email','max:255','unique:users']]);
            User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'photo'=>$request->photo,
                'role_id'=>$request->role_id,
                'password'=>password_hash($request->password, PASSWORD_DEFAULT)
            ]);
            return redirect()->back()->with(['message' => 'New Insurer Created Successfully', 'alert' => 'alert-success']);
    	}else{
    		return view('admin.insurerAdd');
    	}
    }

    public function list_insurer(){
       return view('admin.insurerList',['insurer'=>User::Insurer()->get()]);
    }

    public function delete_insurer(User $insurer){
    	$insurer->delete();
    	return redirect()->back()->with(['message' => 'Insurer Deleted Successfully', 'alert' => 'alert-success']);
    }

    public function view_insurer(User $insurer){
    	return view('admin.view_insurer',['insurer'=>$insurer]);
    }

    public function list_user(){
    	return view('admin.userList',['client'=>User::Client()->get()]);
    }

    public function view_user(User $client){
    	return view('admin.view_user',['client'=>$client]);
    }

    public function delete_user(User $client){
    	$client->delete();
    	return redirect()->back()->with(['message' => 'Client Deleted Successfully', 'alert' => 'alert-success']);
    }

    public function type_of_lawyer_add(Request $request){
    	if($request->isMethod('post')){
            app('App\Http\Controllers\FormValidator')->myValidator($request);
            TypeOfAttorney::create($request->only(['name','description']));
    	    return redirect()->back()->with(
    		['message'=>'Type of Lawyer Added Successfully','alert'=>'alert-success','type'=>TypeOfAttorney::get()]);
    	}else{
    		return view('admin.typeOfLawyerAdd',['type'=>TypeOfAttorney::get()]);
    	}	
    }

    public function delete_typeOfLawyer(TypeOfAttorney $typeOfLawyer){
    	$typeOfLawyer->delete();
    	return redirect()->back();
    }

    public function invoices(){
        return view('admin.invoiceList',['invoice'=>Invoice::get()]);
    }

    public function projects(){
        return view('admin.projectList',['projects'=>Project::get()]);
    }

   

}
