<?php

namespace App\Http\Controllers\insurer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class insurerController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('insurer');
    }

    public function index(){
    	return view('insurer.dashboard');
    }

    public function profile(){
    	return view('insurer.profile');
    }

    public function clientAdd(){
    	return view('insurer.client-add');
    }
}
