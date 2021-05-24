<div class="main-box">
  <div class="mx-van-box collapsible">
      <div class="mx-top-box">
       <div class="mx-title" id="smallvan">XL Van - Luton</div>
       <div class="mx-van-inner-box">
           <div class="van-img">
               <img src="https://jjdvans.com/static/xl-luton-1-222acba7561b1d87c58562a78e56e30a.png"/>
           </div>
           {{-- @php
               $price=143.99;
           @endphp --}}
           <div class="price-box">
               <div class="mx-from"><span class="_17ddb46">From</span></div>
               <div class="price" id="price4"></div>
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
          <input id="driver11" checked data-v="No I will do it myself. Selfload" type="radio" name="driver_alll">
           No I will do it myself. Selfload
      </label>
      <label>
       <input id="driver12" data-v=" Driver help. I will help the driver with heavy item(s)" type="radio" name="driver_alll">
       Driver help. I will help the driver with heavy item(s)
     </label>
     <label>
      <input id="driver13" data-v=" 2 Men Team. I don’t need to lift a finger"  type="radio" name="driver_alll">
      2 Men Team. I don’t need to lift a finger
    </label>
    <label>
      <input id="driver14" data-v="3 Men Team. I am the boss, bring me the red carpet" type="radio" name="driver_alll">
      3 Men Team. I am the boss, bring me the red carpet
    </label>
    <form action="{{url('/checkout')}}" method="post">
      @csrf
       <input type="hidden" id="bprice4" name="price">
       <input type="hidden" id="bpickup4" name="pickup" value="{{$pik}}">
       <input type="hidden" id="bdropoff4" name="dropoff" value="{{$drop}}">
       <input type="hidden" id="additionalprice4" name="additionalprice" value="{{$additionalstop}}">
       <input type="hidden" id="bmiles4" name="miles" value="{{$dist}}">
       <input type="hidden" id="extrahelp4" name="extrahelp">
       <input type="hidden" id="vanname" name="vanname" value="XL Van Luton">
       <div class="_6dbxa6"><button class="MuiButtonBase-root MuiButton-root MuiButton-contained _1fpvwjc MuiButton-containedPrimary" tabindex="0" type="submit" style="height: 48px; width: 100%;"><span class="MuiButton-label">Select deal</span><span class="MuiTouchRipple-root"></span></button></div>
   </form>
   </div>    
</div>

@once
@push('javascript')
      <script>
 $(document).ready(function(){
    var price={{$xlvanluton}};
    let final=price;
    if($("#driver11").attr('checked',true)){
        let v=$("#driver11").data('v');
        final=price?price+{{$xlselfload}}:final;
         $("#price4").html(`£ ${final}`);
         $("#bprice4").val(final);
        $("#extrahelp4").val(v);
      }
    $("#driver11").click(function(){ 
      let v=$(this).data('v');
         final=price?price+{{$xlselfload}}:final;
         $("#price4").html(`£ ${final}`);
         $("#bprice4").val(final);
         $("#extrahelp4").val(v);
    });
    $("#driver12").click(function(){
      let v=$(this).data('v');
      var final=final=price?price+{{$lvandriverhelpprice}}:final;
      $("#price4").html(`£ ${final}`);
      $("#bprice4").val(final);
      $("#extrahelp4").val(v);
    });
    $("#driver13").click(function(){
      let v=$(this).data('v');
      let pp={{$lvantwomenprice}};
      var final=final=price?price+pp:final;
      $("#price4").html(`£ ${final<price?price+pp:final}`);
      $("#bprice4").val(final);
      $("#extrahelp4").val(v);
    });
    $("#driver14").click(function(){
      let v=$(this).data('v');
      var final=final=price?price+{{$lvanthremenprice}}:final;
      $("#price4").html(`£ ${final}`);
      $("#bprice4").val(final);
      $("#extrahelp4").val(v);
    });
    $("#price4").html(`£ ${final}`);
    $("#bprice4").val(final);
 });
      </script>
@endpush
@endonce