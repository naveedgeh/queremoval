<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function HomeRemoval(){
        return view('frontend.homeremoval');
    }
    public function OfficeMoves(){
        return view('frontend.office-moves');
    }
}
