<div class="table-responsove" style="margin-top:50px">
    <table id="myTable" class="table table-bordered">
        <thead class="bg-primary">
            <tr>
                <th>Sr: No</th>
                <th>Van Name</th>
                <th>Per Miles price</th>
                <th>Driver help price</th>
                <th>Two Men Price</th>
                <th>Three Men Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php
               $cont=1; 
            @endphp
            @foreach ($vanprice as $item)          
            <td>{{$cont++}}</td>
            <td>{{$item->vanname}}</td>
            <td>{{$item->vanprice}}</td>
            <td>{{$item->driverhelp}}</td>
            <td>{{$item->twomenprice}}</td>
            <td>{{$item->threemenprice}}</td>
            <td>
                <a href="{{url('admin/delprice/'.$item->id)}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                </svg>
                </a>
            </td>
        </tr>
            @endforeach
          
        </tbody>
        <thead class="bg-primary">
            <tr>
                <th>Sr: No</th>
                <th>Van Name</th>
                <th>Per Miles price</th>
                <th>Driver help price</th>
                <th>Two Men Price</th>
                <th>Three Men Price</th>
                <th>Action</th>
            </tr>
        </thead>
    </table>
</div>