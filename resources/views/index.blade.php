@extends('layouts.app')

@push('styles')
    <style>
        @media (min-width: 960px) {
            .home_banner_area .slide-item {
                background-size: 59% 100% !important;
				text-align: start !important;
				background-position: 0 100%;
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
            font-size: 50px;
        }
        .travel_category .container-fluid::after,
        .latest_blog_post .container-fluid::after,
        .single-popular-post {
            background-color: #000000dc !important;
        }
    </style>
@endpush

@section('content')
	<!--================ Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="owl-carousel owl-theme" id="home-owl">
			@foreach ($wisata as $item)
			<div class="slide-item owl-lazy" data-src="{{asset($item->image)}}">
				<div class="container">
					<div class="row">
						<div class="col-lg-5"></div>
						<div class="col-lg-7">
							<div class="blog_text_slider">
                                <div class="blog_text">
                                    <h1 style="background-image: url('{{asset($item->image)}}') !important;">{{$item->title}}</h1>
                                    {{-- <img class="img-fluid" src="{{asset($wisata[0]->image)}}" alt=""> --}}
									<div class="blog-meta bottom d-flex justify-content-between align-items-center flex-wrap">
										<div class="meta">
											<span class="icon fa fa-calendar"></span> {{ date('d M, Y', strtotime($item->created_at)) }}
											{{-- <span class="icon fa fa-comments"></span> 05 --}}
										</div>
										<div>
											<a class="read_more" href="/{{$item->category->slug}}/{{$item->slug}}">Lanjut Baca</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
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
							<a href="/{{$item->category->slug}}/{{$item->slug}}">{{$item->title}}</a>
						</h3>
						<div class="blog-meta white d-flex justify-content-between align-items-center flex-wrap">
							<div class="meta">
								<a href="#">
                                    <span class="icon fa fa-calendar"></span> {{ date('d M, Y', strtotime($item->created_at)) }}
									{{-- <span class="icon fa fa-comments"></span> 05 --}}
								</a>
							</div>
							<div>
								<a class="read_more" href="/{{$item->category->slug}}/{{$item->slug}}">Lanjut Baca</a>
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
						<h1>Berita Terbaru<br>Kota Bondowoso</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
                @for ($i = 0; $i < sizeof($berita); $i++)

                    @if ($i == 0)
                    <div class="col-lg-6 col-md-12">
                        <div class="single_travel wow fadeInUp" data-wow-duration="1s">
                            <figure style="height: 258px;">
                                <img style="object-fit: cover;" class="img-fluid w-100" src="{{$berita[0]->image}}" alt="">
                            </figure>
                            <div class="overlay"></div>
                            <div class="text-wrap">
                                <h3>
                                    <a href="/{{$berita[0]->category->slug}}/{{$berita[0]->slug}}">{{$berita[0]->title}}</a>
                                </h3>
                                <div class="blog-meta white d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="meta">
                                        <a href="#">
                                            <span class="icon fa fa-calendar"></span> {{ date('d M, Y', strtotime($berita[0]->created_at)) }}
                                            {{-- <span class="icon fa fa-comments"></span> 05 --}}
                                        </a>
                                    </div>
                                    <div>
                                        <a class="read_more" href="/{{$berita[0]->category->slug}}/{{$berita[0]->slug}}">Lanjut Baca</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    
                    @if ($i == 1)
                    <div class="col-lg-3 col-md-6">
                        <div class="single_travel wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                            <figure style="height: 302px">
                                <img style="object-fit: cover;" class="img-fluid w-100" src="{{$berita[1]->image}}" alt="">
                            </figure>
                            <div class="overlay"></div>
                            <div class="text-wrap">
                                <h3>
                                    <a href="/{{$berita[1]->category->slug}}/{{$berita[1]->slug}}">{{substr($berita[1]->title, 0, 40) . '....'}}</a>
                                </h3>
                                <div class="blog-meta white d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="meta">
                                        <a href="/{{$berita[1]->category->slug}}/{{$berita[1]->slug}}">
                                            <span class="icon fa fa-calendar"></span> {{ date('d M, Y', strtotime($berita[1]->created_at)) }}
                                            {{-- <span class="icon fa fa-comments"></span> 05 --}}
                                        </a>
                                    </div>
                                    <div>
                                        <a class="read_more" href="/{{$berita[1]->category->slug}}/{{$berita[1]->slug}}">Lanjut Baca</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    @if ($i == 2)
                    <div class="col-lg-3 col-md-6">
                        <div class="single_travel wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                            <figure style="height: 302px">
                                <img style="object-fit: cover;" class="img-fluid w-100" src="{{$berita[2]->image}}" alt="">
                            </figure>
                            <div class="overlay"></div>
                            <div class="text-wrap">
                                <h3>
                                    <a href="/{{$berita[2]->category->slug}}/{{$berita[2]->slug}}">{{substr($berita[2]->title, 0, 40) . '....'}}</a>
                                </h3>
                                <div class="blog-meta white d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="meta">
                                        <a href="#">
                                            <span class="icon fa fa-calendar"></span> {{ date('d M, Y', strtotime($berita[2]->created_at)) }}
                                            {{-- <span class="icon fa fa-comments"></span> 05 --}}
                                        </a>
                                    </div>
                                    <div>
                                        <a class="read_more" href="/{{$berita[2]->category->slug}}/{{$berita[2]->slug}}">Lanjut Baca</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    @if ($i == 3)
                    <div class="col-lg-3 col-md-6">
                        <div class="single_travel wow fadeInUp mt--60" data-wow-duration="1s" data-wow-delay=".6s">
                            <figure style="height: 302px">
                                <img style="object-fit: cover;" class="img-fluid w-100" src="{{$berita[3]->image}}" alt="">
                            </figure>
                            <div class="overlay"></div>
                            <div class="text-wrap">
                                <h3>
                                    <a href="/{{$berita[3]->category->slug}}/{{$berita[3]->slug}}">{{$berita[3]->title}}</a>
                                </h3>
                                <div class="blog-meta white d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="meta">
                                        <a href="#">
                                            <span class="icon fa fa-calendar"></span> {{ date('d M, Y', strtotime($berita[3]->created_at)) }}
                                            {{-- <span class="icon fa fa-comments"></span> 05 --}}
                                        </a>
                                    </div>
                                    <div>
                                        <a class="read_more" href="/{{$berita[3]->category->slug}}/{{$berita[3]->slug}}">Lanjut Baca</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    @if ($i == 4)
                    <div class="col-lg-3 col-md-6">
                        <div class="single_travel wow fadeInUp mt--60" data-wow-duration="1s" data-wow-delay=".8s">
                            <figure style="height: 302px">
                                <img style="object-fit: cover;" class="img-fluid w-100" src="{{$berita[4]->image}}" alt="">
                            </figure>
                            <div class="overlay"></div>
                            <div class="text-wrap">
                                <h3>
                                    <a href="/{{$berita[4]->category->slug}}/{{$berita[4]->slug}}">{{substr($berita[4]->title, 0, 40) . '....'}}</a>
                                </h3>
                                <div class="blog-meta white d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="meta">
                                        <a href="#">
                                            <span class="icon fa fa-calendar"></span> {{ date('d M, Y', strtotime($berita[4]->created_at)) }}
                                            {{-- <span class="icon fa fa-comments"></span> 05 --}}
                                        </a>
                                    </div>
                                    <div>
                                        <a class="read_more" href="/{{$berita[4]->category->slug}}/{{$berita[4]->slug}}">Lanjut Baca</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    @if ($i == 5)
                    <div class="col-lg-6 col-md-12">
                        <div class="single_travel wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                            <figure style="height: 258px">
                                <img style="object-fit: cover;" class="img-fluid w-100" src="{{$berita[5]->image}}" alt="">
                            </figure>
                            <div class="overlay"></div>
                            <div class="text-wrap">
                                <h3>
                                    <a href="/{{$berita[5]->category->slug}}/{{$berita[5]->slug}}">{{$berita[5]->title, 0, 40}}</a>
                                </h3>
                                <div class="blog-meta white d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="meta">
                                        <a href="#">
                                            <span class="icon fa fa-calendar"></span> {{ date('d M, Y', strtotime($berita[5]->created_at)) }}
                                            {{-- <span class="icon fa fa-comments"></span> 05 --}}
                                        </a>
                                    </div>
                                    <div>
                                        <a class="read_more" href="/{{$berita[5]->category->slug}}/{{$berita[5]->slug}}">Lanjut Baca</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                @endfor
			</div>
			<div class="row">
				<div class="offset-lg-7 col-lg-4">
					<div class="blog-meta bottom d-flex justify-content-end align-items-center">
						<div>
							<a class="read_more text-white" href="/berita">Semua Berita</a>
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
						<h1>Galeri</h1>
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
				@for ($i = 0; $i < sizeof($galeri); $i++)
				<div class="col-lg-3 col-md-6">
					@if ($i == 0)
						<div class="single_place wow fadeIn text-center mt-480" data-wow-duration="1s">
							<img class="img-fluid w-100" src="{{asset($galeri[0]->image)}}" alt="">
							<div class="overlay"></div>
							<h4>{{$galeri[0]->title}}</h4>
						</div>
					@endif
				</div>
				<div class="col-lg-3 col-md-6">
					@if ($i == 1)
						<div class="single_place wow fadeIn text-center mt-240" data-wow-duration="1s" data-wow-delay=".2s">
							<img class="img-fluid w-100" src="{{asset($galeri[1]->image)}}" alt="">
							<div class="overlay"></div>
							<h4>{{$galeri[1]->title}}</h4>
						</div>
					@endif
					@if ($i == 2)
						<div class="single_place wow fadeIn text-center" data-wow-duration="1s" data-wow-delay="1s">
							<img class="img-fluid w-100" src="{{asset($galeri[2]->image)}}" alt="">
							<div class="overlay"></div>
							<h4>{{$galeri[2]->title}}</h4>
						</div>
					@endif
				</div>
				<div class="col-lg-3 col-md-6">
					@if ($i == 3)
						<div class="single_place wow fadeIn text-center" data-wow-duration="1s" data-wow-delay=".4s">
							<img class="img-fluid w-100" src="{{asset($galeri[3]->image)}}" alt="">
							<div class="overlay"></div>
							<h4>{{$galeri[3]->title}}</h4>
						</div>
					@endif
					@if ($i == 4)
						<div class="single_place wow fadeIn text-center" data-wow-duration="1s" data-wow-delay=".8s">
							<img class="img-fluid w-100" src="{{asset($galeri[4]->image)}}" alt="">
							<div class="overlay"></div>
							<h4>{{$galeri[4]->title}}</h4>
						</div>
					@endif
				</div>
				<div class="col-lg-3 col-md-6">
					@if ($i == 5)
						<div class="single_place wow fadeIn text-center mt-240" data-wow-duration="1s" data-wow-delay=".6s">
							<img class="img-fluid w-100" src="{{asset($galeri[5]->image)}}" alt="">
							<div class="overlay"></div>
							<h4>{{$galeri[5]->title}}</h4>
						</div>
					@endif
				</div>
				@endfor
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
						<h1>Kuliner <br>Di Bondowoso</h1>
						{{-- <p>
							There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s
							exciting to think
							about setting up your own viewing station.
						</p> --}}
					</div>
				</div>
			</div>

			<div class="row">
				@foreach ($kuliner as $kuliner)
					<div class="col-lg-4 col-md-6">
					<div class="single-popular-post d-flex align-items-center flex-row">
						<div class="icon">
							<div class="image" style="width: 110px; height: 120px;">
								<img src="{{asset($kuliner->image)}}" alt="" style="width: 100%; height: 100%; object-fit: cover;">
							</div>
						</div>
						<div class="desc">
							<h4>
								<a href="/{{$kuliner->category->slug}}/{{$kuliner->slug}}" class="text-white">{{$kuliner->title}}</a>
							</h4>
							<div class="blog-meta d-flex justify-content-between align-items-center flex-wrap">
								<div class="meta">
									<a href="#" class="text-white-50">
										<span class="icon fa fa-calendar"></span> {{ date('d M, Y', strtotime($kuliner->created_at)) }}
										{{-- <span class="icon fa fa-comments"></span> 05 --}}
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>
	<!--================ End Popular Post Area =================-->
@endsection