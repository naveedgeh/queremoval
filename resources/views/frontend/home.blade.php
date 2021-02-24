@extends('frontend.layout.masterLayout')
@section('Title')
    Home
@endsection

@section('jquery')
<script>
////////////////////////////////////
    /////////Pick Up location///////////
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
             let data=response.map(p =>
			     `<li onclick='pickup(this)'><i class="bi bi-geo-alt-fill"> </i>${p} </li>`
               
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
    /////////Drop OFF location///////////
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
			     `<li onclick='dropoff(this)'><i class="bi bi-geo-alt-fill"> </i> ${p} </li>`
               
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
        $("#droplocation").keydown(()=>{
            $("#dropofflocation").fadeOut();
        });
    function pickup(element){
            let text=element.textContent;
            $("#pickuplocation").val(text);
            $("#picklocation").fadeOut();
    }
    function dropoff(data){
        let text=data.textContent;
        $("#droplocation").val(text);
           $("#dropofflocation").fadeOut();

    }
</script>  
@endsection

