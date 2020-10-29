<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClientPackage;
use App\Invoice;
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

    public function add_client(Request $request){
        if($request->isMethod('post')){
            $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' =>['required'],
            'role_id' =>['required'],
            'insurer'=>['required'],
        ]);
            $client = new User();
              $client->name = $request->name;
              $client->email = $request->email;
              $client->phone = $request->phone;
              $client->role_id = $request->role_id;
              $client->insurer = $request->insurer;
              $client->password = $request->password;


            if($request->hasFile('photo')){
               $file = $request->file('photo');
               $extension = $file->getClientOriginalExtension(); //getting image exension
               $filename = time().'.'.$extension;
               $file->move('uploads/pictures/user/',$filename);
               $client->photo =$filename;
            }else{
                $client->photo = ' ';
            }
            $client->save();
            return redirect()->back()->with(['message' => 'You Added a New Client', 'alert' => 'alert-success']);
        }else{
            return view('insurer.client_add');
        }

    }
    // Needs Refactoring
    public function list_client(){
    	return view('insurer.list_client',['client'=>User::where('insurer',auth()->user()->name)->get()]);
    }

    public function view_client(User $client){
        return view('insurer.view_client',['client'=>$client]);   
    }

    public function list_invoice(){
        $allClientInvoice = [];
        foreach(Invoice::all() as $clientInvoice){
            $client = User::find($clientInvoice->user_id);
            if($client->insurer == auth()->user()->name){
                $allClientInvoice[] = $clientInvoice;
            }
        }
        return view('insurer.list_invoice',['allClientInvoice'=>$allClientInvoice]);
    }

    public function view_invoice(Invoice $clientInvoice){
        return view('insurer.view_invoice',['clientInvoice'=>$clientInvoice]);
    }
}
