<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="{{$general->title}} {!! substr($detail->description, 0, 100) . '...' !!}" />
    <meta name="og:title" content="{{$general->title}} {{$detail->title}}" />
    <meta name="og:description" content="{{$general->title}} {!! substr($detail->description, 0, 100) . '...' !!}" />
    <meta name="og:url" content="https://bondowosomelesat.com" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{$general->title}} - {{$detail->title}}</title>
    <link rel="icon" href="{{asset($general->logo)}}" sizes="16x16" type="image/png">
    
    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
	{{-- <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}"> --}}
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
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
							<ul class="nav navbar-nav menu_nav justify-content-center mx-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="/">Beranda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/wisata">Wisata</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/galeri">Galeri</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/kuliner">Kuliner</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/berita">Berita</a>
                                </li>
                            </ul>
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

    <!--================ start footer Area  =================-->
	<footer class="footer-area section-gap">
		<div class="container">
			<div class="single-footer-widget footer_middle">
				<img src="img/logo.png" alt="">
				<p class="mt-50">Stay updated with our latest trends</p>
				<div id="mc_embed_signup">
					<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
					 method="get" class="subscribe_form relative">
						<div class="input-group d-flex flex-row">
							<input name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
							 required="" type="email">
							<button class="btn sub-btn">
								<span class="lnr lnr-arrow-right"></span>
							</button>
						</div>
						<div class="mt-10 info"></div>
					</form>
				</div>
			</div>
			<div class="footer-bottom footer_copy">
				<div class="footer-social">
					<a href="#">
						<i class="fa fa-facebook"></i>
					</a>
					<a href="#">
						<i class="fa fa-twitter"></i>
					</a>
					<a href="#">
						<i class="fa fa-dribbble"></i>
					</a>
					<a href="#">
						<i class="fa fa-behance"></i>
					</a>
				</div>

				<p class="col-lg-12 footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->

	<!-- ####################### Start Scroll to Top Area ####################### -->
	<div id="back-top">
		<a title="Go to Top" href="#">
			<i class="fa fa-angle-up"></i>
		</a>
	</div>
	<!-- ####################### End Scroll to Top Area ####################### -->

    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
	{{-- <script src="{{asset('js/popper.js')}}"></script> --}}
	{{-- <script src="{{asset('js/bootstrap.min.js')}}"></script> --}}
	{{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> --}}
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
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
