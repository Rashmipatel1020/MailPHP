<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\PHPMail;

class SendEmailController extends Controller
{
    function index()
    {
        return view('send_email');
    }

    function create()
    {
        return view('send_email.create');
    }

     function store(Request $request)
     {
         //return "save";
         //dd($request->all());
            

     }

    function send(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email',
            'message'=>'required'
        ]);
      
 
        $data = array(
            'name' => $request->name,
            'email' =>$request->email,
            'message' => $request->message
        );

        $phpmail=new PHPMail();
            $phpmail->name=$request->name;
            $phpmail->email=$request->email;
            $phpmail->message=$request->message;
           $phpmail->save();

        Mail::to('rashmisingh1297@gmail.com')->send(new SendMail($data));
        //return back()->with('success','thanks');
        echo ' email send';
    }
 
     
  

}
