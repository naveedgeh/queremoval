{{-- <div class="main-box">
    <div class="mx-van-box collapsible">
        <div class="mx-top-box">
         <div class="mx-title" id="smallvan">Small Van</div>
         <div class="mx-van-inner-box">
             <div class="van-img">
                 <img src="https://jjdvans.com/static/small-van-1a88c97be40aa9fdc31d54c4386eca77.png" class="img img-fluid mx-img"/>
             </div>
          
             <div class="price-box">
                 <div class="mx-from"><span class="_17ddb46">From</span></div>
                 <div class="price" id="price"></div>
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
        <div class="_1l6esa8">Suitable for small items delivery like an armchair</div>
        <h4 class="_qxp73g">Choose for extra help</h4>
        <label >
        
        <label>
            <input type="radio" id="driver1" data-v="No I will do it myself. Selfload"  value="No I will do it myself. Selfload" checked name="driver_">
             No I will do it myself. Selfload
        </label>
        <label>
         <input id="driver2"  data-v="Driver help. I will help the driver with heavy item(s)" type="radio" name="driver_">
         Driver help. I will help the driver with heavy item(s)
       </label>
       <form action="{{url('/checkout')}}" method="post">
        @csrf
         <input type="hidden" id="bprice" name="price">
         <input type="hidden" id="bpickup" name="pickup" value="{{$pik}}">
         <input type="hidden" id="bdropoff" name="dropoff" value="{{$drop}}">
         <input type="hidden" id="additionalprice" name="additionalprice" value="{{$additionalstop}}">
         <input type="hidden" id="bmiles" name="miles" value="{{$dist}}">
         <input type="hidden" id="extrahelp" name="extrahelp">
         <input type="hidden" id="vanname" name="vanname" value="Small Van">
       <div class="_6dbxa6"><button class="MuiButtonBase-root MuiButton-root MuiButton-contained _1fpvwjc MuiButton-containedPrimary" tabindex="0" type="submit" style="height: 48px; width: 100%;"><span class="MuiButton-label">Select deal</span><span class="MuiTouchRipple-root"></span></button></div>
     </form>
     </div>    
 </div> --}}
 @once
  @push('javascript')
        <script>
    var coll = document.getElementsByClassName("collapsible");
    var i; 
    for (i = 0; i < coll.length; i++) {
      coll[i].addEventListener("click", function() {
       // this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.display === "block") {  
          content.style.display = "none";
        } else {
          content.style.display = "block";
        }
      });
    }
   $(document).ready(function(){
      var price={{$smallvanprice}};
      let final=price;
     if($("#driver1").attr('checked',true)){
        let v=$("#driver1").val();
        $("#extrahelp").val(v);
      }
      $("#driver1").click(function(){
          let v=$(this).data('v');
           final=price;
           $("#price").html(`£ ${final}`);
           $("#bprice").val(final);
           $("#extrahelp").val(v);
      });
      $("#driver2").click(function(){
        // $("#extrahelp").val();
        let v=$(this).data('v');
        var final=final=price?price+{{$smldriverhelpprice}}:final;
        $("#price").html(`£ ${final}`);
        $("#bprice").val(final);
        $("#extrahelp").val(v);
      });
      $("#price").html(`£ ${final}`);
      $("#bprice").val(final);
     
   });
        </script>
 @endpush
@endonce