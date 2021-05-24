<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\admin;

class AdminLoginController extends Controller
{   
    private $admin;
    public function __construct()
    {
        $this->admin=new admin();
    }
    public function LoginUi(){
        return view('admin/login');
    }
    public function Login(Request $request){
    //    dd(Hash::make("queremoval"));
        $validated = $request->validate([
        	'username' => 'required',
        	'password' => 'required',
    	]);
        $admin=admin::where([
                "email"=>$request->input('username')
        ])->first();
        if(!empty($admin)){
                if(!empty($admin->password) && Hash::check($request->password,$admin->password)){
                    session(['username'=>$request->input('username'),'name'=>$admin->name]); 
                      
                    return redirect('admin/dashboard');
                }
        }
        return back();
           
    }
    public function Logout(Request $request){
        $request->session()->forget('username');
        $request->session('username')->flush();
        return back();
    }
}
