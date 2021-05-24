<div class="main-box">
    <div class="mx-van-box collapsible">
        <div class="mx-top-box">
         <div class="mx-title" id="smallvan">Three XL - Luton Vans</div>
         <div class="mx-van-inner-box">
             <div class="van-img">
                 <img src="https://jjdvans.com/static/xl-luton-2-0a3173d44776b234b6d0bdfab2bd68fc.png"/>
             </div>
             {{-- @php
                 $price=143.99;
             @endphp --}}
             <div class="price-box">
                 <div class="mx-from"><span class="_17ddb46">From</span></div>
                 <div class="price" id="price6"></div>
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
            <input id="driver19" checked data-v="No I will do it myself. Selfload" type="radio" name="driver_all">
             No I will do it myself. Selfload
        </label>
        <label>
         <input id="driver20" data-v="Driver help. I will help the driver with heavy item(s)" type="radio" name="driver_all">
         Driver help. I will help the driver with heavy item(s)
       </label>
       <label>
        <input id="driver21" data-v="2 Men Team. I don’t need to lift a finger" type="radio" name="driver_all">
        2 Men Team. I don’t need to lift a finger
      </label>
      <label>
        <input id="driver22" data-v=" 3 Men Team. I am the boss, bring me the red carpet" type="radio" name="driver_all">
        3 Men Team. I am the boss, bring me the red carpet
      </label>
      <form action="{{url('/checkout')}}" method="POST">
        @csrf
         <input type="hidden" id="bprice6" name="price">
         <input type="hidden" id="bpickup6" name="pickup" value="{{$pik}}">
         <input type="hidden" id="bdropoff6" name="dropoff" value="{{$drop}}">
         <input type="hidden" id="additionalprice" name="additionalprice" value="{{$additionalstop}}">
         <input type="hidden" id="bmiles6" name="miles" value="{{$dist}}">
         <input type="hidden" id="extrahelp6" name="extrahelp">
         <input type="hidden" id="vanname" name="vanname" value="Three XL Luton Vans">
       <div class="_6dbxa6"><button class="MuiButtonBase-root MuiButton-root MuiButton-contained _1fpvwjc MuiButton-containedPrimary" tabindex="0" type="submit" style="height: 48px; width: 100%;"><span class="MuiButton-label">Select deal</span><span class="MuiTouchRipple-root"></span></button></div>
     </form>
     </div>    
 </div>

 @once
  @push('javascript')
        <script>
   $(document).ready(function(){
      var price={{$threexllutonvans}};
     
      let final=price;
      if($("#driver19").attr('checked',true)){
        let v=$("#driver19").data('v');
        final=price?price+{{$threexlselfload}}:final;
           $("#price6").html(`£ ${final}`);
           $("#bprice6").val(final);
        $("#extrahelp6").val(v);
      }
      $("#driver19").click(function(){
        let v=$(this).data('v');
        $("#extrahelp6").val(v);
           final=price?price+{{$threexlselfload}}:final;
           $("#price6").html(`£ ${final}`);
           $("#bprice6").val(final);
      });
      $("#driver20").click(function(){
        let v=$(this).data('v');
        $("#extrahelp6").val(v);
        var final=final=price?price+{{$threexlvandriverhelpprice}}:final;
        $("#price6").html(`£ ${final}`);
        $("#bprice6").val(final);
      });
      $("#driver21").click(function(){
        let v=$(this).data('v');
        $("#extrahelp6").val(v);
        let pr={{$threexlvantwomenprice}};
        var final=final=price?price+pr:final;
        $("#price6").html(`£ ${final<price?price+pr:final}`);
        $("#bprice6").val(final);
      });
      $("#driver22").click(function(){
        let v=$(this).data('v');
        $("#extrahelp6").val(v);
        var final=final=price?price+{{$threexlvanthremenprice}}:final;
        $("#price6").html(`£ ${final}`);
        $("#bprice6").val(final);
      });
      $("#price6").html(`£ ${final}`);
      $("#bprice6").val(final);
   });
        </script>
 @endpush
@endonce