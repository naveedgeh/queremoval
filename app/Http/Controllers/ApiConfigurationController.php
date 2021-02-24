<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use JsonException;

class ApiConfigurationController extends Controller
{
    //Request $request
    public function ConfigApi(Request $request){
        $arr=[];
         $loction=$request->input("query");
        $response = Http::get('https://services.postcodeanywhere.co.uk/Capture/Interactive/Find/v1.10/json3.ws?', [ 
            'Key' => "YE68-EA49-RK55-ME94",
            'Text'=> $loction,
            'IsMiddleware'=> "fale",
            'Container' => "",
            'Origin'=>"",
            'Countries'=> "GBR",
            'Limit'=>"10",
            'Language' => "en-gb"
        ])->json();
     //   dd($res)    ;
            if($response['Items'][0]["Type"]=="Postcode"){
            $res = Http::get('https://services.postcodeanywhere.co.uk/Capture/Interactive/Find/v1.10/json3.ws?', [
                    'Key' => "YE68-EA49-RK55-ME94",
                    'Text'=>"",
                    'IsMiddleware'=> "fale",
                    'Container' =>$response['Items'][0]["Id"],
                    'Origin'=>"",
                    'Countries'=> "GBR",
                    'Limit'=>"10",
                    'Language' => "en-gb"
                ])->json();
                for ($i=0; $i< count($res["Items"]); $i++) { 
                    array_push($arr,$res["Items"][$i]["Text"]." ".$res["Items"][$i]["Description"]);   
               } 
            }else{
                for ($i=0; $i< count($response["Items"]); $i++) { 
                    $pos=$response["Items"][$i]["Text"]." ".$response["Items"][$i]["Description"];
                    $w="Addresses";
                    if(strpos($pos,$w)==false){
                        array_push($arr,$response["Items"][$i]["Text"]." ".$response["Items"][$i]["Description"]);   
                    }
                    
               } 
            }
                
               //dd($res);
                
                        
                 return json_encode($arr);
         
    }
    
}
