<div class="row">
    <div class="col-md-8 offset-md-2">
        <form method="post" action="{{route('AddPrice')}}">
            @csrf

            @includeIf('admin.Dashboard.Formpart.van')
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label"></label>
              <input type="text" name="vanprice" class="form-control" placeholder="Enter van Price" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">
                @error('vanprice')
                    {{$message}}
                @enderror
              </div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label"></label>
              <input type="text" name="selfload" class="form-control" placeholder="Self Load Price" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label"></label>
              <input type="text" name="driverhelpprice" class="form-control" placeholder="Driver Help Price" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"></label>
                <input type="text" name="twomanprice" class="form-control" placeholder="2 MEN TEAM Price" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"></label>
                <input type="text" name="threemanprice" class="form-control" placeholder="3 MEN TEAM Price" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"></label>
                <input type="text" name="driverhelphalfhourprice" class="form-control" placeholder="Driver Help helf hour Price" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"></label>
                <input type="text" name="twomanhalfhourprice" class="form-control" placeholder="2 MEN TEAM HALF HOUR Price" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"></label>
                <input type="text" name="threemanhalfhourprice" class="form-control" placeholder="3 MEN TEAM HALF HOUR Price" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"></label>
                <input type="text" name="floorpricewithoutleft" class="form-control" placeholder="Floor Price Without Lift" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"></label>
                <input type="text" name="floorpricewithleft" class="form-control" placeholder="Floor Price With Lift" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"></label>
                <input type="text" name="speiciealtime" class="form-control" placeholder=" 8 PM To 8 AM Price" id="exampleInputPassword1">
              </div>
             
           
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
{{-- @includeIf('admin.Dashboard.Shared.datatable', ['some' => 'data']) --}}
</div>