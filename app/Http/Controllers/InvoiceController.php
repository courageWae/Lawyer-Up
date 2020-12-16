<?php

namespace App\Http\Controllers;

use App\ClientPackage;
use App\Category;
use App\Invoice;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class InvoiceController extends Controller
{
    public function index(Category $category_alias){ 

        ClientPackage::firstOrCreate([
            'package_id'=>$category_alias->package->id,
            'category_id'=>$category_alias->id,
            'user_id'=>auth()->user()->id
            ],
            ['status'=>'Inactive']
        );

        Invoice::firstOrCreate([
            'invoice_alias'=>Str::slug(auth()->user()->name.$category_alias->id,'-'),
            'package_id'=>$category_alias->package->id,
            'category_id'=> $category_alias->id,
            'user_id'=> auth()->user()->id 
             ],
             ['status'=> 'Unpaid',
            'total' => $category_alias->price]
        );
        return view('user.invoice',['category_alias'=>$category_alias,'invoice'=>Invoice::get()]);
    }

    public function list_invoice(){
        return view('insurer.list_invoice',['clientsInvoice'=>Invoice::get()]);
    }

    public function view_invoice(Invoice $invoice_alias){
        return view('insurer.view_invoice',['invoice_alias'=>$invoice_alias]);
    }

    // public function getInvoice(){
    //     $invoices = [];
    //     foreach(Invoice::all() as $clientInvoice){
    //         $client = User::find($clientInvoice->user_id);
    //         if($client->insurer == auth()->user()->id){
    //             $invoices[] = $clientInvoice;
    //         }
    //     }
    //     return $invoices;
    // }

    public function delete(Invoice $invoice){
        $invoice->delete();
        return redirect()->back()->with(['message'=>'Client Added Successfully','alert'=>'alert-success']);

    }

}
