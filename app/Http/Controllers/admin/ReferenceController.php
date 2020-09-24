<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Reference;

class ReferenceController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }

    public function index(){
        $reference = Reference::all();
    	return view('admin.reference')->with('reference',$reference);
    }

    public function store(){
    	$reference = new Reference();
    	$reference->by = request('by');
    	$reference->phone = request('phone');
    	$reference->code = request('code');
    	$reference->date = request('date');
    	$reference->save();

    	return redirect()->route('reference');
    }

    public function destroy($id){
    	Reference::find($id)->delete();
        return redirect()->route('reference');
    }
}
