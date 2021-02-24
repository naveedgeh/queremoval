<div class="main-box">
    <div class="mx-van-box collapsible">
        <div class="mx-top-box">
         <div class="mx-title" id="smallvan">Medium Van</div>
         <div class="mx-van-inner-box">
             <div class="van-img">
                 <img src="https://jjdvans.com/static/medium-van-c4bb801d67d4af9d83c339ea7be27af9.png" class="img img-fluid mx-img"/>
             </div>
             {{-- @php
                 $price=143.99;
             @endphp --}}
             <div class="price-box">
                 <div class="mx-from"><span class="_17ddb46">From</span></div>
                 <div class="price" id="price2"></div>
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
            <input id="driver3" data-v=" No I will do it myself. Selfload" type="radio" name="driver">
             No I will do it myself. Selfload
        </label>
        <label>
         <input id="driver4" data-v="Driver help. I will help the driver with heavy item(s)" type="radio" name="driver">
         Driver help. I will help the driver with heavy item(s)
       </label>
       <label>
        <input id="driver5" data-v="2 Men Team. I don’t need to lift a finger" type="radio" name="driver">
        2 Men Team. I don’t need to lift a finger
      </label>
      <label>
        <input id="driver6" data-v="3 Men Team. I am the boss, bring me the red carpet" type="radio" name="driver">
        3 Men Team. I am the boss, bring me the red carpet
      </label>
      <form action="{{url('/checkout')}}" method="post">
        @csrf
         <input type="hidden" id="bprice2" name="price">
         <input type="hidden" id="bpickup2" name="pickup" value="{{$pik}}">
         <input type="hidden" id="bdropoff2" name="dropoff" value="{{$drop}}">
         <input type="hidden" id="bmiles" name="miles" value="{{$dist}}">
         <input type="hidden" id="extrahelp1" name="extrahelp">
         <input type="hidden" id="vanname" name="vanname" value="Medium Van">
         <div class="_6dbxa6"><button class="MuiButtonBase-root MuiButton-root MuiButton-contained _1fpvwjc MuiButton-containedPrimary" tabindex="0" type="submit" style="height: 48px; width: 100%;"><span class="MuiButton-label">Select deal</span><span class="MuiTouchRipple-root"></span></button></div>
     </form>
     </div>    
 </div>

 @once
  @push('javascript')
        <script>
   $(document).ready(function(){
      var price={{$mediumvan}};
      let final=price;
      $("#driver3").click(function(){
        let v=$(this).data('v');
           final=price;
           $("#price2").html(`£ ${final}`);
           $("#bprice2").val(final);
           $("#extrahelp1").val(v);
      });
      $("#driver4").click(function(){
        let v=$(this).data('v');
        $("#price2").html(`£ ${price}`);
        $("#bprice2").val(final);
        $("#extrahelp1").val(v);
      });
      $("#driver5").click(function(){
        let v=$(this).data('v');
        var final=final=price?price+10:final;
        $("#price2").html(`£ ${final<price?price+10:final}`);
        $("#bprice2").val(final);
        $("#extrahelp1").val(v);
      });
      $("#driver6").click(function(){
        let v=$(this).data('v');
        var final=final=price?price+20:final;
        $("#price2").html(`£ ${final}`);
        $("#bprice2").val(final);
        $("#extrahelp1").val(v);
      });
      $("#price2").html(`£ ${final}`);
      $("#bprice2").val(final);
   });
        </script>
 @endpush
@endonce