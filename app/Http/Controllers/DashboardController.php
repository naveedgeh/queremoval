<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Priceadd;
class DashboardController extends Controller
{
    private $priceadd;
    public function __construct()
    {
        $this->priceadd=new Priceadd();
    }
    public function Dashboard(){

        return view('admin.Dashboard.dashboard');
    }
    public function Priceadd(){
        $vanprice=$this->priceadd::get();

        return view('admin.Dashboard.priceadd',['vanprice'=>$vanprice]);
    }
    public function AddPrice(Request $request){
        $validation=$request->validate([
            'vanprice' => 'required',
            
        ]);
            if($validation==false){
                return redirect()->back()->with("msg","fill all fields first");
            }
            $price=Priceadd::where(
                [
                'vanname'=>$request->vans
            ]
        )->first();
        if($price!=null){
            if($price->vanname!=$request->vans){
                $this->priceadd->vanname=$request->input('vans');
                $this->priceadd->vanprice=$request->input('vanprice');
                $this->priceadd->driverhelp=$request->input('driverhelpprice');
                $this->priceadd->twomenprice=$request->input('twomanprice');
                $this->priceadd->threemenprice=$request->input('threemanprice');
               $this->priceadd->save();
               return redirect()->back()->with('msg',"Price Successfuly Added");
            }
        }
        else{
            $this->priceadd->vanname=$request->input('vans');
                $this->priceadd->vanprice=$request->input('vanprice');
                $this->priceadd->driverhelp=$request->input('driverhelpprice');
                $this->priceadd->twomenprice=$request->input('twomanprice');
                $this->priceadd->threemenprice=$request->input('threemanprice');
               $this->priceadd->save();
               return redirect()->back()->with('msg',"Price Successfuly Added");
        }
       
        return redirect()->back()->with('msg',"Not added duplicat vehical price");
    }
    public function delPrice($id){
        $user = $this->priceadd::find($id);
        $user->delete();
        return redirect()->back()->with('msg',"Delete Record Successfuly");
    }
}
