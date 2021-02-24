<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChooseVanController extends Controller
{
        public function ChooseVan(Request $req){
            $pickup=$req->input("pickup");
            $dropoff=$req->input("dropoff");
            $dist=$req->input("dist");
            $smallvanprice=140*$dist;
            $mediumvan=280*$dist;
            $largevan=298*$dist;
            $xlvanluton=337*$dist;
            $twoxllutonvans=536*$dist;
            $threexllutonvans=697*$dist;
            $data=[
                'pik'=>$pickup,
                'drop'=>$dropoff,
                'dist'=>$dist,
                'smallvanprice'=>$smallvanprice,
                'mediumvan' =>$mediumvan,
                'largevan'=>$largevan,
                'xlvanluton'=>$xlvanluton,
                'twoxllutonvans'=>$twoxllutonvans,
                'threexllutonvans'=>$threexllutonvans

            ];
            return view("frontend.choose-van-size",$data);
        }
}
