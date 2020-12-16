<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormValidator extends Controller
{
    public function myValidator(Request $request){
        if($request->has('name')) $request->validate(['name'=>['required','string','max:255','min:2']]);
        if($request->has('email')) $request->validate(['email'=>['required','string','email','max:255']]);
        if($request->has('user_name')) $request->validate(['user_name'=>['required','string','max:255']]);
        if($request->has('address')) $request->validate(['address'=>['required','string','max:255']]);
        if($request->has('house_address')) $request->validate(['house_address'=>['required','string']]);
    	  if($request->has('education')) $request->validate(['education'=>'required','string','min:15','max:50']);
        if($request->has('type_of_lawyer')) $request->validate(['type_of_lawyer'=>['required','string']]);
        if($request->has('insurer')) $request->validate(['insurer'=>['required','string']]);
    	  if($request->has('experience')) $request->validate(['experience'=>'required','string','min:15','max:50']);
    	  if($request->has('personal_statement')) $request->validate(['personal_statement'=>'required','string','min:15','max:50']);
        if($request->has('phone')) $request->validate(['phone'=>['required','numeric','min:10']]);
        if($request->has('description')) $request->validate(['description'=>['required','min:10']]);
        if($request->has('password')) $request->validate(['password'=>['required','min:8','string','confirmed']])
        	;
        if($request->hasFile('photo')){
               $request->validate(['photo'=>['image','mimes:jpeg,png,jpg']]);
               $file = $request->file('photo');
               $extension = $file->getClientOriginalExtension(); //getting image extension
               $filename = time().'.'.$extension;
               $file->move('uploads/pictures/user/',$filename);
               $request->photo = $filename;
            }else{
                return $request;
            } 
    }
}
