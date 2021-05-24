<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Priceadd;
class ViewDetails extends Controller
{
    private $priceadd;
    public function __construct()
    {
        $this->priceadd=new Priceadd();
    }
    public function Index(){
        $vanprice=$this->priceadd::get();
        return view('admin.Dashboard.viewdetails',  ['vanprice'=>$vanprice]);
    }
    public function Editprice($id){
       
        $singaldata=Priceadd::where('id',$id)->first();
        
        return json_encode($singaldata);
    }
    public function Updateprice(Request $request){
        $validation=$request->validate([
                'vans'=>'required'
        ]);
        if($validation){

        
        $data=Priceadd::where('id',$request->input("pid"))
                        ->update([
                            // "vanname"=>$request->input('vans'),
                            "vanprice"=>$request->input('vanprice'),
                            "driverhelp"=>$request->input('driverhelpprice'),
                            "twomenprice"=>$request->input('twomanprice'),
                            "threemenprice"=>$request->input('threemanprice'),
                            "twomanhalfhourprice"=>$request->input('twomanhalfhourprice'),
                            "threemanhalfhourprice"=>$request->input('threemanhalfhourprice'),
                            "driverhelphalfhourprice"=>$request->input('driverhelphalfhourprice'),
                            "floorpricewithoutleft"=>$request->input('floorpricewithoutleft'),
                            "floorpricewithleft"=>$request->input('floorpricewithleft'),
                            "speiciealtime"=>$request->input("speiciealtime")
                        ]);
                        return back();
                        }
                        return back();
    }
}
