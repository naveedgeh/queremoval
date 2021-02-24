@extends('frontend.layout.masterlayout')
@section('Title')
    Booking
@endsection


@section('mainbody')
    		<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-mini">
            ​
                        <div class="container clearfix">
                            <h1>Step Two</h1>
                            <span>Everything you need to know about our Company</span>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Step Two</li>
                            </ol>
                        </div>
            ​
                    </section><!-- #page-title end -->
            ​
            ​
                    <!-- Slider
                    ============================================= -->
                    
                
                    <section id="content">
                        <div class="content-wrap">
                            <div class="container clearfix">
            ​
                                <div class="row">
            ​
                                    <div class="col-lg-6 col-md-6">
                                     <form action="{{url('/choose-van-size')}}" method="post">
                                         @csrf
                                        <label>Pickup Point <span style="font-size:9px;">Click Below to Eidt Address</span></label>
                                        <input type="text" id="pickup" name="pickup"value="{{$pickup}}" class="required sm-form-control location valid">
                                        <div id="picklocationbooking1">
												
                                        </div>
                                        <br>
                                        <label>Dropoff Point <span style="font-size:9px;">Click Below to Eidt Address</span></label>
                                        <input type="text" id="dropoff" name="dropoff" value="{{$dropoff}}" class="required sm-form-control location valid">
                                        <div id="picklocationbooking2">
												
                                        </div>
                                        <br>
                                        <p style="font-size:14px;"><i style="color:grey;font-size:15px;" class="icon-truck1"></i> <strong>Distance:</strong>{{ number_format($distance,2)}} Miles </p>
            ​                             <input type="hidden" id="bprice" name="dist" value="{{number_format($distance?$distance:'0',2)}}">
                                        
                                     <button style="width:100%;" class="button button-3d m-0" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
                                    <br><br>
                                        <p>Que removal Ltd is an expert in the removal industry. We don’t just provide a van and a driver; we provide an experienced removal expert who will ensure that everything runs smoothly for you.</p>
            </form>
                                    </div>
            ​
                                    
            <div class="col-lg-6 col-md-6">
            ​       <div id="map">
             
            </div>
                    {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2480.54103885942!2d-0.09369858435932413!3d51.5583144148004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761c7fca310527%3A0x6960d93c9955b87f!2sCatherall%20Rd%2C%20Highbury%20East%2C%20London%20N5%202LD%2C%20UK!5e0!3m2!1sen!2s!4v1613134481911!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>		 --}}
                                    </div>
                                    
            ​
                                </div>
            ​
                            </div>
            ​
                            <div class="section m-0">
                                <div class="container clearfix">
            ​
                                    <div class="row col-mb-50">
            ​
                                        <div class="col-sm-6 col-lg-3 text-center" data-animate="bounceIn">
                                            <i class="i-plain i-xlarge mx-auto icon-line2-directions"></i>
                                            <div class="counter counter-lined"><span data-from="100" data-to="2000" data-refresh-interval="50" data-speed="2000"></span>+</div>
                                            <h5>Clients Serve</h5>
                                        </div>
            ​
                                        <div class="col-sm-6 col-lg-3 text-center" data-animate="bounceIn" data-delay="200">
                                            <i class="i-plain i-xlarge mx-auto mb-0 icon-line-truck"></i>
                                            <div class="counter counter-lined"><span data-from="3000" data-to="60" data-refresh-interval="100" data-speed="2500"></span>+</div>
                                            <h5>Moving Vans</h5>
                                        </div>
            ​
                                        <div class="col-sm-6 col-lg-3 text-center" data-animate="bounceIn" data-delay="400">
                                            <i class="i-plain i-xlarge mx-auto mb-0 icon-location"></i>
                                            <div class="counter counter-lined"><span data-from="1" data-to="10" data-refresh-interval="25" data-speed="3500"></span>+</div>
                                            <h5>Offices in UK</h5>
                                        </div>
            ​
                                        <div class="col-sm-6 col-lg-3 text-center" data-animate="bounceIn" data-delay="600">
                                            <i class="i-plain i-xlarge mx-auto mb-0 icon-line2-clock"></i>
                                            <div class="counter counter-lined"><span data-from="60" data-to="50000" data-refresh-interval="30" data-speed="2700"></span>+</div>
                                            <h5>Hours of Working</h5>
                                        </div>
            ​
                                    </div>
            ​
                                </div>
                            </div>
            ​
                        
                        
                        </div>
                    </section><!-- #content end -->
@endsection



@section('jquery')

<script src="{{asset('mx/googlemap.js')}}" defer></script>
{{-- AIzaSyByT-mReCNBwnAGACdpXf3FTFOLn7tdA2M --}}
<script defer src="{{config('googlemap')['map_api']}}&key={{config('googlemap')['map_apikey']}}&callback=initMap"></script>
{{-- APi all for request --}}

<script>
    $("#pickup").keyup(function(){
        let query=$(this).val();
        let _token=$("input[name='_token']").val();
        if(query.length >3 && query.length<10){
                    
            $.ajax(
            {
                url:"{{route('fetch')}}",
                method:"POST",
                data:{query:query,_token:_token},
                dataType:"json"

            }).done(function(response){
               
                if(response!=''){
                let data=response.map(p =>
                    `<li onclick='pickup1(this)'><i class="bi bi-geo-alt-fill"> </i>${p} </li>`
                
        );
        let dd='';
       data.map(d=>dd+=d);
        
        $("#picklocationbooking1").fadeIn();
        $("#picklocationbooking1").html(`<ul class="ms-menu">${dd}</ul>`);
    }
    });

}
    if(query.length<3){
                $("#picklocationbooking1").fadeOut();
            }
            
            });
    $("#picklocationbooking1").keydown(()=>{
        $("#picklocationbooking1").fadeOut();
    });

    function pickup1(element){
            let text=element.textContent;
            $("#pickup").val(text);
            $("#picklocationbooking1").fadeOut();
            let loc1=$("#pickup").val();
            initMap(loc1);
            
     }
  
</script>

@endsection