
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('adminresource/assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('adminresource/assets/img/favicon.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
  @section('Title')
      Dashboard
  @show  
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{asset('adminresource/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('adminresource/assets/css/paper-dashboard.css?v=2.0.1')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('assets/demo/demo.css" rel="stylesheet')}}" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
  <link href="{{asset('adminresource/assets/css/admin.css')}}" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
   @section('slidebar')
       @includeif('admin.Dashboard.Shared.sidebar')
   @show
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">Que Removal Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            {{-- <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form> --}}
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link btn-magnify" href="javascript:;">
                  <i class="nc-icon nc-layout-11"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link btn-rotate" href="javascript:;">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
       {{-- @includeif('admin.Dashboard.Shared.tabs') --}}
        @section('main')
       {{-- @includeIf('admin.Dashboard.Shared.mainbody') --}}
       <h1 style="text-align: center;margin-top:300px;">Welcome To Admin</h1>
        @show
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                {{-- <li><a href="" target="_blank"></a></li>
                <li><a href="" target="_blank">Blog</a></li>
                <li><a href="" target="_blank">Licenses</a></li> --}}
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                © <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> 
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  // <!--   Core JS Files   -->
  <script src="{{asset('adminresource/assets/js/core/jquery.min.js')}}"></script>
  <script src="{{asset('adminresource/assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('adminresource/assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('adminresource/assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  // <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  // <!-- Chart JS -->
  <script src="{{asset('adminresource/assets/js/plugins/chartjs.min.js')}}"></script>
  // <!--  Notifications Plugin    -->
  <script src="{{asset('adminresource/assets/js/plugins/bootstrap-notify.js')}}"></script>
  // <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('adminresource/assets/js/paper-dashboard.min.js?v=2.0.1')}}" type="text/javascript"></script>
 
  <script src="{{asset('adminresource/assets/demo/demo.js')}}"></script>
  @section('scriptmain')
      
  @show
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
  <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
 <script>
  $(document).ready( function () {
    $('#myTable').DataTable();
});
 </script>

</body>

</html>
