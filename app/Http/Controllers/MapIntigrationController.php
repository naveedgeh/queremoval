<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MapIntigrationController extends Controller
{
    public function Booking(Request $request){
            $valiation=$request->validate([
                        'pickup'=>'required',
                        'dropoff'=>'required'
            ]);
            if($valiation==false){
                return back();
            }
        $pickup=$request->input('pickup');
        $dropoff=$request->input('dropoff');
        $dist=0;
     
        $distance=Http::get(config('googlemap')['map_distance_api'].'&origins='.$pickup.'&destinations='.$dropoff.'&key='.config('googlemap')['map_apikey']);
        $distance_arr=json_decode($distance);
       // dd($distance_arr);
       
            $elements = $distance_arr->rows[0]->elements;
            $distance = $elements[0]->distance->text;
            $duration = $elements[0]->duration->text;
            
            if($distance!='1 m'){
                $dis=trim(str_replace("km"," ",$distance));
            }else{
                $dis=0;
            }
            //dd($distance);
            $dist=round($dis*0.62137,2);
            //dd($dist);
        return view('frontend.book',['pickup'=>$pickup,'dropoff'=>$dropoff,'distance'=>$dist]);
    }
}
