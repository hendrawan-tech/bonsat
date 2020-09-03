<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="{{$general->title}} {{$general->tagline}}" />
    <meta name="og:title" content="{{$general->title}}" />
    <meta name="og:description" content="{{$general->title}} {{$general->tagline}}" />
    <meta name="og:url" content="https://bondowosomelesat.com" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $general->title }} - {{ $general->tagline }}</title>
    <link rel="icon" href="{{asset($general->logo)}}" sizes="16x16" type="image/png">
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('vendors/linericon/style.css')}}">
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('vendors/owl-carousel/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('vendors/lightbox/simpleLightbox.css')}}">
	<link rel="stylesheet" href="{{asset('vendors/nice-select/css/nice-select.css')}}">
	<link rel="stylesheet" href="{{asset('vendors/animate-css/animate.css')}}">
	<link rel="stylesheet" href="{{asset('vendors/jquery-ui/jquery-ui.css')}}">
	<!-- main css -->
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    @stack('styles')
    
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>
<body>

    <!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html">
						<img src="{{asset($general->logo)}}" width="70">
                    </a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-center mx-auto">
							<li class="nav-item">
								<a class="nav-link" href="index.html">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="category.html">Category</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="archive.html">Archive</a>
							</li>
							<li class="nav-item submenu dropdown active">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Pages</a>
								<ul class="dropdown-menu">
									<li class="nav-item">
										<a class="nav-link" href="elements.html">Elements</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="single-blog.html">Post Details</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="contact.html">Contact</a>
							</li>
						</ul>
						<ul class="nav navbar-nav ml-auto search">
                            <li class="nav-item d-flex align-items-center mr-10">
                                <div class="menu-form">
                                    <form>
                                        <div class="form-group">
                                            <input type="text" style="min-width: 307px !important;" class="form-control" placeholder="Search here">
                                        </div>
                                    </form>
                                </div>
                                <button type="submit" class="search-icon">
                                    <i class="lnr lnr-magnifier"></i>
                                </button>
                            </li>
                        </ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ Header Menu Area =================-->
    
    @yield('content')

    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('js/popper.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/stellar.js')}}"></script>
	<script src="{{asset('vendors/lightbox/simpleLightbox.min.js')}}"></script>
	<script src="{{asset('vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{asset('vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
	<script src="{{asset('vendors/isotope/isotope-min.js')}}"></script>
	<script src="{{asset('vendors/owl-carousel/owl.carousel.min.js')}}"></script>
	<script src="{{asset('vendors/jquery-ui/jquery-ui.js')}}"></script>
	<script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{asset('js/mail-script.js')}}"></script>
	<script src="{{asset('js/wow.min.js')}}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="{{asset('js/theme.js')}}"></script>
</body>
</html>
