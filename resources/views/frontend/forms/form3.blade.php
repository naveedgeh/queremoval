<div class="main-box">
    <div class="mx-van-box collapsible">
        <div class="mx-top-box">
         <div class="mx-title" id="smallvan">Large Van</div>
         <div class="mx-van-inner-box">
             <div class="van-img">
                 <img src="https://jjdvans.com/static/large-van-e57e711a52d32c5efcb16f41ed84f6cc.png"/>
             </div>
             {{-- @php
                 $price=143.99;
             @endphp --}}
             <div class="price-box">
                 <div class="mx-from"><span class="_17ddb46">From</span></div>
                 <div class="price" id="price3"></div>
                 <div class="_3scdf">
                     <span class="_1cnyvcn">
                         <span style="opacity: 0.35;">
                             ( </span>min 2 hours<span style="opacity: 0.35;"> )
                             </span>
                         </span>
                     </div>
             </div>
         </div>
        </div>
        
     </div> 
     <div class="content">
        <div class="_1l6esa8">Suitable for student move & 1 room move</div>
        <h4 class="_qxp73g">Choose for extra help</h4>
        <label>
            <input id="driver7" data-v="No I will do it myself. Selfload" type="radio" name="driver">
             No I will do it myself. Selfload
        </label>
        <label>
         <input id="driver8" data-v=" Driver help. I will help the driver with heavy item(s)" type="radio" name="driver">
         Driver help. I will help the driver with heavy item(s)
       </label>
       <label>
        <input id="driver9" data-v=" 2 Men Team. I don’t need to lift a finger"  type="radio" name="driver">
        2 Men Team. I don’t need to lift a finger
      </label>
      <label>
        <input id="driver10" data-v="3 Men Team. I am the boss, bring me the red carpet" type="radio" name="driver">
        3 Men Team. I am the boss, bring me the red carpet
      </label>
      <form action="{{url('/checkout')}}" method="post">
        @csrf
         <input type="hidden" id="bprice3" name="price">
         <input type="hidden" id="bpickup3" name="pickup" value="{{$pik}}">
         <input type="hidden" id="bdropoff3" name="dropoff" value="{{$drop}}">
         <input type="hidden" id="bmiles3" name="miles" value="{{$dist}}">
         <input type="hidden" id="extrahelp3" name="extrahelp">
         <input type="hidden" id="vanname" name="vanname" value="Large Van">
         <div class="_6dbxa6"><button class="MuiButtonBase-root MuiButton-root MuiButton-contained _1fpvwjc MuiButton-containedPrimary" tabindex="0" type="submit" style="height: 48px; width: 100%;"><span class="MuiButton-label">Select deal</span><span class="MuiTouchRipple-root"></span></button></div>
     </form>
     </div>    
 </div>

 @once
  @push('javascript')
        <script>
   $(document).ready(function(){
      var price={{$largevan}};
      let final=price;
      $("#driver7").click(function(){ 
        let v=$(this).data('v');
           final=price;
           $("#price3").html(`£ ${final}`);
           $("#bprice3").val(final);
           $("#extrahelp3").val(v);
      });
      $("#driver8").click(function(){
        let v=$(this).data('v');
        $("#price3").html(`£ ${price}`);
        $("#bprice3").val(final);
        $("#extrahelp3").val(v);
      });
      $("#driver9").click(function(){
        let v=$(this).data('v');
        let pp={{$lvantwomenprice}};
        var final=final=price?price+pp:final;
        $("#price3").html(`£ ${final<price?price+pp:final}`);
        $("#bprice3").val(final);
        $("#extrahelp3").val(v);
      });
      $("#driver10").click(function(){
        let v=$(this).data('v');
        var final=final=price?price+{{$lvanthremenprice}}:final;
        $("#price3").html(`£ ${final}`);
        $("#bprice3").val(final);
        $("#extrahelp3").val(v);
      });
      $("#price3").html(`£ ${final}`);
      $("#bprice3").val(final);
   });
        </script>
 @endpush
@endonce