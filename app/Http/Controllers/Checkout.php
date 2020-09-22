<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Category;
use \App\ClientPackage;
use \App\Package;
use \App\Invoice;
use Auth;
use DB;

class Checkout extends Controller
{
     public function index($id){
        $invoice = Invoice::all();
        $categories = Category::find($id);
        $client = new ClientPackage();
    	$client->client_name = Auth::user()->name;
        $client->client_email = Auth::user()->email;
    	$client->package_name = $categories->package->name;
    	$client->category = $categories->Name;
    	$client->price = $categories->Price;
    	$client->status = "Pending";
    	$client->photo = Auth::user()->photo;
    	$client->save(); 
    	   
        return view('legal_support/checkout')->with('invoice',$invoice)->with('categories',$categories);
    }
}
