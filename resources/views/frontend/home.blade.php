@extends('frontend.layout.masterlayout')
@section('Title')
    Home
@endsection

@section('jquery')
<script>
    ////////////////////////////////////
    ///////// Pick Up location /////////
    ////////////////////////////////////
    $("#pickuplocation").keyup(function(){
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
             let data=response.map(pd =>
			     `<li onclick='pickup_area(this)'><i class="bi bi-geo-alt-fill"> </i>${pd} </li>`
               
            );
            let dd='';
           data.map(d=>dd+=d);
            
            $("#picklocation").fadeIn();
            $("#picklocation").html(`<ul class="ms-menu">${dd}</ul>`);
        }
        });
    
    }
        if(query.length<3){
            $("#picklocation").fadeOut();
        }
        
        });
        $("#pickuplocation").keydown(()=>{
            $("#picklocation").fadeOut();
        });
    ////////////////////////////////////
    ///////// Drop OFF location ////////
    ////////////////////////////////////
    $("#droplocation").keyup(function(){
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
			     `<li onclick='dropoff_location(this)'><i class="bi bi-geo-alt-fill"> </i> ${p} </li>`
               
            );
            let dd='';
           data.map(d=>dd+=d);
            
            $("#dropofflocation").fadeIn();
            $("#dropofflocation").html(`<ul class="ms-menu">${dd}</ul>`);
        }
        });
    
    }
    
    if(query.length<3){
            $("#dropofflocation").fadeOut();
        }
        
        });

    
    ////////////////////////////////////////////////////
    ////////////////// end Additon ////////////////////
    //////////////////////////////////////////////////
        $("#droplocation").keydown(()=>{
            $("#dropofflocation").fadeOut();
        });
    function pickup_area(element){
            let selecturdata=element.textContent;
            $("#pickuplocation").val(selecturdata);
            $("#picklocation").css({ "display": "none"});
    }
    function dropoff_location(element){
        let selecturdata=element.textContent;
        $("#droplocation").val(selecturdata);
           $("#dropofflocation").css({ "display": "none"});

    }


    /* additional information*/
    $(document).ready(function () {
            var totalfiled=4;
            var startfiled=0;
            var htmlid=$('#addintoalstops');
    
    $('#addstop').on('click',function(event){
            event.preventDefault(); 
         
            if(startfiled < totalfiled){
                startfiled ++;
                const field=`
                
                <div class="input-group-prepend mmm">
					<span class="input-group-text bg-color text-white"><i class="icon-truck1"></i></span>
				
							<input type="text" name="addi14[]" id="additionallocation${startfiled}" placeholder="Additional Stop"  style="width:100%; margin-bottom:5px;"  class="form-control location"/>
							<span  class="input-group-text bg-color text-white mx_svg"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg></span>
					</div>
					 <div id="additionalstop${startfiled}">
                    </div>	
							`;
                $(htmlid).append(field);
                
            }
            else{
                $(this).hide();
            }

    

    $(document).on('click',".mx_svg",function(e){
        e.preventDefault();
       
        $(this).parent("div").remove();
        startfiled--;
    });
    ////////////////////////////////////
    ///////// Additinoal stop 1 ////////
    ////////////////////////////////////
            $("#additionallocation1").keyup(function(){

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
			     `<li onclick='addi1(this)'><i class="bi bi-geo-alt-fill"> </i> ${p} </li>`
               
            );
            let dd='';
           data.map(d=>dd+=d);
            
            $("#additionalstop1").fadeIn();
            $("#additionalstop1").html(`<ul class="ms-menu">${dd}</ul>`);
        }
        });
    
    }
    
    if(query.length<3){
            $("#additionalstop1").fadeOut();
        }
        
       
       
    });
            $("#additionallocation1").keydown(()=>{
            $("#additionalstop1").fadeOut();
        });
   


    
    ////////////////////////////////////
    /////////end Additinoal stop 1 ////////
    ////////////////////////////////////
     ////////////////////////////////////
    ///////// Additinoal stop 2 ////////
    ////////////////////////////////////
    $("#additionallocation2").keyup(function(){

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
 `<li onclick='addi2(this)'><i class="bi bi-geo-alt-fill"> </i> ${p} </li>`

);
let dd='';
data.map(d=>dd+=d);

$("#additionalstop2").fadeIn();
$("#additionalstop2").html(`<ul class="ms-menu">${dd}</ul>`);
}
});

}

if(query.length<3){
$("#additionalstop2").fadeOut();
}



});
$("#additionallocation2").keydown(()=>{
$("#additionalstop2").fadeOut();
});




////////////////////////////////////
/////////end Additinoal stop 2 ////////
////////////////////////////////////


     ////////////////////////////////////
    ///////// Additinoal stop 3 ////////
    ////////////////////////////////////
    $("#additionallocation3").keyup(function(){

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
 `<li onclick='addi3(this)'><i class="bi bi-geo-alt-fill"> </i> ${p} </li>`

);
let dd='';
data.map(d=>dd+=d);

$("#additionalstop3").fadeIn();
$("#additionalstop3").html(`<ul class="ms-menu">${dd}</ul>`);
}
});

}

if(query.length<3){
$("#additionalstop3").fadeOut();
}



});
$("#additionallocation3").keydown(()=>{
$("#additionalstop3").fadeOut();
});




////////////////////////////////////
/////////end Additinoal stop 3 ////////
////////////////////////////////////

     ////////////////////////////////////
    ///////// Additinoal stop 4 ////////
    ////////////////////////////////////
    $("#additionallocation4").keyup(function(){

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
 `<li onclick='addi4(this)'><i class="bi bi-geo-alt-fill"> </i> ${p} </li>`

);
let dd='';
data.map(d=>dd+=d);

$("#additionalstop4").fadeIn();
$("#additionalstop4").html(`<ul class="ms-menu">${dd}</ul>`);
}
});

}

if(query.length<3){
$("#additionalstop4").fadeOut();
}



});
$("#additionallocation4").keydown(()=>{
$("#additionalstop4").fadeOut();
});




////////////////////////////////////
/////////end Additinoal stop 4 ////////
////////////////////////////////////
    });
    
    });
    
    function addi1(element){
            let selecturdata=element.textContent;
            $("#additionallocation1").val(selecturdata);
            $("#additionalstop1").css({ "display": "none"});
    }
    function addi2(element){
            let selecturdata=element.textContent;
            $("#additionallocation2").val(selecturdata);
            $("#additionalstop2").css({ "display": "none"});
    }
    function addi3(element){
            let selecturdata=element.textContent;
            $("#additionallocation3").val(selecturdata);
            $("#additionalstop3").css({ "display": "none"});
    }
    function addi4(element){
            let selecturdata=element.textContent;
            $("#additionallocation4").val(selecturdata);
            $("#additionalstop4").css({ "display": "none"});
    }
</script>  
@endsection

