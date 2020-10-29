<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClientPackage;
use App\TypeOfAttorney;
use App\Message;
use App\User;
class AdminController extends Controller
{
     public function dashboard(){

    	$countPackage = $package = ClientPackage::cursor();
    	return view('admin.dashboard',
    		['user'=>User::cursor(),'package'=>$package,'countPackage'=>$countPackage,'msg'=>Message::cursor()]);
    }
    
    public function profile(){
    	 $str = explode(" ",auth()->user()->name);
    	return view('admin.profile',['str'=>$str]);
    }

    public function update_profile(Request $request, User $admin){
    	$request->validate([
    		'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' =>['required'],
    	]);
        if($request->has('password')){
            $admin->password = password_hash($request->password, PASSWORD_DEFAULT);
            $admin->update($request->except('password'));
            $admin->update([$admin->password]);
        }
        return redirect()->back()->with(['message'=>'Profile Updated Successfully','alert'=>'alert-success']);
    }

     /*  ADD NEW ADMIN */
    public function add_admin(Request $request){
    	if($request->isMethod('post'))
    	{
    	   
        self::adminAndLawyerValidator($request);
        self::getRequestPhoto($request);
        
        $admin = new User();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->phone = $request->phone;
        $admin->photo = $request->photo;
        $admin->password = password_hash($request->password, PASSWORD_DEFAULT);
        $admin->role_id = $request->role_id;

        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension(); //getting image exension
            $filename = time().'.'.$extension;
            $file->move('uploads/pictures/user/',$filename);
            $admin->photo =$filename;
        }else{
            $admin->photo = ' ';
        }

        $admin->save();
        return redirect()->back()->with(['message' => ' Administrator Created Successfully', 'alert' => 'alert-success']);

     }else{
     	return view('admin.adminAdd');
     }

    }

    public function list_admin(){
       return view('admin.adminList',['admin'=>User::where('role_id',1)->get()]);
    }

    public function delete_admin(User $admin){
    	if($admin != null){
    		$admin->delete();
    	}
    	return redirect()->back()->with(['message' => 'Administrator Deleted Successfully', 'alert' => 'alert-success']);
    }

    public function view_admin(User $admin){
    	return view('admin.view_admin',['admin'=>$admin]);
    }





    /*  ADD NEW lAWYER */
    public function add_lawyer(Request $request){
    	if($request->isMethod('post'))
    	{
    	   $request->validate([
    		'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' =>['required'],
            'address'=>['required'],
            'house_address'=>['required'],
            'education'=>['required'],
            'type_of_lawyer'=>['required'],
            'experience'=>['required'],
            'personal_statement'=>['required'],
            'role_id' =>['required'],
          ]);

        self::getRequestPhoto($request);

        $lawyer = new User();
        $lawyer->name = $request->name;
        $lawyer->email = $request->email;
        $lawyer->phone = $request->phone;
        $lawyer->role_id = $request->role_id;
        $lawyer->password = password_hash($request->password, PASSWORD_DEFAULT);
        $lawyer->photo = $request->photo;
        $lawyer->address = $request->address;
        $lawyer->house_address = $request->house_address;
        $lawyer->education = $request->education;
        $lawyer->type_of_lawyer = $request->type_of_lawyer;
        $lawyer->experience = $request->experience;
        $lawyer->personal_statement = $request->personal_statement;

        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension(); //getting image exension
            $filename = time().'.'.$extension;
            $file->move('uploads/pictures/user/',$filename);
            $lawyer->photo =$filename;
            }else{
                $lawyer->photo = ' ';
            }

        $lawyer->save();
        return redirect()->back()->with(['message' => 'New Lawyer Created Successfully', 'alert' => 'alert-success']);

    }else{
    	return view('admin.lawyerAdd');
    }
}   
    
    public function list_lawyer(){
       return view('admin.lawyerList',['lawyer'=>User::where('role_id',3)->get()]);
    }

    public function view_lawyer(User $lawyer){
    	return view('admin.view_lawyer',['lawyer'=>$lawyer]);
    }

    public function delete_lawyer(User $lawyer){
    	if($lawyer != null){
    		$lawyer->delete();
    	}
    	return redirect()->back()->with(['message' => 'Lawyer Deleted Successfully', 'alert' => 'alert-success']);
    }





   /* ADD NEW INSURER */
    public function add_insurer(Request $request){
    	if($request->isMethod('post'))
    	{
    		self::adminAndLawyerValidator($request);
            self::getRequestPhoto($request);

            $insurer = new User();
            $insurer->name = $request->name;
            $insurer->email = $request->email;
            $insurer->phone = $request->phone;
            $insurer->photo = $request->photo;
            $insurer->role_id = $request->role_id;
            $insurer->password = password_hash($request->password, PASSWORD_DEFAULT);

            if($request->hasFile('photo')){
               $file = $request->file('photo');
               $extension = $file->getClientOriginalExtension(); //getting image exension
               $filename = time().'.'.$extension;
               $file->move('uploads/pictures/user/',$filename);
               $insurer->photo =$filename;
            }else{
                $insurer->photo = ' ';
            }

            $insurer->save();
            return redirect()->back()->with(['message' => 'New Insurer Created Successfully', 'alert' => 'alert-success']);
    	}else{
    		return view('admin.insurerAdd');
    	}

    }

    public function list_insurer(){
       return view('admin.insurerList',['insurer'=>User::where('role_id',2)->get()]);
    }

    public function delete_insurer(User $insurer){
    	if($insurer != null){
    		$insurer->delete();
    	}
    	return redirect()->back()->with(['message' => 'Insurer Deleted Successfully', 'alert' => 'alert-success']);
    }

    public function view_insurer(User $insurer){
    	return view('admin.view_insurer',['insurer'=>$insurer]);
    }



    /* USER */

    public function list_user(){
    	return view('admin.userList',['client'=>User::where('role_id',4)->get()]);
    }

    public function view_user(User $client){
    	return view('admin.view_user',['client'=>$client]);
    }

    public function delete_user(User $client){
    	if($client != null){
    		$client->delete();
    	}
    	return redirect()->back()->with(['message' => 'Client Deleted Successfully', 'alert' => 'alert-success']);
    }


    /* TYPE OF LAWYER */
    public function type_of_lawyer_add(Request $request){
    	$type = TypeOfAttorney::all();
    	if($request->isMethod('post')){
            TypeOfAttorney::create($request->only(['name','description','by']));
    	    return redirect()->back()->with(
    		['message'=>'Type of Lawyer Added Successfully','alert'=>'alert-success','type'=>$type]);
    	}else{
    		return view('admin.typeOfLawyerAdd',['type'=>$type]);
    	}	
    }

    public function delete_typeOfLawyer(TypeOfAttorney $typeOfLawyer){
    	if($typeOfLawyer != null){
    		$typeOfLawyer->delete();
    	}
    	return redirect()->back();
    }

    public function getRequestPhoto($request){
    	if(request()->hasFile('photo')){
           $file = request()->file('photo');
           $extension = $file->getClientOriginalExtension(); //getting image exension
           $filename = time().'.'.$extension;
           $file->move('uploads/pictures/user/',$filename);
           $request->photo =$filename;
           return $request->photo;
        }else{
           $request->photo = " ";
           return $request->photo;
        }

    }

    public function adminAndLawyerValidator(Request $request){
    	$request->validate([
    		'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' =>['required'],
          ]);

    }
}
