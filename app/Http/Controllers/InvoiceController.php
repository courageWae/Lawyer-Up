<?php

namespace App\Http\Controllers;

use App\ClientPackage;
use App\Category;
use App\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index( Category $category){ 
        $isPackageStatus = ClientPackage::where('user_id',auth()->user()->id);
        $invoice = Invoice::all();
        // if(count(ClientPackage::all()) == 0){
        // 	self::store_client_package($category);
        // }
        if($isPackageStatus->value('status') != 'Active'){
            self::store_client_package($category);
        }
        else if(($isPackageStatus->value('status') != 'Active') && ($isPackageStatus->value('category_id')!=$category->id))
        {
        	self::store_client_package($category);  	
        }
        
    	return view('invoice',['category'=>$category,'invoice'=>$invoice]);
    }

    public function store_client_package($category){

    	$client = new ClientPackage();
    	$client->user_id = auth()->user()->id;
        $client->category_id = $category->id;
        $client->status = "Inactive";
        $client->save();

        $invoice = new Invoice();
        $invoice->user_id = auth()->user()->id;
        $invoice->category_id = $category->id;
        $invoice->status = "Unpaid";
        $invoice->total = $category->price;

        $client->save();
        $invoice->save();
    }

}
