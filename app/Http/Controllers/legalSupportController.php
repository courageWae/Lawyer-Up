<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use \App\Package;
use App\ClientPackage;
use App\Category;
use App\Invoice;
use App\Plan;

class legalSupportController extends Controller
{
    public function home(){
    	return view('legal_support/home');
    }

    public function contact(){
    	return view('legal_support/contact');
    }

    public function services(){
    	return view('legal_support/services');
    }

    public function projects(){
        
    	return view('legal_support/projects');
    }

    public function about(){
    	return view('legal_support/about');
    }

    public function packages(){
        $packages = Package::all();
        return view('legal_support/packages')->with('packages',$packages);
    }

    public function flpp(){
        return view('legal_support/flpp/flpp');
    }

    public function plpp(){
        return view('legal_support.plpp.plpp');
    }

    public function blpp(){
        return view('legal_support.blpp.blpp');
    }

    public function flpp_categories(){
        $categories = Package::find(1)->category;  
        return view('legal_support/flpp/categories')->with('categories',$categories);
    }

     public function plpp_categories(){
        $categories = Package::find(2)->category;
        return view('legal_support/plpp/categories')->with('categories',$categories);
    }

    public function blpp_categories(){
        $categories = Package::find(3)->category;
        return view('legal_support/blpp/categories')->with('categories',$categories);
    }

    
    public function lawyers(){
        $lawyer = User::where('role_id','3')->get();
        return view('legal_support/lawyer/lawyers')->with('lawyer',$lawyer);
    }

    public function showLawyer($id){
        $lawyer = User::where('role_id','3')->find($id);
        $clientPackage = ClientPackage::all();
     return view('legal_support/lawyer/details')->with('lawyer',$lawyer)->with('clientPackage',$clientPackage);
    }

}

