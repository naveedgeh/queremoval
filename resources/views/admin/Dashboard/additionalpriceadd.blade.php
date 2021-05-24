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
            <form method="post" action="{{route('newaddpriceadd')}}">
                @csrf
    
               
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label"></label>
                  <input type="text" name="stopprice" class="form-control" placeholder="Additional Stop Price" id="stopprice" aria-describedby="stopprice">
                  <div id="emailHelp" class="form-text">
                    @error('stopprice')
                        {{$message}}
                    @enderror
                  </div>
                </div>
               
              
                  
                 
               
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <div class="table-responsove" style="margin-top:50px">
        <table id="myTable" class="table table-bordered">
            <thead class="bg-primary">
                <tr>
                    <th>Sr: No</th>
                    <th>Additional stop Price</th>
                    
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
              
             @foreach ($additionalprice as $item)
                 
             
                <tr>
                @php
                $cont=1; 
             @endphp
           
             <td>{{$cont}}</td>
             <td>{{$item->additionalprice}}</td>
             <td>
                 <a href="{{url('admin/deladdotionalprice/'.$item->id)}}">
                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                 <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                 </svg>
                 </a>
             </td>
         </tr>
         @endforeach
            
               
             {{-- @endforeach --}}
            </tbody>
            <thead class="bg-primary">
                <tr>
                    <th>Sr: No</th>
                    <th>Additional stop Price</th>        
                    <th>Action</th>
                </tr>
            </thead>
        </table>
    </div>
@endsection