<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Message;
use App\User;
use App\Lawyer;
use App\Package;


class adminController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function dashboard(){
        $msg = Message::all();
        $user = User::all();
        $package = Package::latest()->get();
       return view('admin.dashboard')->with('msg',$msg)->with('user',$user)->with('package',$package);	
    }

    public function profile($id){ 
        $admin = User::find($id);  
        return view('admin.profile')->with('admin',$admin);
    }           

    public function adminAdd(){
        return view('admin.admin-add');
    }

    public function adminStore(Request $request){
        $this->validate(request(),[
             'name'=>'required',
             'email'=>'required | email',
             'phone'=>'required',
             'password'=>'required | confirmed',
        ]);
        $admin = new User;
        $admin->name = request('name');
        $admin->email = request('email');
        $admin->phone = request('phone');
        $admin->role_id = request('role_id');
        $admin->password = password_hash(request('password'), PASSWORD_DEFAULT) ;

        if($request->hasFile('photo')){
           $file = $request->file('photo');
           $extension = $file->getClientOriginalExtension(); //getting image exension
           $filename = time().'.'.$extension;
           $file->move('uploads/pictures/user/',$filename);
           $admin->photo =$filename;
        }else{
           return $request;
           $admin->photo = ' ';
       }

        $admin->save();

        return redirect('/admin_list');
    }

    public function adminDelete($id){
      $user = User::find($id);
      $user->delete();
      return redirect('/admin_list');
    }

    public function insurerAdd(){
        return view('admin.insurer-add');
    }


    public function insurerStore(Request $request){
        $this->validate(request(),[
             'name'=>'required',
             'email'=>'required | email',
             'phone'=>'required',
             'password'=>'required | confirmed',
        ]);
        $insurer = new User;
        $insurer->name = request('name');
        $insurer->email = request('email');
        $insurer->phone = request('phone');
        $insurer->role_id = request('role_id');
        $insurer->password = password_hash(request('password'), PASSWORD_DEFAULT);

        if($request->hasFile('photo')){
           $file = $request->file('photo');
           $extension = $file->getClientOriginalExtension(); //getting image exension
           $filename = time().'.'.$extension;
           $file->move('uploads/pictures/user/',$filename);
           $insurer->photo =$filename;
        }else{
           return $request;
           $insurer->photo = ' ';
       }
        $insurer->save();
        return redirect('/insurer_list');
    }

    public function insurerDelete($id){
       $user = User::find($id);
       $user->delete();
       return redirect('/insurer_list');
    }

    public function lawyerAdd(){
        return view('admin.lawyer-add');
    }

    public function lawyerStore(Request $request){
        $this->validate(request(),[
             'name'=>'required',
             'email'=>'required | email',
             'phone'=>'required',
             'password'=>'required | confirmed',
        ]);

        $lawyer = new User;
        $lawyer->name = request('name');
        $lawyer->email = request('email');
        $lawyer->phone = request('phone');
        $lawyer->role_id = request('role_id');
        $lawyer->address_name = request('address_name');
        $lawyer->address_number = request('address_number');
        $lawyer->address_city = request('address_city');
        $lawyer->house_address = request('house_address');
        $lawyer->type_of_lawyer = request('type_of_lawyer');
        $lawyer->personal_statement = request('peresonal_statement');
        $lawyer->education = request('education');
        $lawyer->experience = request('experience');
        $lawyer->password = password_hash(request('password'), PASSWORD_DEFAULT);


        if($request->hasFile('photo')){
           $file = $request->file('photo');
           $extension = $file->getClientOriginalExtension(); //getting image exension
           $filename = time().'.'.$extension;
           $file->move('uploads/pictures/user/',$filename);
           $lawyer->photo =$filename;
        }else{
           return $request;
           $user->photo = '';
       }
        $lawyer->save();
        return redirect('/lawyer_list');
    }


    public function lawyerDelete($id){
       $user = User::find($id);
       $user->delete();
       return redirect('/lawyer_list');
    }

    public function adminList(){
        $admin = User::where('role_id','1')->latest()->get();
        return view('admin.admin-list')->with('admin',$admin);
    }

    public function insurerList(){
        $insurer = User::where('role_id','2')->latest()->get();
        return view('admin.insurer-list')->with('insurer',$insurer);
    }

    public function lawyerList(){
        $lawyer = Lawyer::latest()->get();
        return view('admin.lawyer-list')->with('lawyer',$lawyer);
    }

    public function userList(){
        $client = User::where('role_id','4')->latest()->get();
        return view('admin.user-list')->with('client',$client);
    }


    public function userDelete($id){
      $client = User::find($id);
      $client->delete();
      return redirect('/user_list');
    }

}
