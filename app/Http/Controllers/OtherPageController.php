<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtherPageController extends Controller
{
    public function Contact(){
        return view('frontend.contact');
    }
}
