<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function Checkout(Request $request){

        $hiddenfields=$request->all();
        //dd($hiddenfields);
        return view('frontend.checkout',['hiddenfielsdata'=>$hiddenfields]);
    }
   
    public function ConfirmStor(Request $request){
         $validation=$request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
        ]);
        if($validation==false){
            return redirect('checkout');
        }
        dd($request);
       
    }
}
