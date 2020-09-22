<?php

namespace App\Http\Controllers\insurer;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\ClientPackage;
use App\User;
use Auth;
use DB;

class insurerController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('insurer');
    }

    public function index(){
        $clientPackage = ClientPackage::all();
    	return view('insurer.dashboard')->with('clientPackage',$clientPackage);
    }

    public function profile(){
    	return view('insurer.profile');
    }

    public function clientAdd(){
    	return view('insurer.clientAdd');
    }

    public function storeClient(Request $request){
         $this->validate(request(),[
             'name'=>'required',
             'email'=>'required | email',
             'phone'=>'required',
             'password'=>'required | confirmed',
        ]);
        $client = new User;
        $client->name = request('name');
        $client->email = request('email');
        $client->phone = request('phone');
        $client->role_id = request('role_id');
        $client->password = password_hash(request('password'), PASSWORD_DEFAULT);

        if($request->hasFile('photo')){
           $file = $request->file('photo');
           $extension = $file->getClientOriginalExtension(); //getting image exension
           $filename = time().'.'.$extension;
           $file->move('uploads/pictures/user/',$filename);
           $client->photo =$filename;
        }else{
           return $request;
           $client->photo = ' ';
       }
        $client->save();
        return ;
    }

    public function update(){
       $user = Auth::user();
        $this->validate(request(),[
         'name'=>'required',
         'email' => 'required | email',
         'phone'=> 'required',
        ]); 

        DB::table('users')->where('id', Auth::user()->id)->update(
          ['name' => request('name'),'email'=> request('email'),'phone'=>request('phone'),'password' =>Hash::make(request('password'))]);

          return redirect('/insurer_profile');
    }    
}
