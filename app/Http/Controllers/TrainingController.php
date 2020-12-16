<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;

class TrainingController extends Controller
{
    public function home(){
    	return view('training.home');
    }

    public function about(){
    	return view('training.about');
    }

    public function gallery(){
    	return view('training.gallery',['album'=>Album::get()]);
    }
}
