<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class messagesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $this->validate($request,[
          'name'=>'required',
          'email'=>'required | email',
          'phone'=>'required',
          'message'=>'required',
          'destination'=>'required'
        ]);
       
       $msg = new Message;

       $msg->name = request('name');
       $msg->email = request('email');
       $msg->phone = request('phone');
       $msg->message = request('message');
       $msg->destination = request('destination');
        
       $msg->save();
       return redirect()->back();
    }
}
