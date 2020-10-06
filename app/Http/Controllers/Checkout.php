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
        $invoices = Invoice::all();
        $categories = Category::find($id);

        $client = new ClientPackage();
        if($client->client_email != Auth::user()->email){
    	  $client->client_name = Auth::user()->name;
        $client->client_email = Auth::user()->email;
        $cilent->client_insurer = Auth::user()->insurer;
    	  $client->package_name = $categories->package->name;
    	  $client->category = $categories->Name;
    	  $client->price = $categories->Price;
    	  $client->status = "Pending";
    	  $client->photo = Auth::user()->photo;
    	  $client->save(); 
    	 

          $invoice = new Invoice();
          $invoice->number = count(Invoice::all())+1;
          $invoice->package_name = $categories->package->name;
          $invoice->category = $categories->Name;
          $invoice->price = $categories->Price;
          $invoice->issued_to = Auth::user()->name;
          $invoice->status = "Unpaid";
          $invoice->total_price = $categories->Price;
          $invoice->save();

        }
        return view('legal_support/checkout')->with('invoices',$invoices)->with('categories',$categories);
    }
}
