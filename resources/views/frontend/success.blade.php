@extends('frontend.layout.masterlayout')
@section('Title')
Sucess
@endsection

@section('mainbody')
<div class="container m-lg-5">
    <div class="card">
        <h5 class="card-title bg-primary p-2 text-white">Message</h5>
        <div class="card-body ">
         
          <p class="card-text">Thanks For contact with my team we will contact with you soon on phone or email.</p>
          <a href="{{url('/')}}" class="btn btn-primary">Go Back New Booking</a>
        </div>
      </div>
</div>
@endsection