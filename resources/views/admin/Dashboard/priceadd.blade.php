@extends('admin.Dashboard.layout.masterlayout')

@section('Title')
    Price Add
@endsection
@section('main')
    <div class="container" style="margin-top:30px">
      @if (Session::has('msg'))
      <div class="alert alert-success alert-dismissible show" role="alert">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Message :</strong> {{Session::get('msg')}}
        
      </div>
      @endif
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
                   
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
      @includeIf('admin.Dashboard.Shared.datatable', ['some' => 'data'])
    </div>
@endsection