<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use App\Package;
use App\Invoice;
use App\Plan;

class legalSupportController extends Controller
{
    public function home(){
    	return view('legal_support/web/home');
    }

    public function contact(){
    	return view('legal_support/web/contact');
    }

    public function services(){
    	return view('legal_support/web/services');
    }

    public function projects(){
    	return view('legal_support/web/projects');
    }

    public function about(){
    	return view('legal_support/web/about');
    }

    public function packages(){
        return view('legal_support/web/packages');
    }

    public function flpp(){
        return view('legal_support/web/flpp');
    }

    public function plpp(){
        return view('legal_support/web/plpp');
    }

    public function blpp(){
        return view('legal_support/web/blpp');
    }

    public function flpp_categories(){
        return view('legal_support/web/flpp_categories');
    }

     public function blpp_categories(){
        return view('legal_support/web/blpp_categories');
    }

     public function plpp_categories(){
        return view('legal_support/web/plpp_categories');
    }

    public function checkout(){
        $invoice = Invoice::all();
        return view('legal_support/web/checkout')->with('invoice',$invoice);
    }
    
    public function lawyers(){
        $lawyer = User::where('role_id','3')->get();
        return view('legal_support/web/lawyers')->with('lawyer',$lawyer);
    }

    public function showLawyer($id){
        $lawyer = User::where('role_id','3')->find($id);
        $package = Package::all();

     return view('legal_support/web/lawyer-details')->with('lawyer',$lawyer)->with('package',$package);
    }

}

