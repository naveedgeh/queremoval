<?php

namespace App\Http\Controllers;

use App\Models\Priceadd;
use Illuminate\Http\Request;

class ChooseVanController extends Controller
{
        public function ChooseVan(Request $req){
            $pickup=$req->input("pickup");
            $dropoff=$req->input("dropoff");
            $dist=$req->input("dist");
            $pricess=Priceadd::all();
            //========First Van=========
            $smlprice=0;
            $smldriverhelpprice=0;
            $smltwomenprice=0;
            $smlthremenprice=0;
            // ==============Second Van==========
            $medprice=0;
            $meddriverhelpprice=0;
            $medtwomenprice=0;
            $medthremenprice=0;
                    //===============Third Van================
                    $lvanprice=0;
                    $lvandriverhelpprice=0;
                    $lvantwomenprice=0;
                    $lvanthremenprice=0;
                //===============Fouxl Van================
                $xlvanprice=0;
                $xlvandriverhelpprice=0;
                $xlvantwomenprice=0;
                $xlvanthremenprice=0;
                 //===============Five Van================
                 $twoxlvanprice=0;
                 $twoxlvandriverhelpprice=0;
                 $twoxlvantwomenprice=0;
                 $twoxlvanthremenprice=0;
                  //===============six Van================
                  $threexlvanprice=0;
                  $threexlvandriverhelpprice=0;
                  $threexlvantwomenprice=0;
                  $threexlvanthremenprice=0;
            for ($i=0; $i <count($pricess) ; $i++) { 
                if($pricess[$i]->vanname=='SmallVan'){
                    $smlprice =$pricess[$i]->vanprice;
                    $smldriverhelpprice=$pricess[$i]->driverhelp;
                    $smltwomenprice=$pricess[$i]->twomenprice;
                    $smlthremenprice=$pricess[$i]->threemenprice;
                }
                if($pricess[$i]->vanname=='MediumVan'){
                    $medprice =$pricess[$i]->vanprice;
                    $meddriverhelpprice=$pricess[$i]->driverhelp;
                    $medtwomenprice=$pricess[$i]->twomenprice;
                    $medthremenprice=$pricess[$i]->threemenprice;
                }
                if($pricess[$i]->vanname=='LargeVan'){
                    $lvanprice=$pricess[$i]->vanprice;
                    $lvandriverhelpprice=$pricess[$i]->driverhelp;
                    $lvantwomenprice=$pricess[$i]->twomenprice;
                    $lvanthremenprice=$pricess[$i]->threemenprice;
                }
                if($pricess[$i]->vanname=='XLVanLuton'){
                    $xlvanprice=$pricess[$i]->vanprice;
                $xlvandriverhelpprice=$pricess[$i]->driverhelp;
                $xlvantwomenprice=$pricess[$i]->twomenprice;
                $xlvanthremenprice=$pricess[$i]->threemenprice;
                }
                if($pricess[$i]->vanname=='TwoXLLutonVans'){
                    $twoxlvanprice=$pricess[$i]->vanprice;
                    $twoxlvandriverhelpprice=$pricess[$i]->driverhelp;
                    $twoxlvantwomenprice=$pricess[$i]->twomenprice;
                    $twoxlvanthremenprice=$pricess[$i]->threemenprice;
                }
                if($pricess[$i]->vanname=='ThreeXLLutonVans'){
                    $threexlvanprice=$pricess[$i]->vanprice;
                  $threexlvandriverhelpprice=$pricess[$i]->driverhelp;
                  $threexlvantwomenprice=$pricess[$i]->twomenprice;
                  $threexlvanthremenprice=$pricess[$i]->threemenprice;
                }
            }
          
            $smallvanprice=$smlprice*$dist;
            $mediumvan=$medprice*$dist;
            $largevan=$lvanprice*$dist;
            $xlvanluton=$xlvanprice*$dist;
            $twoxllutonvans=$twoxlvanprice*$dist;
            $threexllutonvans=$threexlvanprice*$dist;
            $data=[
                'pik'=>$pickup,
                'drop'=>$dropoff,
                'dist'=>$dist,
                'smallvanprice'=>$smallvanprice,
                'mediumvan' =>$mediumvan,
                'largevan'=>$largevan,
                'xlvanluton'=>$xlvanluton,
                'twoxllutonvans'=>$twoxllutonvans,
                'threexllutonvans'=>$threexllutonvans,
                'smldriverhelpprice'=>$smldriverhelpprice,
                'smltwomenprice'=>$smltwomenprice,
                'smlthremenprice'=>$smlthremenprice,
                'meddriverhelpprice'=>$meddriverhelpprice,
                'medtwomenprice'=>$medtwomenprice,
                'medthremenprice'=>$medthremenprice,
                'lvandriverhelpprice'=>$lvandriverhelpprice,
                'lvantwomenprice'=>$lvantwomenprice,
                'lvanthremenprice'=>$lvanthremenprice,
                'xlvandriverhelpprice'=>$xlvandriverhelpprice,
                'xlvantwomenprice'=>$xlvantwomenprice,
                'xlvanthremenprice'=>$xlvanthremenprice,
                'twoxlvandriverhelpprice'=>$twoxlvandriverhelpprice,
                'twoxlvantwomenprice'=>$twoxlvantwomenprice,
                'twoxlvanthremenprice'=>$twoxlvanthremenprice,
                'threexlvandriverhelpprice'=>$threexlvandriverhelpprice,
                'threexlvantwomenprice'=>$threexlvantwomenprice,
                'threexlvanthremenprice'=>$threexlvanthremenprice,
            ];
            return view("frontend.choose-van-size",$data);
        }
}
