<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	
	<meta http-equiv="content-type" content="text/html" charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Heebo:400,500,700" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{('css/dark.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- DatePicker CSS -->
	<link rel="stylesheet" href="{{asset('css/components/daterangepicker.css')}}" type="text/css" />
	<!-- Range Slider CSS -->
	<link rel="stylesheet" href="{{asset('css/components/ion.rangeslider.css')}}" type="text/css" />

	<!--  Demo cleaner Specific Stylesheet -->
	{{-- <link rel="stylesheet" href="{{asset('css/colors.php?color=335EEE')}}" type="text/css" /> <!-- Cleaner Theme Color --> --}}
	<link rel="stylesheet" href="{{asset('demos/cleaner/css/fonts.css')}}" type="text/css" /> <!-- Cleaner Theme Font -->
	<link rel="stylesheet" href="{{asset('demos/cleaner/cleaner.css')}}" type="text/css" /> <!-- Cleaner Theme Custom CSS -->
	<!-- / -->

	<!-- Document Title
	============================================= -->
	<title>@yield('Title',' Cleaner | Canvas')</title>

	<style>
		.form-group > label.error {
			display: block !important;
			text-transform: none;
		}
		.form-group input.valid ~ label.error,
		.form-group input[type="text"] ~ label.error,
		.form-group input[type="email"] ~ label.error,
		.form-group input[type="number"] ~ label.error,
		.form-group select ~ label.error { display: none !important; }
	</style>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Top Bar
		============================================= -->
		
		<!-- Header
		============================================= -->
		<header id="header" class="full-header header-size-md border-0" data-sticky-shrink="false">

			<div id="header-wrap">
				<div class="container-fluid pr-0">
					<div class="header-row">

						<!-- Logo
						============================================= -->
						<div id="logo" class="col col-sm-auto">
							<a href="/" class="standard-logo"><img src="{{asset('images/logoqueremoval.png')}}" alt="Canvas Logo"></a>
							<a href="/" class="retina-logo"><img src="{{asset('images/logoqueremoval.png')}}" alt="Canvas Logo"></a>
						</div><!-- #logo end -->

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<div class="header-misc">
							<a style="background-color:black;" href="{{url('contact')}}" data-scrollto="#section-price" data-offset="60" class="button button-light text-dark font-weight-semibold">Contact Us</a>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu">

							<ul class="menu-container border-right-0 mr-0">
								<li class="menu-item active">
									<a class="menu-link {{Request::path('/')=='/'? 'activeLink':''}}" href="{{url('/')}}" ><div>Home</div></a>
								</li>
								<li class="menu-item">
									<a class="menu-link {{Request::path('about')=='about'? 'activeLink':''}}" href="{{url('about')}}"><div>About Us</div></a>
								</li>
								
							<li class="menu-item"><a class="menu-link" href=""><div>Services</div></a>
									<ul class="sub-menu-container">
										<li class="menu-item"><a class="menu-link" href="{{url('/homeremoval')}}">Home Removals</a></li>
										<li class="menu-item"><a class="menu-link" href="{{url('/office-moves')}}">Office Moves</a></li>
									
									</ul>
								</li>
								
								
							
								
							</ul>

						</nav><!-- #primary-menu end -->

					</div>
				</div>
			</div>

			<div class="header-wrap-clone"></div>

		</header><!-- #header end -->

		<!-- Slider
		============================================= -->
	@section('mainbody')
		

		
		
		<section id="slider" class="slider-element bg-color" style="height: auto; padding: 0px 0; background: url({{asset('demos/movers/images/bg-2.png')}}) no-repeat center center / 100% 100%;">

			<div class="container mt-4" style="z-index: 2">
				
				<div class="row topmargin justify-content-center">
					<div class="col-lg-6">
					<div class="center">
				
					<h1 style="font-size:42px !important;" class="text-white h2 font-weight-semibold mb-2">Welcome to Que Removal.</h1>
					
				</div>
						<br><br>
						<div class="tab-content rounded-bottom shadow bg-white py-4 px-5">
							<div class="tab-pane fade show active" id="home-moving" role="tabpanel" aria-labelledby="home-moving-tab">
								<p class="mb-4">Shift to your new Home, Just Hire Us, Fill the Information Below and Get Best Prices</p>
								<div class="form-widget">
									<div class="form-result"></div>
									<form class="row home-moving-form position-relative mb-0" action="/book" method="post" >
										@csrf
										{{-- <div class="form-process">
											<div class="css3-spinner">
												<div class="css3-spinner-scaler"></div>
											</div>
										</div> --}}


									<div class="col-sm-12 input-group form-group">
											
										<div class="input-group-prepend">
												<span class="input-group-text bg-color text-white"><i class="icon-truck1"></i></span>
										</div>
										
											<input type="text" name="pickup" id="pickuplocation" placeholder="Pick up Location" class="form-control location"/>
										
											<div id="picklocation">
												
											</div>
									</div>
											<span class="error"> 
												@error('pickup')
													{{$message}}
												@enderror
											</span>
											{{-- additional address --}}
											
											
												<div class="col-sm-12  form-group " id="addintoalstops">
													
													
													 
												</div>
													  <span class="error"> 
														  @error('dropoff')
															  {{$message}}
														  @enderror
										  			  </span>
											
												
										
												  {{-- end additional address --}}
										<div class="col-sm-12 input-group form-group">
													
										  <div class="input-group-prepend">
												<span class="input-group-text bg-color text-white"><i class="icon-truck1"></i></span>
											</div>
											<input type="text" name="dropoff" id="droplocation" placeholder="Drop off Location" class="form-control location"/>
											
											<div id="dropofflocation">
												
											</div>
											</div>
											<span class="error"> 
												@error('dropoff')
													{{$message}}
												@enderror
											</span>
										<div class="col-12">
											<button id="addstop" class="btn bg-color text-white font-weight-medium btn-block py-2 mt-2">+ Add Addotional Stop</button>
											<input type="submit" name="home-moving-form-submit" id="findprice" class="btn bg-color text-white font-weight-medium btn-block py-2 mt-2" value="Find Prices">
										</div>

						
									</form>
								</div>
							</div>
						
							
						</div>
						<br><br><br><br><br><br>
					</div>
					<div class="col-lg-5">
						<center>
							<img style="margin-top:-1rem !important;" src="images/mllll.png" alt="Image 1" >
						</center>
					
					</div>
				</div>
			</div>

			<div class="svg-separator">
				<div>
					<svg preserveAspectRatio="xMidYMax meet" viewBox="0 0 1600 100" data-height="100">
						<path style="opacity: 1;fill: rgba(255,255,255,0.75);" d="M1040,56c0.5,0,1,0,1.6,0c-16.6-8.9-36.4-15.7-66.4-15.7c-56,0-76.8,23.7-106.9,41C881.1,89.3,895.6,96,920,96
						C979.5,96,980,56,1040,56z"></path> <path style="opacity: 1;fill: rgba(255,255,255,0.75);" d="M1699.8,96l0,10H1946l-0.3-6.9c0,0,0,0-88,0s-88.6-58.8-176.5-58.8c-51.4,0-73,20.1-99.6,36.8 c14.5,9.6,29.6,18.9,58.4,18.9C1699.8,96,1699.8,96,1699.8,96z"></path> <path style="opacity: 1;fill: rgba(255,255,255,0.75);" d="M1400,96c19.5,0,32.7-4.3,43.7-10c-35.2-17.3-54.1-45.7-115.5-45.7c-32.3,0-52.8,7.9-70.2,17.8 c6.4-1.3,13.6-2.1,22-2.1C1340.1,56,1340.3,96,1400,96z"></path> <path style="opacity: 1;fill: rgba(255,255,255,0.75);" d="M320,56c6.6,0,12.4,0.5,17.7,1.3c-17-9.6-37.3-17-68.5-17c-60.4,0-79.5,27.8-114,45.2 c11.2,6,24.6,10.5,44.8,10.5C260,96,259.9,56,320,56z"></path> <path style="opacity: 1;fill: rgba(255,255,255,0.75);" d="M680,96c23.7,0,38.1-6.3,50.5-13.9C699.6,64.8,679,40.3,622.2,40.3c-30,0-49.8,6.8-66.3,15.8 c1.3,0,2.7-0.1,4.1-0.1C619.7,56,620.2,96,680,96z"></path> <path style="opacity: 1;fill: rgba(255,255,255,0.75);" d="M-40,95.6c28.3,0,43.3-8.7,57.4-18C-9.6,60.8-31,40.2-83.2,40.2c-14.3,0-26.3,1.6-36.8,4.2V106h60V96L-40,95.6
						z"></path>
						<path style="opacity: 1;fill: rgba(255,255,255,0.3);;" d="M504,73.4c-2.6-0.8-5.7-1.4-9.6-1.4c-19.4,0-19.6,13-39,13c-19.4,0-19.5-13-39-13c-14,0-18,6.7-26.3,10.4 C402.4,89.9,416.7,96,440,96C472.5,96,487.5,84.2,504,73.4z"></path> <path style="opacity: 1;fill: rgba(255,255,255,0.3);;" d="M1205.4,85c-0.2,0-0.4,0-0.6,0c-19.5,0-19.5-13-39-13s-19.4,12.9-39,12.9c0,0-5.9,0-12.3,0.1 c11.4,6.3,24.9,11,45.5,11C1180.6,96,1194.1,91.2,1205.4,85z"></path> <path style="opacity: 1;fill: rgba(255,255,255,0.3);;" d="M1447.4,83.9c-2.4,0.7-5.2,1.1-8.6,1.1c-19.3,0-19.6-13-39-13s-19.6,13-39,13c-3,0-5.5-0.3-7.7-0.8 c11.6,6.6,25.4,11.8,46.9,11.8C1421.8,96,1435.7,90.7,1447.4,83.9z"></path> <path style="opacity: 1;fill: rgba(255,255,255,0.3);;" d="M985.8,72c-17.6,0.8-18.3,13-37,13c-19.4,0-19.5-13-39-13c-18.2,0-19.6,11.4-35.5,12.8 c11.4,6.3,25,11.2,45.7,11.2C953.7,96,968.5,83.2,985.8,72z"></path> <path style="opacity: 1;fill: rgba(255,255,255,0.3);;" d="M743.8,73.5c-10.3,3.4-13.6,11.5-29,11.5c-19.4,0-19.5-13-39-13s-19.5,13-39,13c-0.9,0-1.7,0-2.5-0.1 c11.4,6.3,25,11.1,45.7,11.1C712.4,96,727.3,84.2,743.8,73.5z"></path> <path style="opacity: 1;fill: rgba(255,255,255,0.3);;" d="M265.5,72.3c-1.5-0.2-3.2-0.3-5.1-0.3c-19.4,0-19.6,13-39,13c-19.4,0-19.6-13-39-13 c-15.9,0-18.9,8.7-30.1,11.9C164.1,90.6,178,96,200,96C233.7,96,248.4,83.4,265.5,72.3z"></path> <path style="opacity: 1;fill: rgba(255,255,255,0.3);;" d="M1692.3,96V85c0,0,0,0-19.5,0s-19.6-13-39-13s-19.6,13-39,13c-0.1,0-0.2,0-0.4,0c11.4,6.2,24.9,11,45.6,11 C1669.9,96,1684.8,96,1692.3,96z"></path> <path style="opacity: 1;fill: rgba(255,255,255,0.3);;" d="M25.5,72C6,72,6.1,84.9-13.5,84.9L-20,85v8.9C0.7,90.1,12.6,80.6,25.9,72C25.8,72,25.7,72,25.5,72z"></path>
						<path style="fill: rgb(255, 255, 255);" d="M-40,95.6C20.3,95.6,20.1,56,80,56s60,40,120,40s59.9-40,120-40s60.3,40,120,40s60.3-40,120-40s60.2,40,120,40s60.1-40,120-40s60.5,40,120,40s60-40,120-40s60.4,40,120,40s59.9-40,120-40s60.3,40,120,40s60.2-40,120-40s60.2,40,120,40s59.8,0,59.8,0l0.2,143H-60V96L-40,95.6z"></path>
					</svg>
					<div class="bg-white" style="height: 150px"></div>
				</div>
			</div>

		</section>	
	<br><br>
		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap pt-4 pb-0">
			@include('frontend.Shared.howtowork')

			<div class="clear"></div>	
				<!-- Content
		       ============================================= -->
		     <section id="content">
			 <div class="content-wrap">
				<div class="container clearfix">
             <div class="heading-block center mx-auto" style="max-width: 700px">
						<h2 class="mb-2 nott ls0">OUR PORTFOLIO</h2>
						<span>Objectively actualize process-centric infomediaries via ethical niche markets. Professionally plagiarize leading-edge potentialities.</span>
					</div>
					

					<!-- Portfolio Items
					============================================= -->
					<div id="portfolio" class="portfolio row grid-container gutter-30">

						<article class="portfolio-item col-md-4 col-sm-6 col-12 pf-media pf-icons">
							<div class="grid-inner">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="images/F1.jpg" alt="Open Imagination">
									</a>
									<div class="bg-overlay">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="images/portfolio/full/1.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								
							</div>
						</article>

						
						
						<article class="portfolio-item col-md-4 col-sm-6 col-12 pf-media pf-icons">
							<div class="grid-inner">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="images/F2.jpg" alt="Open Imagination">
									</a>
									<div class="bg-overlay">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="images/portfolio/full/1.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								
							</div>
						</article>
						
						
						
						
						
						
						
						
						<article class="portfolio-item col-md-4 col-sm-6 col-12 pf-media pf-icons">
							<div class="grid-inner">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="images/F3.jpg" alt="Open Imagination">
									</a>
									<div class="bg-overlay">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="images/portfolio/full/1.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								
							</div>
						</article>
						
						
						
						
						
						
						
						
						<article class="portfolio-item col-md-4 col-sm-6 col-12 pf-media pf-icons">
							<div class="grid-inner">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="images/F4.jpg" alt="Open Imagination">
									</a>
									<div class="bg-overlay">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="images/portfolio/full/1.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								
							</div>
						</article>
						
						
						
						
						
						
						
						
						<article class="portfolio-item col-md-4 col-sm-6 col-12 pf-media pf-icons">
							<div class="grid-inner">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="images/F5.jpg" alt="Open Imagination">
									</a>
									<div class="bg-overlay">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="images/portfolio/full/1.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								
							</div>
						</article>
						
						
							<article class="portfolio-item col-md-4 col-sm-6 col-12 pf-media pf-icons">
							<div class="grid-inner">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="images/F6.jpg" alt="Open Imagination">
									</a>
									<div class="bg-overlay">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="images/portfolio/full/1.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								
							</div>
						</article>
						
						
							<article class="portfolio-item col-md-4 col-sm-6 col-12 pf-media pf-icons">
							<div class="grid-inner">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="images/F7.jpg" alt="Open Imagination">
									</a>
									<div class="bg-overlay">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="images/portfolio/full/1.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								
							</div>
						</article>
						
						
							<article class="portfolio-item col-md-4 col-sm-6 col-12 pf-media pf-icons">
							<div class="grid-inner">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="images/F8.jpg" alt="Open Imagination">
									</a>
									<div class="bg-overlay">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="images/portfolio/full/1.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								
							</div>
						</article>
						
						
							<article class="portfolio-item col-md-4 col-sm-6 col-12 pf-media pf-icons">
							<div class="grid-inner">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="images/F9.jpg" alt="Open Imagination">
									</a>
									<div class="bg-overlay">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="images/portfolio/full/1.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								
							</div>
						</article>
						
							
						<article class="portfolio-item col-md-4 col-sm-6 col-12 pf-media pf-icons">
							<div class="grid-inner">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="images/F10.jpg" alt="Open Imagination">
									</a>
									<div class="bg-overlay">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="images/portfolio/full/1.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								
							</div>
						</article>
						<article class="portfolio-item col-md-4 col-sm-6 col-12 pf-media pf-icons">
							<div class="grid-inner">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="images/F11.jpg" alt="Open Imagination">
									</a>
									<div class="bg-overlay">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="images/portfolio/full/1.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								
							</div>
						</article>
						<article class="portfolio-item col-md-4 col-sm-6 col-12 pf-media pf-icons">
							<div class="grid-inner">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="images/F12.jpg" alt="Open Imagination">
									</a>
									<div class="bg-overlay">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="images/portfolio/full/1.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								
							</div>
						</article>
							
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						<!--<article class="portfolio-item col-md-4 col-sm-6 col-12 pf-illustrations">
							<div class="grid-inner">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="images/portfolio/masonry/3/2.jpg" alt="Locked Steel Gate">
									</a>
									<div class="bg-overlay">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="images/portfolio/full/2.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
											<a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Locked Steel Gate</a></h3>
									<span><a href="#">Illustrations</a></span>
								</div>
							</div>
						</article>

						<article class="portfolio-item col-md-4 col-sm-6 col-12 pf-graphics pf-uielements">
							<div class="grid-inner">
								<div class="portfolio-image">
									<a href="#">
										<img src="images/portfolio/masonry/3/3.jpg" alt="Mac Sunglasses">
									</a>
									<div class="bg-overlay">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="https://vimeo.com/89396394" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="iframe"><i class="icon-line-play"></i></a>
											<a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>
									<span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
								</div>
							</div>
						</article>

						<article class="portfolio-item col-md-4 col-sm-6 col-12 pf-icons pf-illustrations">
							<div class="grid-inner">
								<div class="portfolio-image">
									<div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
										<div class="flexslider">
											<div class="slider-wrap">
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/masonry/3/4.jpg" alt="Morning Dew"></a></div>
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/masonry/3/4-1.jpg" alt="Morning Dew"></a></div>
											</div>
										</div>
									</div>
									<div class="bg-overlay" data-lightbox="gallery">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="images/portfolio/full/4.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
											<a href="images/portfolio/full/4-1.jpg" class="d-none" data-lightbox="gallery-item"></a>
											<a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single-gallery.html">Morning Dew</a></h3>
									<span><a href="#">Icons</a>, <a href="#">Illustrations</a></span>
								</div>
							</div>
						</article>

						<article class="portfolio-item col-md-4 col-sm-6 col-12 pf-uielements pf-media">
							<div class="grid-inner">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="images/portfolio/masonry/3/5.jpg" alt="Console Activity">
									</a>
									<div class="bg-overlay">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="images/portfolio/full/5.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
											<a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Console Activity</a></h3>
									<span><a href="#">UI Elements</a>, <a href="#">Media</a></span>
								</div>
							</div>
						</article>

						<article class="portfolio-item col-md-4 col-sm-6 col-12 pf-graphics pf-illustrations">
							<div class="grid-inner">
								<div class="portfolio-image">
									<div class="fslider" data-arrows="false">
										<div class="flexslider">
											<div class="slider-wrap">
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/masonry/3/6.jpg" alt="Shake It"></a></div>
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/masonry/3/6-1.jpg" alt="Shake It"></a></div>
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/masonry/3/6-2.jpg" alt="Shake It"></a></div>
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/masonry/3/6-3.jpg" alt="Shake It"></a></div>
											</div>
										</div>
									</div>
									<div class="bg-overlay" data-lightbox="gallery">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="images/portfolio/full/6.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
											<a href="images/portfolio/full/6-1.jpg" class="d-none" data-lightbox="gallery-item"></a>
											<a href="images/portfolio/full/6-2.jpg" class="d-none" data-lightbox="gallery-item"></a>
											<a href="images/portfolio/full/6-3.jpg" class="d-none" data-lightbox="gallery-item"></a>
											<a href="portfolio-single-gallery.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single-gallery.html">Shake It!</a></h3>
									<span><a href="#">Illustrations</a>, <a href="#">Graphics</a></span>
								</div>
							</div>
						</article>

						<article class="portfolio-item col-md-4 col-sm-6 col-12 pf-uielements pf-icons">
							<div class="grid-inner">
								<div class="portfolio-image">
									<a href="portfolio-single-video.html">
										<img src="images/portfolio/masonry/3/7.jpg" alt="Backpack Contents">
									</a>
									<div class="bg-overlay">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="https://www.youtube.com/watch?v=kuceVNBTJio" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="iframe"><i class="icon-line-play"></i></a>
											<a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single-video.html">Backpack Contents</a></h3>
									<span><a href="#">UI Elements</a>, <a href="#">Icons</a></span>
								</div>
							</div>
						</article>

						<article class="portfolio-item col-md-4 col-sm-6 col-12 pf-graphics">
							<div class="grid-inner">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="images/portfolio/masonry/3/8.jpg" alt="Sunset Bulb Glow">
									</a>
									<div class="bg-overlay">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="images/portfolio/full/8.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
											<a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Sunset Bulb Glow</a></h3>
									<span><a href="#">Graphics</a></span>
								</div>
							</div>
						</article>

						<article class="portfolio-item col-md-4 col-sm-6 col-12 pf-illustrations pf-icons">
							<div class="grid-inner">
								<div class="portfolio-image">
									<div class="fslider" data-arrows="false" data-speed="650" data-pause="3500" data-animation="fade">
										<div class="flexslider">
											<div class="slider-wrap">
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/masonry/3/9.jpg" alt="Bridge Side"></a></div>
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/masonry/3/9-1.jpg" alt="Bridge Side"></a></div>
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/masonry/3/9-2.jpg" alt="Bridge Side"></a></div>
											</div>
										</div>
									</div>
									<div class="bg-overlay" data-lightbox="gallery">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="images/portfolio/full/9.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
											<a href="images/portfolio/full/9-1.jpg" class="d-none" data-lightbox="gallery-item"></a>
											<a href="images/portfolio/full/9-2.jpg" class="d-none" data-lightbox="gallery-item"></a>
											<a href="portfolio-single-gallery.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Bridge Side</a></h3>
									<span><a href="#">Illustrations</a>, <a href="#">Icons</a></span>
								</div>
							</div>
						</article>-->

					</div><!-- #portfolio end -->

				</div>
			</div>
		</section><!-- #content end -->

				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				

				<div class="clear"></div>

				<div class="container topmargin bottommargin-lg">
					<div class="heading-block center mx-auto" style="max-width: 700px">
						<h2 class="mb-2 nott ls0">Why You Choose Us?</h2>
						<span>Authoritatively create performance based web services for exceptional products. Dynamically disseminate customized.</span>
					</div>
					<div class="clear"></div>
					<div class="row col-mb-50 mt-3">

						<div class="col-lg-4 center order-lg-last">
							<img src="images/man.png" alt="Cleaner" style="color: #BD0000 !important;" width="340">
					</div>

						<div class="col-lg-4 col-md-6 pb-0">

							

							<div class="feature-box fbox-plain bottommargin">
								<div class="fbox-icon">
									<img src="demos/cleaner/images/icons/cleaning-man.svg" alt="Cleaner Icon">
								</div>
								<div class="fbox-content">
									<h3 class="nott font-weight-semibold ls0">820+ Over Jobs</h3>
									<p>We have covered each &amp; everything in our Docs including Videos &amp; Screenshots.</p>
								</div>
							</div>

							<div class="feature-box fbox-plain bottommargin">
								<div class="fbox-icon">
									<img src="demos/cleaner/images/icons/guarantee.svg" alt="Cleaner Icon">
								</div>
								<div class="fbox-content">
									<h3 class="nott font-weight-semibold ls0">Satisfaction Guarantee</h3>
									<p>Display your Content attractively using Parallax Sections with HTML5 Videos.</p>
								</div>
							</div>

						</div>

						<div class="col-lg-4 col-md-6">

							

							<div class="feature-box fbox-plain bottommargin">
								<div class="fbox-icon">
									<img src="demos/cleaner/images/icons/time.svg" alt="Cleaner Icon">
								</div>
								<div class="fbox-content">
									<h3 class="nott font-weight-semibold ls0">Saves Your Time</h3>
									<p>Complete control on each &amp; every element that provides endless customization.</p>
								</div>
							</div>

							<div class="feature-box fbox-plain bottommargin">
								<div class="fbox-icon">
									<img src="demos/cleaner/images/icons/price.svg" alt="Cleaner Icon">
								</div>
								<div class="fbox-content">
									<h3 class="nott font-weight-semibold ls0">Flat Rate Price</h3>
									<p>Change your Website's Primary Scheme instantly by simply adding the dark class.</p>
								</div>
							</div>

						</div>

					</div>
				</div>

				<div class="clear"></div>

			
		

				<div class="section bg-transparent">
					<div class="container">
						<div class="row justify-content-between align-items-center">

							<div class="col-md-5 center">
								<img src="images/reviews.png" alt="Review Image" width="400">
								<div class="row mt-5">
									<div class="col-6">
										<h3 class="color font-weight-normal h1 mb-3">1100+</h3>
										<h5 class="text-muted font-weight-normal">Jobs Done, consectetur adipisicing elit. Eveniet, sunt.</h5>
									</div>

									<div class="col-6">
										<h3 class="color font-weight-normal h1 mb-3">4.9/5.0</h3>
										<h5 class="text-muted font-weight-normal">Average review across all of our company Service lines.</h5>
									</div>
								</div>
							</div>

							<div class="col-lg-6 col-md-7">
								<div class="heading-block">
									<h2 class="mb-2 nott ls0">More than <span>12000+</span> Customers Reviews</h2>
									<span>Objectively actualize process-centric infomediaries via ethical niche markets. Professionally plagiarize leading-edge potentialities.</span>
								</div>

								<div id="oc-testi" class="owl-carousel testimonials-carousel carousel-widget" data-margin="10" data-nav="false" data-pagi="true" data-items="1" data-autoplay="5000" data-loop="true">
									<div class="oc-item">
										<div class="testimonial bg-transparent p-4 shadow-sm">
											<div class="testi-image">
												<a href="#"><img src="images/testimonials/1.jpg" alt="Customer Testimonails"></a>
											</div>
											<div class="testi-content">
												<h4 class="font-weight-normal">Synergistically pontificate scalable manufactured products after worldwide customer service. Phosfluorescently harness open-source relationships rather than competitive internal or "organic" sources. Globally.</h4>
												<div class="testi-meta"> John Doe<span>XYZ Inc.</span></div>
											</div>
										</div>
									</div>
									<div class="oc-item">
										<div class="testimonial bg-transparent p-4 shadow-sm">
											<div class="testi-image">
												<a href="#"><img src="images/testimonials/2.jpg" alt="Customer Testimonails"></a>
											</div>
											<div class="testi-content">
												<h4 class="font-weight-normal">Progressively scale front-end models whereas standardized technology. Collaboratively disintermediate user friendly communities vis-a-vis cross-platform results. Completely productize client-centric benefits vis-a-vis optimal.</h4>
												<div class="testi-meta"> Bailey Wonger<span>Apple Inc.</span></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				@show
				<div class="section center mb-0" style="padding: 120px 0; background-color: rgba(51,94,238,0.08);">
					<div class="container" style="max-width: 700px">
						<img src="images/apply.png" alt="Apply Icon" height="200" class="mb-4">
						<h2 style="font-size: 38px">Try out now &amp; Hire Us</h2>
						<p class="mb-5" style="font-size: 1.125rem;">Dynamically predominate B2B resources whereas interdependent strategic theme areas. Completely underwhelm out-of-the-box functionalities for worldwide e-tailers. Dynamically restore fully researched architectures.</p>
						<a href="#" class="btn btn-lg bg-color text-white font-weight-semibold px-4">Get Started</a>
						<a href="#" class="btn btn-lg bg-white font-weight-semibold color px-4 ml-2">Contact us</a>
					</div>
				</div>

			</div>

		</section><!-- #content end -->

		<div class="position-relative"  style="background-color: rgba(51,94,238,0.08);">
			<svg class="svg-separator" viewBox="0 0 1440 24" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
				<path d="M0 24H1440V0C722.5 52 0 0 0 0V24Z" fill="#bc3636"></path>
			</svg>
		</div>
			
		<!-- Footer
		============================================= -->
		<footer id="footer" class="border-0 dark bg-color">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap">

					<div class="row">
						<div class="col-6 col-lg-4">
							<img class="mb-5" src="images/white.png" alt="" width="223">
							<p class="text-white-50"><span style="color:white;"><strong>Address:</strong></span> Catherall road London N5 2LD United Kingdom<br>
							<span style="color:white;"><strong >Email:</strong></span> sales@queremoval.com<br>
							<span style="color:white;"><strong>Phone:</strong></span> 020 8123 7369</p>
							<div class="clear"></div>
							<div>
								<a href="#" class="social-icon mr-2 si-light si-rounded si-small si-facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>
								<a href="#" class="social-icon mr-2 si-light si-rounded si-small si-twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>
								<a href="#" class="social-icon mr-2 si-light si-rounded si-small si-youtube">
									<i class="icon-youtube"></i>
									<i class="icon-youtube"></i>
								</a>
								<a href="#" class="social-icon si-light si-rounded si-small si-appstore">
									<i class="icon-apple"></i>
									<i class="icon-apple"></i>
								</a>
							</div>
						</div>
						<div class="col-6 col-lg-3">
							<h4>Services</h4>
							<ul class="list-unstyled mb-0 text-small">
								<li class="mb-2"><a href="#" class="text-light">Cool stuff</a></li>
								<li class="mb-2"><a href="#" class="text-light">Random feature</a></li>
								<li class="mb-2"><a href="#" class="text-light">Team feature</a></li>
								<li class="mb-2"><a href="#" class="text-light">Stuff for developers</a></li>
								<li class="mb-2"><a href="#" class="text-light">Another one</a></li>
								<li><a href="#" class="text-light">Last time</a></li>
							</ul>
						</div>
						<div class="col-6 col-lg-3 mt-5 mt-lg-0">
							<h4>Resources</h4>
							<ul class="list-unstyled mb-0 text-small">
								<li class="mb-2"><a href="#" class="text-light">Terms and Conditions</a></li>
								<li class="mb-2"><a href="#" class="text-light">Privacy policy</a></li>
								<li class="mb-2"><a href="#" class="text-light">About Us</a></li>
								
							</ul>
						</div>
						<div class="col-6 col-lg-2 mt-5 mt-lg-0">
						<h4>Resources</h4>
							<ul class="list-unstyled mb-0 text-small">
								<li class="mb-2"><a href="#" class="text-light">Terms and Conditions</a></li>
								<li class="mb-2"><a href="#" class="text-light">Privacy policy</a></li>
								<li class="mb-2"><a href="#" class="text-light">About Us</a></li>
								
							</ul>
							</div>
					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>
			<!-- Copyrights
			============================================= -->
			<div id="copyrights" class="dark">

				<div class="container">

					<div class="row align-items-center justify-content-between">
						<div class="col-md-6 text-white-50">
							Copyrights &copy; 2021 All Rights Reserved by Que Removal.<br>
							
						</div>

						<!--<div class="col-md-6 d-flex justify-content-md-end mt-4 mt-md-0">
							<div class="copyrights-menu copyright-links mb-0 clearfix">
								<a href="#" class="text-white-50">Home</a>/<a href="#" class="text-white-50">About Us</a>/<a href="#" class="text-white-50">Price</a>/<a href="#" class="text-white-50">Contact</a>
							</div>
						</div>-->
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up rounded-circle bg-color h-bg-dark"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="{{asset('js/jquery.js')}}""></script>
	<script src="{{asset('js/plugins.min.js')}}"></script>

	<!-- DatePicker JS -->
	<script src="{{asset('js/components/moment.js')}}"></script>
	<script src="{{asset('js/components/daterangepicker.js')}}"></script>

	<!-- Range Slider Plugin -->
	<script src="{{asset('js/components/rangeslider.min.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->

	<script src="{{asset('mx/ms.js')}}"></script>
	 <script>

		jQuery(document).ready(function() {

			jQuery('.cleaning-date').daterangepicker({
				"buttonClasses": "button button-rounded button-mini nott ls0 font-weight-semibold",
				"applyClass": "button-color m-0 ml-1",
				"cancelClass": "bg-danger m-0 text-light",
				singleDatePicker: true,
				startDate: moment().startOf('hour'),
				minDate: moment().startOf('date'),
				timePicker: true,
				timePickerSeconds: false,
				locale: {
					format: 'DD/MM/YYYY h:mm a',
				},
				timePickerIncrement: 10
			});

			jQuery('.cleaning-date').val('Select Date & Time');

			jQuery('.form-cleaning').on( 'formSubmitSuccess', function(){
				jQuery('.cleaning-date').val('Select Date & Time');
			});

			// Calculator
			var pricingAREA = 0,
				pricingROOMS = 0,
				pricingBATHROOMS = 0,
				pricingLIVINGROOMS = 0,
				pricingOTHERS = 0,
				elementAREA = $(".clean-area"),
				elementROOMS = $(".clean-rooms"),
				elementBATHROOMS = $(".clean-bathrooms"),
				elementLIVINGROOMS = $(".clean-livingrooms"),
				elementOTHERS = $("input[name='clean-form-others[]']"),
				elementPRICE = $("#clean-form-price");

			elementAREA.ionRangeSlider({
				min: 0,
				max: 5000,
				from: 0,
				step: 10,
				max_postfix: "sqft.",
				onStart: function(data){
					pricingAREA = data.from;
				}
			});

			elementAREA.on( 'change', function(){
				pricingAREA = $(this).prop('value');
				calculatePrice( pricingAREA, pricingROOMS, pricingBATHROOMS, pricingLIVINGROOMS, pricingOTHERS );
			});

			elementROOMS.ionRangeSlider({
				min: 0,
				max: 10,
				from: 0,
				step: 1,
				onStart: function(data){
					pricingROOMS = data.from;
				}
			});

			elementROOMS.on( 'onStart change', function(){
				pricingROOMS = $(this).prop('value');
				calculatePrice( pricingAREA, pricingROOMS, pricingBATHROOMS, pricingLIVINGROOMS, pricingOTHERS );
			});

			elementBATHROOMS.ionRangeSlider({
				min: 0,
				max: 10,
				from: 0,
				step: 1,
				onStart: function(data){
					pricingBATHROOMS = data.from;
				}
			});

			elementBATHROOMS.on( 'onStart change', function(){
				pricingBATHROOMS = $(this).prop('value');
				calculatePrice( pricingAREA, pricingROOMS, pricingBATHROOMS, pricingLIVINGROOMS, pricingOTHERS );
			});

			elementLIVINGROOMS.ionRangeSlider({
				min: 0,
				max: 5,
				from: 0,
				step: 1,
				onStart: function(data){
					pricingLIVINGROOMS = data.from;
				}
			});

			elementLIVINGROOMS.on( 'onStart change', function(){
				pricingLIVINGROOMS = $(this).prop('value');
				calculatePrice( pricingAREA, pricingROOMS, pricingBATHROOMS, pricingLIVINGROOMS, pricingOTHERS );
			});

			elementOTHERS.change(function(){
				var pricingOTHERS = 0;
				elementOTHERS.each(function(){
					if($(this).is(':checked')){
						pricingOTHERS += parseFloat($(this).attr('data-price'));
						calculatePrice( pricingAREA, pricingROOMS, pricingBATHROOMS, pricingLIVINGROOMS, pricingOTHERS );
					} else {
						calculatePrice( pricingAREA, pricingROOMS, pricingBATHROOMS, pricingLIVINGROOMS, pricingOTHERS );
					}
				});
			});

			calculatePrice( pricingAREA, pricingROOMS, pricingBATHROOMS, pricingLIVINGROOMS, pricingOTHERS );

			function calculatePrice( area, rooms, bathrooms, livingrooms, extra ) {
				var TotalPriceValue = ( Number(area) * .2 ) + ( Number(rooms) * 4 ) + ( Number(bathrooms) * 3 ) + ( Number(livingrooms) * 5 ) + ( Number(extra) );
				jQuery('.total-price').html( '$'+TotalPriceValue );
				elementPRICE.val( TotalPriceValue ).change();
			}

		});

	</script> 
	@section('jquery')
		
	@show
</body>
</html>