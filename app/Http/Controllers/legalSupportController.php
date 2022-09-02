<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use App\Package;
use App\ClientPackage;
use App\Category;
use App\Invoice;
use App\Plan;

class LegalSupportController extends Controller
{
    public function home(){
    	return view('legal_support.home');
    }

    public function contact(){
    	return view('legal_support.contact');
    }

    public function services(){
    	return view('legal_support.services');
    }

    public function projects(){
        
    	return view('legal_support.projects');
    }

    public function about(){
    	return view('legal_support.about');
    }

    public function packages(){
        $packages = Package::all();
        return view('legal_support.packages')->with('packages',$packages);
    }

    public function flpp(){
        return view('legal_support.flpp.flpp');
    }

    public function flpp_categories(Package $package_alias){
        return view('legal_support.flpp.categories',['package_alias'=>$package_alias->category]);
    }

    
    public function blpp(){
        return view('legal_support.blpp.blpp');
    }

    public function blpp_categories(Package $package_alias){
        return view('legal_support.blpp.categories',['package_alias'=>$package_alias->category]);
    }

    public function plpp(){
        return view('legal_support.plpp.plpp');
    }

    public function plpp_categories(Package $package_alias){
        return view('legal_support.plpp.categories',['package_alias'=>$package_alias->category]);
    }

    public function lawyers(){
        $lawyer = User::Lawyer()->get();
        return view('legal_support.lawyer.lawyers')->with('lawyer',$lawyer);
    } 

    public function show_lawyer(User $lawyer){ 
        if(auth()->check()){
            return view('legal_support.lawyer.details',[
                'lawyer'=>$lawyer,
                'packageStatus'=>ClientPackage::Client(auth()->user()->id)->Active()->first()
            ]);
        }

        return view('legal_support.lawyer.details',['lawyer'=>$lawyer]);
       
    }

}

