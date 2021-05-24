<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Stripe;
use \App\Mail\SendMail;
use \App\Mail\ClientMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Priceadd;
use App\Models\AdditionalPrice;
class CheckoutController extends Controller
{
    private $booking;
    public function __construct()
    {
        $this->booking=new Booking();
    }
    public function Checkout(Request $request){
        // dd($request->all());
            //dd(str_replace(' ','',$request->vanname));
        $hiddenfields=$request->all();
        $priceaddtable=Priceadd::where('vanname','=',str_replace(' ','',$request->vanname))->get();
        $addtionalprice=AdditionalPrice::get()->first();
     
        //dd($priceaddtable);
        //dd($hiddenfields);
        return view('frontend.checkouts',['hiddenfielsdata'=>$hiddenfields,'valpricetable'=>$priceaddtable,"additionalprice"=>$addtionalprice]);
    }
   public function Success(){
       return view('frontend.success');
   }
    public function ConfirmStor(Request $request){
        
        \Stripe\Stripe::setApiKey(config('stripekey')['stripekey_one']);
        $token=$request->stripeToken;
        $email=$request->stripeEmail;
        
        // Token is created using checkout or Element
        $charge=\Stripe\Charge::create([
            
            'amount'=>(int)$request->price,
            'currency'=>'GBP',
            'description'=>'Airport Extras',
            'source'=>$token,
        
        ]);
        // dd($charge);
         $validation=$request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
        ]);
        if($validation==false){
            return redirect('checkout');
        }
        if($charge){
        $this->booking->pickuppoint=$request->input('pickup');
        $this->booking->dropoffpoint=$request->input('dropoff');
        $this->booking->distance=$request->input('miles');
        $this->booking->vanname=$request->input('vanname');
        $this->booking->price=$request->input('price');
        $this->booking->extrahelp=$request->input('extrahelp');
        if(!empty( $request->input('inventry'))){
            $this->booking->inventory=json_encode($request->input('inventry'));
        }
        else{
            $this->booking->inventory='';
        }
        $this->booking->passenger=$request->input('passenger');
        $this->booking->requirements=$request->input('requirement');
        $this->booking->stairsatpickupaddress=$request->input('pikuppart');
        $this->booking->starisatpickupleft=$request->input('pickupleft');
        $this->booking->stairsatdropoffaddress=$request->input('dropoffpart');
        $this->booking->stairsatdropoffleft=$request->input('dropofleft');
        $this->booking->bookingdate=$request->input('datetime');
        $this->booking->firstname=$request->input('firstname');
        $this->booking->lastname=$request->input('lastname');
        $this->booking->email=$request->input('email');
        $this->booking->phonenumber=$request->input('phonenumber');
      
       
        $resposnce=$this->booking->save();
        if($resposnce){
            $emaildetails = [
                'firstname' =>$request->input('firstname'),
                'lastname' => $request->input('lastname'),
                'email'=> $request->input('email'),
                'phonenumber'=>$request->input('phonenumber'),
                'pickup'=>$request->input('pickup'),
                'dropoff'=>$request->input('dropoff'),
                'miles'=>(int)$request->input('miles'),
                'vanname'=>$request->input('vanname'),
                'price'=>(int)$request->input('price'),
                'extrahelp'=>$request->input('extrahelp'),
                'inventry'=>join(',',$request->input('inventry')),
                'passenger'=>$request->input('passenger'),
                'requirement'=>$request->input('requirement'),
                'pikuppart'=>$request->input('pikuppart'),
                'pickupleft'=>$request->input('pickupleft'),
                'dropoffpart'=>$request->input('dropoffpart'),
                'dropofleft'=>$request->input('dropofleft'),
                'datetime'=>$request->input('datetime'),
            ];
           Mail::to(['queremovals@mobileandtechnology.com'])->Send(new SendMail($emaildetails));
           Mail::to([$email])->Send(new ClientMail($emaildetails));
       
        }
        return redirect('/success');

        }
        
        return back();;
       
    }
}
