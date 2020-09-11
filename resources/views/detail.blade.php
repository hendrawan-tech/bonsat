@extends('layouts.single')

@push('styles')
    <style>
        @media (min-width: 960px) {
            .home_banner_area {
                display: block !important;
                background-size: 65% 100% !important;
				text-align: start !important;
				background-position: 0 100%;
                object-fit: cover;
            }
            .home_banner_area h1 {
                font-size: 85px !important;
                text-align: left !important;
            }
        }
        .home_banner_area {
            display: none;
        }
        .home_banner_area h1 {
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-align: center !important;
            font-size: 50px;
        }
        /* .section-gap {
            padding-top: 20px !important;
        } */
        .image {
            width: 100px;
            height: 60px;
        }
        .image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .img {
            height: 350px;
        }
        .img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
@endpush

@section('content')
    <!--================ Banner Area =================-->
    <section class="home_banner_area banner_area" style="background-image: url('{{asset($detail->image)}}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-5"></div>
                <div class="col-lg-7">
                    <div class="blog_text_slider">
                        <div class="blog_text">
                            <h1 style="background-image: url('{{asset($detail->image)}}') !important;">Detail <br> Postingan</h1>
                            <div class="blog-meta bottom d-flex justify-content-start align-items-center flex-wrap">
                                <div>
                                    <a class="read_more" href="/">Beranda</a>
                                    <span class="lnr lnr-arrow-right"></span>
                                    <a class="read_more" href="/{{$detail->category->slug}}">{{$detail->category->category}}</a>
                                    <span class="lnr lnr-arrow-right"></span>
                                    <a class="read_more" href="#">{{$detail->title}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Banner Area =================-->

    <!--================Blog Area =================-->
    <section class="blog_area section-gap single-post-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="main_blog_details">
                        <div class="img">
                            <img src="{{asset($detail->image)}}" alt="">
                        </div>
                        <h4>{{$detail->title}}</h4>
                        {{-- <img class="img-fluid" src="{{asset('img/blog/news-blog.jpg')}}" alt=""> --}}
                        {{-- <a href="#">
                            <h4>Cartridge Is Better Than Ever <br /> A Discount Toner</h4>
                        </a> --}}
                        <div class="user_details mb-0">
                            <div class="float-left">
                                <div class="media">
                                    <div class="d-flex mr-3">
                                        <img src="{{asset('img/blog/user-img.jpg')}}" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h5>{{$detail->user->name}}</h5>
                                        <p>{{ date('d M, Y', strtotime($detail->created_at)) }}</p>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="float-left">
                                <div class="media">
                                    <div class="media-body">
                                        <h5>{{$detail->user->name}}</h5>
                                        <p class="pt-2">{{ date('d M, Y', strtotime($detail->created_at)) }}</p>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <hr>
                        {!! $detail->description !!}
                        <div class="news_d_footer">
                            <a href="#"><i class="lnr lnr lnr-heart"></i>Lily and 4 people like this</a>
                            <a class="justify-content-center ml-auto" href="#"><i class="lnr lnr lnr-bubble"></i>06
                                Comments</a>
                            <div class="news_socail ml-auto">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-rss"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-3">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Pencarian">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="lnr lnr-magnifier"></i></button>
                                </span>
                            </div><!-- /input-group -->
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Postingan Terbaru</h3>
                            @foreach ($post as $item)
                            <div class="media post_item">
                                <div class="image">
                                    <img src="{{asset($item->image)}}" alt="post">
                                </div>
                                <div class="media-body">
                                    <a href="/{{$item->category->slug}}/{{$item->slug}}">
                                        <h3>{{substr($item->title, 0, 40) . '....'}}</h3>
                                    </a>
                                    <p>{{$item->category->category}}</p>
                                </div>
                            </div>
                            @endforeach
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget newsletter_widget">
                            <h4 class="widget_title">Newsletter</h4>
                            <div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                    method="get" class="subscribe_form relative">
                                    <div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Enter Email '" required="" type="email">
                                        <button class="btn sub-btn">
                                            <span class="lnr lnr-arrow-right"></span>
                                        </button>
                                    </div>
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
@endsection