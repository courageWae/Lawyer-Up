<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\ClientPackage;
use App\Invoice;
use App\User;

class InsurerController extends Controller
{
    public function dashboard(){
        $clientPackage =self::getPackage();
        $clientPackage = Collect($clientPackage);

        $inActivePackage = $clientPackage->filter(function($item){
            return $item->status == 'Inactive';
        });

        $activePackage = $clientPackage->filter(function($item){
            return $item->status == 'Active';
        });
        return view('insurer.dashboard',[
            'insurerClient'=>User::InsurerClient(auth()->user()->id)->get(),
            'clientInvoice'=>self::getInvoice(),
            'activePackage'=>$activePackage,
            'inActivePackage'=>$inActivePackage
        ]);
    }

    public function view_profile(){
    	return view('insurer.profile');
    }

    public function edit_profile(){
    	return view('insurer.edit_profile');
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
        return view('insurer.edit_password');
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
        return view('insurer.edit_email');
    }

    public function update_email(Request $request, User $insurer){
        $request->validate(['email'=>['required','string','email','max:255','unique:users']]);
        return redirect()->back()->with([
            'message'=>'Email activation code was sent to the email you provided',
            'alert'=>'alert-success'
        ]);
    }

    public function activate_email(){
        return view('insurer.activate_email');
    }
    
    // Not completed, Needs refactoring
    public function activation_email(Request $request, User $alias){
        return redirect()->back()->with([
            'message'=>'Email Activated',
            'alert'=>'alert-success'
        ]);
    }


    public function list_client(){
        return view('insurer.list_client',['client'=>User::where('insurer',auth()->user()->id)->get()]);       
    }

    public function add_client(Request $request){
        if($request->isMethod('post')){
            app('App\Http\Controllers\FormValidator')->myValidator($request);
            $request->validate([
                'email'=>['required','string','email','max:255','unique:users'],
                'user_name'=>['required','string','max:255','unique:users']
            ]);
            User::Create([
                'email'=>$request->email,
                'name'=>$request->name,
                'user_name'=>$request->user_name,
                'alias'=>Str::slug($request->name.$request->user_name,'-'),
                'phone'=>$request->phone,
                'role_id' => $request->role_id,
                'insurer'=>$request->insurer,
                'password'=>password_hash($request->password, PASSWORD_DEFAULT)
            ]);
            return redirect()->back()->with(['message' => 'Client Added Successfully', 'alert' => 'alert-success']);
        }else{
            return view('insurer.client_add');
        }

    }

    public function view_client(User $alias){
        return view('insurer.view_client',['alias'=>$alias]);   
    }

    // public function destroy_client(User $alias){
    //     $alias->delete();
    //     return redirect()->back()->with(['message' => 'Client Deleted Successfully', 'alert' => 'alert-success']);
    // }

    public function list_package(){
        return view('insurer.list_package',['clientPackages'=>ClientPackage::get()]);
    }

    public function view_package(ClientPackage $package){
        return view('insurer.view_package',['package'=>$package]);
    }

    public function delete_package(ClientPackage $package){
        return redirect()->back()->with(['message' => 'Please wait for approval from the administrator', 'alert' => 'alert-info']);
    }

    public function activate_package(ClientPackage $package){
        foreach(Invoice::get() as $invoice){
            if($invoice->category_id == $package->category_id){
                $invoice->update(['status'=>'Paid']);
                break;
            }
        }
        $package->update(['status'=>'Active']);
        return redirect()->back()->with(['message' => 'Package Activated', 'alert' => 'alert-success']);
    }

    public function deactivate_package(ClientPackage $package){
        foreach(Invoice::get() as $invoice){
            if($invoice->category_id == $package->category_id){
                $invoice->update(['status'=>'Unpaid']);
                break;
            }
        }
        $package->update(['status'=>'Inactive']);
        return redirect()->back()->with(['message' => 'Package Deactivated', 'alert' => 'alert-success']);
    }

    public function getPackage(){
        $packages = [];
        foreach(ClientPackage::all() as $clientPackage){
            $client = User::find($clientPackage->user_id);
            if($client->insurer == auth()->user()->id){
                $packages[] = $clientPackage;
            }
        }
        return $packages;
    }

    public function getInvoice(){
        $invoices = [];
        foreach(Invoice::all() as $clientInvoice){
            $client = User::find($clientInvoice->user_id);
            if($client->insurer == auth()->user()->id){
                $invoices[] = $clientInvoice;
            }
        }
        return $invoices;
    }
}
