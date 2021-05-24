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
        @includeIf("admin.Dashboard.Shared.priceform");
@endsection