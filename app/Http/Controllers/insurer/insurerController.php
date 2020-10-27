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
    
    public function __construct()
    {
        $this->middleware('insurer');
    }

    public function index(){
        $clientPackage = ClientPackage::where('client_insurer',Auth::user()->name)->get();
          return view('insurer.dashboard')->with('clientPackage',$clientPackage);
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
        $client->insurer = Auth::user()->name;
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
        return redirect()->route('insurer.client.list');
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
          return redirect()->back();
    }

    public function clientList(){
      $client = User::where('insurer',Auth::user()->name)->get();
      return view('insurer.clientList',['client'=>$client]);
    }

    public function clientView($id){
      $client = User::find($id);
      return view('insurer.clientView',['client'=>$client]);
    }

    public function destroy($id){
      $user = User::find($id);
       if(isset($user)){
         $user->delete();
       }
      return redirect()->back();
    }    
}
