<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Priceadd;
use App\Models\AdditionalPrice;

class DashboardController extends Controller
{
    private $priceadd;
    private $additional;
    public function __construct()
    {
        $this->priceadd=new Priceadd();
        $this->additional=new AdditionalPrice();
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
                $this->priceadd->selfload=$request->input('selfload');
                $this->priceadd->vanname=$request->input('vans');
                $this->priceadd->vanprice=$request->input('vanprice');
                $this->priceadd->driverhelp=$request->input('driverhelpprice');
                $this->priceadd->twomenprice=$request->input('twomanprice');
                $this->priceadd->threemenprice=$request->input('threemanprice');
                $this->priceadd->twomanhalfhourprice=$request->input('twomanhalfhourprice');
                $this->priceadd->threemanhalfhourprice=$request->input('threemanhalfhourprice');
                $this->priceadd->driverhelphalfhourprice=$request->input('driverhelphalfhourprice');
                $this->priceadd->floorpricewithoutleft=$request->input('floorpricewithoutleft');
                $this->priceadd->floorpricewithleft=$request->input('floorpricewithleft');
                $this->priceadd->speiciealtime=$request->input("speiciealtime");
               $this->priceadd->save();
               return redirect()->back()->with('msg',"Price Successfuly Added");
            }
        }
        else{
            $this->priceadd->selfload=$request->input('selfload');
            $this->priceadd->vanname=$request->input('vans');
                $this->priceadd->vanprice=$request->input('vanprice');
                $this->priceadd->driverhelp=$request->input('driverhelpprice');
                $this->priceadd->twomenprice=$request->input('twomanprice');
                $this->priceadd->threemenprice=$request->input('threemanprice');
                $this->priceadd->twomanhalfhourprice=$request->input('twomanhalfhourprice');
                $this->priceadd->threemanhalfhourprice=$request->input('threemanhalfhourprice');
                $this->priceadd->driverhelphalfhourprice=$request->input('driverhelphalfhourprice');
                $this->priceadd->floorpricewithoutleft=$request->input('floorpricewithoutleft');
                $this->priceadd->floorpricewithleft=$request->input('floorpricewithleft');
                $this->priceadd->speiciealtime=$request->input("speiciealtime");
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
    public function AddPriceadd(){
        $price=$this->additional::get();
        
        // dd($price);
        return view('admin.Dashboard.additionalpriceadd',["additionalprice"=>$price]);
    }
    public function AddPriceaddFull(){
        $price=$this->additional::get();
        
        // dd($price);
        return view('admin.Dashboard.addpriceaddfull',["additionalprice"=>$price]);
    }
    public function AddPriceadditional(Request $request){
       
        $validation=$request->validate([
            'stopprice' => 'required',
            
        ]);
        if($validation==false){
            return redirect()->back()->with("msg","fill all fields first");
        }
        $token="_qwckdieclo";
        $tokenverify=AdditionalPrice::where(['token'=>$token])->first();
    //    dd($tokenverify);
        if($tokenverify==null){
            $this->additional->additionalprice=$request->input('stopprice');
            $this->additional->token=$token;
            $this->additional->save();
            return redirect()->back()->with('msg',"Price Successfuly Added");
        }
        else{
            return redirect()->back()->with("msg","This record already existing If you want to change please delete first");
        }
        return view('admin.Dashboard.additionalpriceadd');
    }
    public function AddPriceadditionalFull(Request $request){
       
        $validation=$request->validate([
            'fullpack' => 'required',
            
        ]);
        if($validation==false){
            return redirect()->back()->with("msg","fill all fields first");
        }
        $token="_qwckdieclo";
        $tokenverify=AdditionalPrice::where(['token'=>$token])->first();
    //    dd($tokenverify);
        if($tokenverify==null){
            $this->additional->additionalprice=$request->input('fullpack');
            $this->additional->token=$token;
            $this->additional->save();
            return redirect()->back()->with('msg',"Price Successfuly Added");
        }
        else{
            return redirect()->back()->with("msg","This record already existing If you want to change please delete first");
        }
        return view('admin.Dashboard.additionalpriceadd');
    }
    public function deladdotionalprice($id){
        $user = $this->additional::find($id);
        $user->delete();
        return redirect()->back()->with('msg',"Delete Record Successfuly");
    }
}
