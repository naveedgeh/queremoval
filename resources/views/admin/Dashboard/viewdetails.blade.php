@extends('admin.Dashboard.layout.masterlayout')

@section('Title')
    View Price Page
@endsection
@section('main')
{{-- {{dd($vanprice)}} --}}
<div class="row">
  @foreach ($vanprice as $price )
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><strong>Car Name :</strong>{{$price->vanname}}</h5>
        <div class="_23naveedpricetable">
          <strong>Per Miles Price</strong>
          <p>£  {{$price->vanprice}}</p>
        </div>
        <div class="_23naveedpricetable">
          <strong>Self Load Price</strong>
          <p>£ {{$price->selfload}}</p>
        </div>
        <div class="_23naveedpricetable">
          <strong>Driver Help Price</strong>
          <p>£ {{$price->driverhelp}}</p>
        </div>
        <div class="_23naveedpricetable">
          <strong>Two Men Price</strong>
          <p>£ {{$price->twomenprice}}</p>
        </div>
        <div class="_23naveedpricetable">
          <strong>Three Men Price</strong>
          <p>£ {{$price->threemenprice}}</p>
        </div>
        <div class="_23naveedpricetable">
          <strong>Driver Help Half Hour Price</strong>
          <p>£ {{$price->driverhelphalfhourprice}}</p>
        </div>
        <div class="_23naveedpricetable">
          <strong>Two Men Half Hour Price</strong>
          <p>£ {{$price->twomanhalfhourprice}}</p>
        </div>
        <div class="_23naveedpricetable">
          <strong>Three Men Half Hour Price</strong>
          <p>£ {{$price->threemanhalfhourprice}}</p>
        </div>
        <div class="_23naveedpricetable">
          <strong>Floor Without Left Price</strong>
          <p>£ {{$price->floorpricewithoutleft}}</p>
        </div>
        <div class="_23naveedpricetable">
          <strong>Floor With Left Price</strong>
          <p>£ {{$price->floorpricewithleft}}</p>
        </div>
        <div class="_23naveedpricetable">
          <strong>8 PM To 8 AM</strong>
          <p>£ {{$price->speiciealtime}}</p>
        </div>
        <div style="display: flex;">
          <a href="{{url('admin/delprice/'.$price->id)}}" class="btn btn-outline-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
            </svg>
            </a>
        <a href="{{url('admin/Editprice/'.$price->id)}}" class="btn btn-outline-primary smallButton">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
          </svg>
        </a>
     
      </div>
      </div>
    </div>
  </div>
  @endforeach
   
   {{-- modal --}}

   <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Update Price</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-8 offset-md-2">
                <form method="post" action="{{route('UpdatePrice')}}">
                 
                    @csrf
                    <input type="hidden" name="pid" id="pid"/>
                    @includeIf('admin.Dashboard.Formpart.van')
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label"></label>
                      <input type="text" name="vanprice" class="form-control" placeholder="Enter van Price" id="vanprice" aria-describedby="vanprice">
                      <div id="emailHelp" class="form-text">
                        @error('vanprice')
                            {{$message}}
                        @enderror
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label"></label>
                      <input type="text" name="driverhelpprice" class="form-control" placeholder="Driver Help Price" id="driverhelpprice">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"></label>
                        <input type="text" name="twomanprice" class="form-control" placeholder="2 MEN TEAM Price" id="twomanprice">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"></label>
                        <input type="text" name="threemanprice" class="form-control" placeholder="3 MEN TEAM Price" id="threemanprice">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"></label>
                        <input type="text" name="driverhelphalfhourprice" class="form-control" placeholder="Driver Help helf hour Price" id="driverhelphalfhourprice">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"></label>
                        <input type="text" name="twomanhalfhourprice" class="form-control" placeholder="2 MEN TEAM HALF HOUR Price" id="twomanhalfhourprice">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"></label>
                        <input type="text" name="threemanhalfhourprice" class="form-control" placeholder="3 MEN TEAM HALF HOUR Price" id="threemanhalfhourprice">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"></label>
                        <input type="text" name="floorpricewithoutleft" class="form-control" placeholder="Floor Price Without Lift" id="floorpricewithoutleft">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"></label>
                        <input type="text" name="floorpricewithleft" class="form-control" placeholder="Floor Price With Lift" id="floorpricewithleft">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"></label>
                        <input type="text" name="speiciealtime" class="form-control" placeholder=" 8 PM To 8 AM Price" id="speiciealtime">
                      </div>
                     
                   
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
      {{-- @includeIf('admin.Dashboard.Shared.datatable', ['some' => 'data']) --}}
    </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
 
  </div>
@endsection

@section("scriptmain")
<script>
  $(document).on('click','.smallButton',function(event){
    event.preventDefault();
    let url=$(this).attr("href");
    $.ajax({
      url:url,
      dataType:'json'
    }).done(function(responce){
        $("#staticBackdrop").modal('show');
       console.log(responce);
       $("#pid").val(responce["id"]);
        $("#vanprice").val(responce["vanprice"]);
        $("#driverhelpprice").val(responce["driverhelp"]);
        $("#twomanprice").val(responce["twomenprice"]);
        $("#threemanprice").val(responce["threemenprice"]);
        $("#driverhelphalfhourprice").val(responce["driverhelphalfhourprice"]);
        $("#twomanhalfhourprice").val(responce["twomanhalfhourprice"]);
        $("#threemanhalfhourprice").val(responce["threemanhalfhourprice"]);
        $("#floorpricewithoutleft").val(responce["floorpricewithoutleft"]);
        $("#floorpricewithleft").val(responce["floorpricewithleft"]);
        $("#speiciealtime").val(responce["speiciealtime"]);
       
    });
  });
</script>
@endsection

