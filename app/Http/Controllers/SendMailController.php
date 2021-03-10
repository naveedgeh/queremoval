<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class SendMailController extends Controller
{
    public function Contact(Request $request){

            $validation=$request->validate([
                "name"=>'required',
                "email"=>'required',
                "phone"=>'required',
                'message'=>'required'
            ]);
            if(!$validation){
                return back();
            }
        $datadetail=[
                'name'=>$request->input('name'),
                'email'=>$request->input('email'),
                'phone'=>$request->input('phone'),
                'message'=>$request->input('message')
        ];

        Mail::to(['mastermindgeh@gmail.com'])->Send(new ContactMail($datadetail));
       
        return view('frontend.success');
    }
}
