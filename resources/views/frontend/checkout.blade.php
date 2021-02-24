@extends('frontend.layout.masterlayout')
@section('Title')
    Checkout
@endsection

@section('mainbody')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
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
                       <option value="">No Thanks</option>
                       <option value="">1 Panssenger</option>
                       <option value="">2 Panssenger</option>
                   </select>
                   </div>
                   <div class="_qwerde">
                       <textarea maxlength="2048" rows="8" cols="30" placeholder="Enter special requirements" class="_textded"></textarea>
                   </div>
                   <div class="_comsded">
                    @includeIf('frontend.checkoutpart.pickuppart')
                   </div>
                  <div class="_comsded">
                    @includeIf('frontend.checkoutpart.dropoffpart')
                  </div>
                  <div class="_dawe3d">
                      <input type="datetime-local" class="_dddedw" name="datetime">
                  </div>
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
                <button type="submit">Confirm </button>
                </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="sticky">
                    <div class="row">
                        <div class="col"> Total Price :</div>
                        <div class="col">
                            £ 12121</div>
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
                    <input type="text" value="${value}"" readonly  class="_fieldedrf    " name="inventry[]"/>
                    <button type="button" id="_filedremovebutton" "  class="_1gzy69s remove_button">X</button>
                    </div> `;
            return fileds;
        }
       
        $("._filedsbox").on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('._qwrr123').remove(); 
        
    });
        
    </script>
@endsection