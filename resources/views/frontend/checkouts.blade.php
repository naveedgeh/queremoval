@extends('frontend.layout.masterlayout')
@section('Title')
    Checkout
@endsection

@section('mainbody')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
             {{-- {{$valpricetable}} --}}
                <form action="{{url('/confrom')}}" method="post">
                    @csrf
                <div class="checkoutform p-5">
                    <h3>Your inventory</h3>
                   <div class="_invent123">
                       <input type="text" id="_field" class="_fieldedrf" placeholder="Add Items"  name=""/>
                       <button type="button" id="_filedaddbutton" class="btn-1"> Add</button>
                   </div>
                   <div class="_filedsbox">
                      
                   </div>
                   <h3>Ride Along?</h3>
                   <p>It's free to ride-along to your destination</p>
                   <div class="_qazwsx12">
                   <select class="_slectqwe" name="passenger">
                       <option value="No Thanks">No Thanks</option>
                       <option value="1 Panssenger">1 Panssenger</option>
                       <option value="2 Panssenger">2 Panssenger</option>
                   </select>
                   </div>
                   <div class="_qwerde">
                       <textarea maxlength="2048" rows="8" name="requirement" cols="30" placeholder="Enter special requirements" class="_textded"></textarea>
                   </div>
                   <div class="_comsded">
                    @includeIf('frontend.checkoutpart.pickuppart')
                   </div>
                  <div class="_comsded">
                    @includeIf('frontend.checkoutpart.dropoffpart')
                  </div>
                  <div class="_dawe3d">
                      <label class="datetime">Please Select Date and time</label>
                      <input type="datetime-local" class="_dddedw" id="startdate" placeholder="MM/DD/YYYY" name="datetime">
                  </div>
                  <section>
                    <h3>Please Select How Long You Need The Van For:</h3>
                    <p>Non booked overtime will cost £14.09 per half hour. Book in advance your total time and Save up to 15%</p>
                    <label>Select Hours</label>
                 <div class="_1m1kw4b" style="margin-top:-30px;">
                     {{-- <ul class="_bvflnp">
                         <li class="_10psbwg">
                            <svg class="MuiSvgIcon-root _y459y6" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 4H5C3.34 4 2 5.34 2 7v8c0 1.66 1.34 3 3 3l-1 1v1h1l2-2.03L9 18v-5H4V5.98L13 6v2h2V7c0-1.66-1.34-3-3-3zM5 14c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm15.57-4.34c-.14-.4-.52-.66-.97-.66h-7.19c-.46 0-.83.26-.98.66L10 13.77l.01 5.51c0 .38.31.72.69.72h.62c.38 0 .68-.38.68-.76V18h8v1.24c0 .38.31.76.69.76h.61c.38 0 .69-.34.69-.72l.01-1.37v-4.14l-1.43-4.11zm-8.16.34h7.19l1.03 3h-9.25l1.03-3zM12 16c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm8 0c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1z"></path></svg>
                            Driving time: 2h00</li>
                            <div class="_1676x1r">
                                <li class="_vkxts2l">
                                    <svg class="MuiSvgIcon-root _y459y6" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M14 1h-4c-.55 0-1 .45-1 1s.45 1 1 1h4c.55 0 1-.45 1-1s-.45-1-1-1zm-2 13c.55 0 1-.45 1-1V9c0-.55-.45-1-1-1s-1 .45-1 1v4c0 .55.45 1 1 1zm7.03-6.61l.75-.75c.38-.38.39-1.01 0-1.4l-.01-.01c-.39-.39-1.01-.38-1.4 0l-.75.75C16.07 4.74 14.12 4 12 4c-4.8 0-8.88 3.96-9 8.76C2.87 17.84 6.94 22 12 22c4.98 0 9-4.03 9-9 0-2.12-.74-4.07-1.97-5.61zM12 20c-3.87 0-7-3.13-7-7s3.13-7 7-7 7 3.13 7 7-3.13 7-7 7z"></path></svg>
                                    Select extra time: </li>
                                    <div class="_1eftusk">
                                        <button class="_q2n5mt3" >
                                            -</button>
                                            <p style="font-size: 17px; margin: 0px 6px;" id="time"></p><span class="_zu073b">+</span>
                                        </div></div><li class="_10psbwg">
                                            <svg class="MuiSvgIcon-root _y459y6" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                                                <path d="M12 4H5C3.34 4 2 5.34 2 7v8c0 1.66 1.34 3 3 3l-1 1v1h1
                                                l2-2.03L9 18v-5H4V5.98L13 6v2h2V7c0-1.66-1.34-3-3-3zM5 14c.55 
                                                0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm15.57-4.34c-.14-.4
                                                -.52-.66-.97-.66h-7.19c-.46 0-.83.26-.98.66L10 13.77l.01 5.51c0
                                                 .38.31.72.69.72h.62c.38 0 .68-.38.68-.76V18h8v1.24c0 .38.31.76.
                                                 69.76h.61c.38 0 .69-.34.69-.72l.01-1.37v-4.14l-1.43-4.11zm-8.16
                                                 .34h7.19l1.03 3h-9.25l1.03-3zM12 16c-.55 0-1-.45-1-1s.45-1 1-1 1 .4
                                                 5 1 1-.45 1-1 1zm8 0c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1z">
                                                </path>
                                            </svg>Total booked time:  <span id="totalbookedtime"></span></li></ul> --}}
                                           
                                            <div class="_135z1af" style="margin-bottom:20px;">
                                              
                                                {{-- <input type="hidden" name="dropoffpart" id="dropoffpart"> --}}
                                                <button class="_lml8zl _q2n5mt3" id="floordecreement">-</button>
                                                <p class="_nhy7p3" id="time"></p><span class="_lml8zl _zu073b">+</span>
                                            </div>
                                            {{-- <div class="_knnkkt"><div class="_1haxtrf"></div><div class="_q22d1d"><div class=""><div class="_1ppcnt4">
                                              </div></div></div></div> --}}
                                              
                 </div>
                 <div class="_liffwdr12">
                    {{-- <label class="label">
                     With Lift
                        <input type="radio" name="dropofleft" value="With Lift" checked class="_radioqwx">
                        <span class="checkmark"></span>
                      
                    </label> --}}
                    <label class="label"> Full Pack & Move Service
                     <input type="checkbox"  class="_radioqwx"  id="fullpack" value="Full Pack"  name="fullpack">
                     <span class="checkmark" style="border:2px solid #c50000;"></span>
                    
                 </label>
                </div>
                  </section>
                  <h3>Personal Details</h3>
                  <div class="row">
                      <div class="col">
                        <div class="_textddd">
                            <input type="text" class="_fieldedrf" required pattern="[A-Za-z]+" placeholder="First Name" name="firstname">
                            @error('firstname')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                      </div>
                     
                      <div class="col">
                        <div class="_textddd">
                            <input type="text" class="_fieldedrf" required pattern="[A-Za-z]+" placeholder="Last Name" name="lastname">
                            @error('lastname')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                      </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <div class="_textddd">
                          <input type="email" class="_fieldedrf" required  placeholder="Email Address" name="email">
                      </div>
                    </div>
                   
                    <div class="col">
                      <div class="_textddd">
                          <input type="text" class="_fieldedrf" required pattern="[0-9]+" placeholder="Phone Number" name="phonenumber">
                      </div>
                    </div>
                </div>
                <input type="hidden" id="bprice55" name="price" value="{{$hiddenfielsdata["price"]?? 0}}">
                <input type="hidden" id="bpickup56" name="pickup" value="{{$hiddenfielsdata["pickup"] ?? ''}}">
                <input type="hidden" id="bdropoff57" name="dropoff" value="{{$hiddenfielsdata["dropoff"] ?? ''}}">
                <input type="hidden" id="bmiles58" name="miles" value="{{$hiddenfielsdata["miles"] ?? ''}}">
                <input type="hidden" id="extrahelp59" name="extrahelp" value="{{$hiddenfielsdata["extrahelp"] ?? ''}}">
                <input type="hidden" id="vanname" name="vanname" value="{{$hiddenfielsdata["vanname"] ?? ''}}">
                <input type="hidden" id="addiprice" name="addiprice" value="{{$hiddenfielsdata["additionalprice"]}}"/>
                {{-- <button type="submit">Confirm </button> --}}
               <div id="amount">
                <script
                src="https://checkout.stripe.com/checkout.js"  class="stripe-button"
                data-key="pk_test_51HyJrZE3lwb7CcJBpcx0ZH1YDMmdq6Oti6h5xNCba4wxiwXfkO7BBzlynsLK1T0FzW1bR1uf7eY4Wsc6Jn5TGH5i00JHPn1Gof"
                data-amount=''
                data-name="Queremovel"
                data-description="Queremovel"
                data-image="https://stripe.com/img/documentation/checkout/marketplace.png"></script>
               </div>
                </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="sticky">
                    <div class="row" style="background: #c50000;color:#fff;padding:25px 10px;border-radius: 50px;">
                        <div class="col"> Total Price </div>
                        <div class="col" id="box_price">
                           </div>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
