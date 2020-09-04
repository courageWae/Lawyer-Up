<?php

namespace App\Http\Controllers\lawyer;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Package;
use App\Lawyer;
use App\user;
use Auth;

class lawyerController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('lawyer');
    }

    public function findLawyer(){
    	$lawyer = User::all();
    	foreach($lawyer as $lawyer){
    		if($lawyer->email == Auth::user()->email){
    			return $lawyer;
    			break;
    		}
    	}
    }

    public function index(){
        $lawyer = self::findLawyer();	
    	return view('lawyer.dashboard')->with('lawyer',$lawyer);
    }

    public function profile(){
    	$lawyer = self::findLawyer();
    	return view('lawyer.profile')->with('lawyer',$lawyer);
    }

     public function update(){
        $lawyer = self::findlawyer();
        
        $this->validate(request(),[
         'name'=>'required',
         'email' => 'required | email',
         'phone'=> 'required',
         'password' => 'required | confirmed'
        ]);

        
        $newDetails = [
        $lawyer->name = request('name'),
        $lawyer->email = request('email'),
        $lawyer->phone = request('phone'),
        $lawyer->address_name = request('address_name'),
        $lawyer->address_number = request('address_number'),
        $lawyer->address_city = request('address_city'),
        $lawyer->house_address = request('house_address'),
        $lawyer->type_of_lawyer = request('type_of_lawyer'),
        $lawyer->personal_statement = request('personal_statement'),
        $lawyer->education = request('education'),
        $lawyer->experience = request('experience'),
        $lawyer->password = Hash::make(request('password'))
    ];
        $lawyer->update($newDetails);
        return redirect('/lawyer_profile');
    }
}
