<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
      <a href="" class="simple-text logo-mini">
        <div class="logo-image-small">
          <img src="{{asset('adminresource/assets/img/logo-small.png')}}">
        </div>
        <!-- <p>CT</p> -->
      </a>
      <a href="" class="simple-text logo-normal">
       {{session("name")}}
        <!-- <div class="logo-image-big">
          <img src="../assets/img/logo-big.png">
        </div> -->
      </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="active ">
          <a href="{{route('dashbaord')}}">
            <i class="nc-icon nc-bank"></i>
            <p>Dashboard</p>
          </a>
        </li>
    
        <li>
          <a href="{{route('priceadd')}}">
            <i class="nc-icon nc-caps-small"></i>
            <p>Vehical Price Add</p>
          </a>
        </li>
        <li>
          <a href="{{route('addpriceadd')}}">
            <i class="nc-icon nc-caps-small"></i>
            <p>Additional Stop Price</p>
          </a>
        </li>
        <li>
          <a href="{{route('addpriceaddfull')}}">
            <i class="nc-icon nc-caps-small"></i>
            <p>Full Pack Price</p>
          </a>
        </li>
        <li>
          <a href="{{route('ViewDetails')}}">
            <i class="nc-icon nc-caps-small"></i>
            <p>View Details</p>
          </a>
        </li>
       
        <li class="active-pro">
          <a href="{{url('/logout')}}">
            <i class="nc-icon nc-spaceship"></i>
            <p>Logout</p>
          </a>
        </li>
      </ul>
    </div>
  </div>