@endsection


@section('jquery')
    <script>
         
          
      $("#_filedaddbutton").click(function(){
                let field=$("#_field").val();
                if(field!=""){
                let fileds=addfield(field);
                $("._filedsbox").append(fileds);
                $("#_field").val("");
                }
        });
        function addfield(value){
            
            let fileds=`
                 <div class="_qwrr123">
                    <input type="text" value="${value}"" readonly  class="_fieldedrf" name="inventry[]"/>
                    <button type="button" id="_filedremovebutton" "  class="_1gzy69s remove_button">X</button>
                    </div> `;
            return fileds;
        }
       
        $("._filedsbox").on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('._qwrr123').remove(); 
        
      });
        // Form coding
        // Time Increement
    $(document).ready(function(){
            let mint='00';
            let hour=2;
            let h=2;
           var m=0;
           let floor=0;
           let floor1=0;
           let ddd='';
           var check=0;
          var check_2=1;
           var extrahelps=$("#extrahelp59").val();
        //    var extrahelpes={{$hiddenfielsdata["extrahelp"] ?? ''}};
          var pri={{$hiddenfielsdata["price"]?? 0}};
           let on=$("#addiprice").val();
           if(on!=""){
                price=pri+Number({{$additionalprice->additionalprice ?? 0}});
           }
           else{
               price=pri;
           }
         
            $("._zu073b").on('click',function(){
               
                m+=30; 
                
                if(m==60){
                    hour+=1;
                    h+=1;
                    m=0;
                }
                // let mm=add();
                let time=`${hour}h${Number(m)}`;
                if(extrahelps=="2 Men Team. I don’t need to lift a finger"){
                    price+={{$valpricetable[0]['twomanhalfhourprice']}};
                }
                if(extrahelps=="3 Men Team. I am the boss, bring me the red carpet"){
                    price+={{$valpricetable[0]['threemanhalfhourprice']}};
                }
                if(extrahelps=='Driver help. I will help the driver with heavy item(s)'){
                    price+={{$valpricetable[0]['driverhelphalfhourprice']}};
                }
                
               
                UIUpdate();
                $('#time').html(time);
                bookedtime=`${h}h${m}`;
                $('#totalbookedtime').html(bookedtime);
               
                $('._q2n5mt3').removeAttr('disabled');
            
            });
            $("._q2n5mt3").on('click',function(e){
                e.preventDefault(); 
           
                   
                if(hour >2 && m==0){
                    
                        h-=1;
                        hour-=1;
                        m=30;
                        
                }else{
                       
                        m=0;
                }

                let time=`${hour}h${Number(m)}`;
                if(extrahelps=="2 Men Team. I don’t need to lift a finger"){
                    price-={{$valpricetable[0]['twomanhalfhourprice']}};
                }
                if(extrahelps=="3 Men Team. I am the boss, bring me the red carpet"){
                    price-={{$valpricetable[0]['threemanhalfhourprice']}};
                }
                if(extrahelps=='Driver help. I will help the driver with heavy item(s)'){
                    price-={{$valpricetable[0]['driverhelphalfhourprice']}};
                }
                
                if(hour==2 && m==0){
                      
                    $(this).attr('disabled','disabled');
                    
                }
               
                UIUpdate();
                $('#time').html(time);
                
                bookedtime=`${h}h${m==0 && hour==2 ? m=30:m}`;

                $('#totalbookedtime').html(bookedtime);
              
            });
            $("#floorincreement1").on('click',function(){
               
              
                floor1++;
              $("#floor1").html(`${floor1} (floor)`); 
              if($("#withoutlift1").is(":checked")){
                  console.log(floor1);
                  floor1>0?price+={{$valpricetable[0]['floorpricewithoutleft']}}:price;
                  UIUpdate();
              }         
             

             });
            $("#floorincreement").on('click',function(){
               
                floor++;
                
                $("#floor").html(`${floor} (floor)`); 
                if($("#withoutlift").is(":checked")){
                    floor>0?price+={{$valpricetable[0]['floorpricewithoutleft']}}:price;
                    UIUpdate();
                }         
               

            });
            $("#floordecreement1").on('click',function(){
               
              
                floor1==0? $("#floor1").html("0 (ground floor)"):  $("#floor1").html(`${floor1} (floor)`);
              
                   if($("#withoutlift1").is(":checked")){
                      console.log(floor1);
                      floor1!=0? price-={{$valpricetable[0]['floorpricewithoutleft']}}:price;
                    UIUpdate();
                   }
                   floor1 >0?floor1--:floor1=0;
          });
          $("#floordecreement").on('click',function(){
               
               
               floor==0? $("#floor").html("0 (ground floor)"):  $("#floor").html(`${floor} (floor)`);
              
                   if($("#withoutlift").is(":checked")){
                      
                    floor >0? price-={{$valpricetable[0]['floorpricewithoutleft']}}:price;
                    UIUpdate();
                   }
                   floor >0?floor--:floor=0;
          });
          $("#fullpack").on('change',function(){
               
               if($("#fullpack").is(":checked")){
                   let fullprice=hour*2;
                   price+=fullprice;
                   UIUpdate();
               }
               else{
                let fullprice=hour*2;
                   price-=fullprice;
                   UIUpdate();
               }
              
          });
         
            let time=`${hour}h${mint}`;
            let bookedtime='2 h00';
            $('._1ppcnt4').html('£ '+price);
            $('#box_price').html('£ '+price);
            $('#totalbookedtime').html(bookedtime);
            $('#time').html(time);
            $("#floor").html("0 (ground floor)");
            $("#floor1").html("0 (ground floor)");
            $(".stripe-button").attr('data-amount',price);
            $('._q2n5mt3').attr('disabled','disabled');
            $("#startdate").on('change',function(){
                let sdate=$(this).val();
                var dt = new Date(sdate);
                var h = dt.getHours() 
                var m= dt.getMinutes() 
                var s= dt.getSeconds();
                var stime=(h > 12) ? (h-12 + ' PM') : (h  +' AM');
                    var timearrr=['8 PM','9 PM','10 PM','11 PM','12 PM', '1 AM','2 AM','3 AM','4 AM', '5 AM','6 AM','7 AM ','8 AM'];
              
                if(timearrr.includes(stime)===true){
                   
                    if(check==0){
                       
                        price+={{$valpricetable[0]['speiciealtime']}};
                        UIUpdate();
                        check=1;
                        check_2=0;  
                    }
                  
                }else{
                    check=0;
                    if(check_2==0){
                    price-={{$valpricetable[0]['speiciealtime']}};
                    UIUpdate();
                    check_2=1;
                    }
                    
                }
              
                
              
            });
           
        function UIUpdate(){
              $("#bprice55").val(Number(price));
              $("#pikuppart").val(floor1==0? '0 (ground floor)':floor1 +" "+"(Floor)");
              $("#dropoffpart").val(floor==0? '0 (ground floor)':floor +" "+"(Floor)");
              $(".stripe-button").attr('data-amount',price);
              $('._1ppcnt4').html('£ '+Number(price));
              $('#box_price').html('£ '+Number(price));
        }
       
 });
 
    </script>
@endsection

