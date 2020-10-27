<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
class MessageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        Message::create($request->only(['name','email','phone','message']));
        return redirect()->back()->with(['message' => 'Your Message Was Submitted Successfully', 'alert' => 'alert-success']);
    }
}
