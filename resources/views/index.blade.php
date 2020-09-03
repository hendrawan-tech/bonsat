@extends('layouts.app')

@push('styles')
    <style>
        @media (min-width: 768px) {
            .home_banner_area .slide-item {
                background-size: 59% 100% !important;
            }
            .home_banner_area .slide-item h1 {
                font-size: 85px !important;
                text-align: left !important;
            }
        }
        .home_banner_area .slide-item h1 {
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-align: center !important;
            font-size: 60px;
        }
    </style>
@endpush

@section('content')
	<!--================ Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="owl-carousel owl-theme" id="home-owl">
			<div class="slide-item owl-lazy" data-src="{{asset($wisata[0]->image)}}">
				<div class="container">
					<div class="row">
						<div class="col-lg-5"></div>
						<div class="col-lg-7">
							<div class="blog_text_slider">
                                <div class="blog_text">
                                    <h1 style="background-image: url('{{asset($wisata[0]->image)}}') !important;">{{$wisata[0]->title}}</h1>
                                    {{-- <img class="img-fluid" src="{{asset($wisata[0]->image)}}" alt=""> --}}
									<div class="blog-meta bottom d-flex justify-content-between align-items-center flex-wrap">
										<div class="meta">
											<span class="icon fa fa-calendar"></span> March 14, 2018
											<span class="icon fa fa-comments"></span> 05
										</div>
										<div>
											<a class="read_more" href="#">Read More</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			{{-- <div class="slide-item owl-lazy" data-src="img/banner/home-banner2.jpg">
				<div class="container">
					<div class="row">
						<div class="col-lg-5"></div>
						<div class="col-lg-7">
							<div class="blog_text_slider">
								<div class="blog_text">
									<img class="img-fluid" src="img/banner/banner-img2.png" alt="">
									<div class="blog-meta bottom d-flex justify-content-between align-items-center flex-wrap">
										<div class="meta">
											<span class="icon fa fa-calendar"></span> March 14, 2018
											<span class="icon fa fa-comments"></span> 05
										</div>
										<div>
											<a class="read_more" href="#">Read More</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="slide-item owl-lazy" data-src="img/banner/home-banner3.jpg">
				<div class="container">
					<div class="row">
						<div class="col-lg-5"></div>
						<div class="col-lg-7">
							<div class="blog_text_slider">
								<div class="blog_text">
									<img class="img-fluid" src="img/banner/banner-img3.png" alt="">
									<div class="blog-meta bottom d-flex justify-content-between align-items-center flex-wrap">
										<div class="meta">
											<span class="icon fa fa-calendar"></span> March 14, 2018
											<span class="icon fa fa-comments"></span> 05
										</div>
										<div>
											<a class="read_more" href="#">Read More</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> --}}
		</div>
	</section>
	<!--================ End Home Banner Area =================-->

	<!--================ Travel Category Area =================-->
	<section class="travel_category">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<h1>Wisata Terbaik <br> Di Kota Bondowoso</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row owl-carousel" id="travel_cat">
				@foreach ($wisata as $item)
                <div class="single_travel wow fadeIn" data-wow-duration="1s">
					<figure>
						<img class="img-fluid" src="{{asset($item->image)}}" alt="">
					</figure>
					<div class="overlay"></div>
					<div class="text-wrap">
						<h3>
							<a href="#">{{$item->title}}</a>
						</h3>
						<div class="blog-meta white d-flex justify-content-between align-items-center flex-wrap">
							<div class="meta">
								<a href="#">
                                    <span class="icon fa fa-calendar"></span> {{ date('d M, Y', strtotime($item->created_at)) }}
									{{-- <span class="icon fa fa-comments"></span> 05 --}}
								</a>
							</div>
							<div>
								<a class="read_more" href="#">Lanjut Baca</a>
							</div>
						</div>
					</div>
				</div>
                @endforeach
			</div>
		</div>
	</section>
	<!--================ End Travel Category Area =================-->

	<!--================ Latest Blog Area =================-->
	<section class="latest_blog_post">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<h1>Berita Terbaru
							<br>Kota Bondowoso</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="single_travel wow fadeInUp" data-wow-duration="1s">
						<figure>
							<img class="img-fluid w-100" src="img/blog-post/b1.jpg" alt="">
						</figure>
						<div class="overlay"></div>
						<div class="text-wrap">
							<h3>
								<a href="#">Waterfall Travel</a>
							</h3>
							<div class="blog-meta white d-flex justify-content-between align-items-center flex-wrap">
								<div class="meta">
									<a href="#">
										<span class="icon fa fa-calendar"></span> March 14, 2018
										<span class="icon fa fa-comments"></span> 05
									</a>
								</div>
								<div>
									<a class="read_more" href="#">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single_travel wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
						<figure>
							<img class="img-fluid w-100" src="img/blog-post/b2.jpg" alt="">
						</figure>
						<div class="overlay"></div>
						<div class="text-wrap">
							<h3>
								<a href="#">Waterfall Mountain Island</a>
							</h3>
							<div class="blog-meta white d-flex justify-content-between align-items-center flex-wrap">
								<div class="meta">
									<a href="#">
										<span class="icon fa fa-calendar"></span> March 14, 2018
										<span class="icon fa fa-comments"></span> 05
									</a>
								</div>
								<div>
									<a class="read_more" href="#">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single_travel wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
						<figure>
							<img class="img-fluid w-100" src="img/blog-post/b3.jpg" alt="">
						</figure>
						<div class="overlay"></div>
						<div class="text-wrap">
							<h3>
								<a href="#">Waterfall Mountain Island</a>
							</h3>
							<div class="blog-meta white d-flex justify-content-between align-items-center flex-wrap">
								<div class="meta">
									<a href="#">
										<span class="icon fa fa-calendar"></span> March 14, 2018
										<span class="icon fa fa-comments"></span> 05
									</a>
								</div>
								<div>
									<a class="read_more" href="#">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="single_travel wow fadeInUp mt--60" data-wow-duration="1s" data-wow-delay=".6s">
						<figure>
							<img class="img-fluid w-100" src="img/blog-post/b4.jpg" alt="">
						</figure>
						<div class="overlay"></div>
						<div class="text-wrap">
							<h3>
								<a href="#">Waterfall Mountain Island</a>
							</h3>
							<div class="blog-meta white d-flex justify-content-between align-items-center flex-wrap">
								<div class="meta">
									<a href="#">
										<span class="icon fa fa-calendar"></span> March 14, 2018
										<span class="icon fa fa-comments"></span> 05
									</a>
								</div>
								<div>
									<a class="read_more" href="#">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="single_travel wow fadeInUp mt--60" data-wow-duration="1s" data-wow-delay=".8s">
						<figure>
							<img class="img-fluid w-100" src="img/blog-post/b5.jpg" alt="">
						</figure>
						<div class="overlay"></div>
						<div class="text-wrap">
							<h3>
								<a href="#">Waterfall Mountain Island</a>
							</h3>
							<div class="blog-meta white d-flex justify-content-between align-items-center flex-wrap">
								<div class="meta">
									<a href="#">
										<span class="icon fa fa-calendar"></span> March 14, 2018
										<span class="icon fa fa-comments"></span> 05
									</a>
								</div>
								<div>
									<a class="read_more" href="#">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-6 col-md-12">
					<div class="single_travel wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
						<figure>
							<img class="img-fluid w-100" src="img/blog-post/b6.jpg" alt="">
						</figure>
						<div class="overlay"></div>
						<div class="text-wrap">
							<h3>
								<a href="#">Waterfall Travel</a>
							</h3>
							<div class="blog-meta white d-flex justify-content-between align-items-center flex-wrap">
								<div class="meta">
									<a href="#">
										<span class="icon fa fa-calendar"></span> March 14, 2018
										<span class="icon fa fa-comments"></span> 05
									</a>
								</div>
								<div>
									<a class="read_more" href="#">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="offset-lg-7 col-lg-4">
					<div class="blog-meta bottom d-flex justify-content-end align-items-center">
						<div>
							<a class="read_more" href="#">Load More Posts</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Latest Blog Area =================-->

	<!--================ Places Area =================-->
	<section class="different_places">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<h1>Let Us Find Your Places Within a Sec.</h1>
						<p>
							There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s
							exciting to think
							about setting up your own viewing station.
						</p>
					</div>
				</div>
			</div>
		</div>

		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="single_place wow fadeIn text-center mt-480" data-wow-duration="1s">
						<img class="img-fluid w-100" src="img/places/p1.jpg" alt="">
						<div class="overlay"></div>
						<h4>Waterfall
							<br> Mountain Island</h4>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single_place wow fadeIn text-center mt-240" data-wow-duration="1s" data-wow-delay=".2s">
						<img class="img-fluid w-100" src="img/places/p2.jpg" alt="">
						<div class="overlay"></div>
						<h4>Waterfall
							<br> Mountain Island</h4>
					</div>
					<div class="single_place wow fadeIn text-center" data-wow-duration="1s" data-wow-delay="1s">
						<img class="img-fluid w-100" src="img/places/p3.jpg" alt="">
						<div class="overlay"></div>
						<h4>Waterfall
							<br> Mountain Island</h4>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single_place wow fadeIn text-center" data-wow-duration="1s" data-wow-delay=".4s">
						<img class="img-fluid w-100" src="img/places/p4.jpg" alt="">
						<div class="overlay"></div>
						<h4>Waterfall
							<br> Mountain Island</h4>
					</div>
					<div class="single_place wow fadeIn text-center" data-wow-duration="1s" data-wow-delay=".8s">
						<img class="img-fluid w-100" src="img/places/p5.jpg" alt="">
						<div class="overlay"></div>
						<h4>Waterfall
							<br> Mountain Island</h4>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single_place wow fadeIn text-center mt-240" data-wow-duration="1s" data-wow-delay=".6s">
						<img class="img-fluid w-100" src="img/places/p6.jpg" alt="">
						<div class="overlay"></div>
						<h4>Waterfall
							<br> Mountain Island</h4>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Places Area =================-->

	<!--================ Popular Post Area =================-->
	<section class="popular_post">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<h1>Popular <br> Posts to Remember</h1>
						<p>
							There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s
							exciting to think
							about setting up your own viewing station.
						</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-popular-post d-flex align-items-center flex-row">
						<div class="icon">
							<img src="img/popular-post/p1.jpg" alt="">
						</div>
						<div class="desc">
							<h4>
								<a href="#">Waterfall Mountain Visit</a>
							</h4>
							<div class="blog-meta d-flex justify-content-between align-items-center flex-wrap">
								<div class="meta">
									<a href="#">
										<span class="icon fa fa-calendar"></span> March 14, 2018
										<span class="icon fa fa-comments"></span> 05
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="single-popular-post d-flex align-items-center flex-row">
						<div class="icon">
							<img src="img/popular-post/p2.jpg" alt="">
						</div>
						<div class="desc">
							<h4>
								<a href="#">Waterfall Mountain Visit</a>
							</h4>
							<div class="blog-meta d-flex justify-content-between align-items-center flex-wrap">
								<div class="meta">
									<a href="#">
										<span class="icon fa fa-calendar"></span> March 14, 2018
										<span class="icon fa fa-comments"></span> 05
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="single-popular-post d-flex align-items-center flex-row">
						<div class="icon">
							<img src="img/popular-post/p3.jpg" alt="">
						</div>
						<div class="desc">
							<h4>
								<a href="#">Waterfall Mountain Visit</a>
							</h4>
							<div class="blog-meta d-flex justify-content-between align-items-center flex-wrap">
								<div class="meta">
									<a href="#">
										<span class="icon fa fa-calendar"></span> March 14, 2018
										<span class="icon fa fa-comments"></span> 05
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="single-popular-post d-flex align-items-center flex-row">
						<div class="icon">
							<img src="img/popular-post/p4.jpg" alt="">
						</div>
						<div class="desc">
							<h4>
								<a href="#">Waterfall Mountain Visit</a>
							</h4>
							<div class="blog-meta d-flex justify-content-between align-items-center flex-wrap">
								<div class="meta">
									<a href="#">
										<span class="icon fa fa-calendar"></span> March 14, 2018
										<span class="icon fa fa-comments"></span> 05
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="single-popular-post d-flex align-items-center flex-row">
						<div class="icon">
							<img src="img/popular-post/p5.jpg" alt="">
						</div>
						<div class="desc">
							<h4>
								<a href="#">Waterfall Mountain Visit</a>
							</h4>
							<div class="blog-meta d-flex justify-content-between align-items-center flex-wrap">
								<div class="meta">
									<a href="#">
										<span class="icon fa fa-calendar"></span> March 14, 2018
										<span class="icon fa fa-comments"></span> 05
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="single-popular-post d-flex align-items-center flex-row">
						<div class="icon">
							<img src="img/popular-post/p6.jpg" alt="">
						</div>
						<div class="desc">
							<h4>
								<a href="#">Waterfall Mountain Visit</a>
							</h4>
							<div class="blog-meta d-flex justify-content-between align-items-center flex-wrap">
								<div class="meta">
									<a href="#">
										<span class="icon fa fa-calendar"></span> March 14, 2018
										<span class="icon fa fa-comments"></span> 05
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="single-popular-post d-flex align-items-center flex-row">
						<div class="icon">
							<img src="img/popular-post/p7.jpg" alt="">
						</div>
						<div class="desc">
							<h4>
								<a href="#">Waterfall Mountain Visit</a>
							</h4>
							<div class="blog-meta d-flex justify-content-between align-items-center flex-wrap">
								<div class="meta">
									<a href="#">
										<span class="icon fa fa-calendar"></span> March 14, 2018
										<span class="icon fa fa-comments"></span> 05
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="single-popular-post d-flex align-items-center flex-row">
						<div class="icon">
							<img src="img/popular-post/p8.jpg" alt="">
						</div>
						<div class="desc">
							<h4>
								<a href="#">Waterfall Mountain Visit</a>
							</h4>
							<div class="blog-meta d-flex justify-content-between align-items-center flex-wrap">
								<div class="meta">
									<a href="#">
										<span class="icon fa fa-calendar"></span> March 14, 2018
										<span class="icon fa fa-comments"></span> 05
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="single-popular-post d-flex align-items-center flex-row">
						<div class="icon">
							<img src="img/popular-post/p9.jpg" alt="">
						</div>
						<div class="desc">
							<h4>
								<a href="#">Waterfall Mountain Visit</a>
							</h4>
							<div class="blog-meta d-flex justify-content-between align-items-center flex-wrap">
								<div class="meta">
									<a href="#">
										<span class="icon fa fa-calendar"></span> March 14, 2018
										<span class="icon fa fa-comments"></span> 05
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Popular Post Area =================-->

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
@endsection