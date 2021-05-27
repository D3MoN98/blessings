@extends('layout.app')


@section('content')

<!-- *************************************
    		*********** Begin body content ***********
    		************************************** -->
<div id="body-content">



    <section id="page-header" class="ph-xlg">

        <div class="cover bg-transparent-5-dark"></div>


        <div class="youtube-bg-wrap ytp-full">
            <!-- Class "ytp-full" is for full cover (depend on parent element size). -->
            <div class="youtube-bg page-header-image parallax-3 bg-dark"
                style="background-image: url({{asset('storage/'.$home->banner_image)}}); background-position: 50% 50%;"
                data-property="{
    							videoURL: '{{$home->banner_video}}',
    							containment: 'self',
    							quality: 'default',
    							startAt: 3,
    							stopAt: 55,
    							autoPlay: true,
    							loop: true,
    							mute: true,
    							showControls: false,
    							showYTLogo: false,
    							realfullscreen: true,
    							addRaster: false,
    							optimizeDisplay: true,
    							stopMovieOnBlur: true
    						}">

            </div> <!-- /.youtube-bg -->
        </div>
        <!-- End YTPlayer (Youtube video background) -->

        <!-- Begin page header inner -->
        <div class="page-header-inner tt-wrap">


            <div class="page-header-caption ph-caption-xlg parallax-5 fade-out-scroll-5">
                <h1 class="page-header-title">{{$home->banner_title}}</h1>
                <hr class="hr-short">

                <!-- Use data attributes to set text maximum characters or words (example: data-max-characters="120" or data-max-words="40") -->
                <div class="page-header-description">
                    <p>{{$home->banner_subtitle}}</p>
                </div>

            </div>
            <!-- End page header caption -->

        </div>
        <!-- End page header inner -->

    </section>
    <!-- End page header -->
    <section class="gallery-list-carousel m-40">
        <div class="gallery-list-slideshow-inner tt-wrap">
            <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->

            <!-- Begin tt-heading -->

            <div class="tt-heading padding-on text-center">
                <div class="tt-heading-inner tt-wrap">
                    <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->
                    <h1 class="tt-heading-title">{{$home->sub_banner_title}}</h1>
                    <div class="tt-heading-subtitle">{{$home->sub_banner_subtitle}}</div>
                    <hr class="hr-short">
                </div>
                <!-- /.tt-heading-inner -->
            </div>
            <!-- End tt-heading -->
            <div class="gl-carousel-wrap no-padding">
                <div class="owl-carousel cc-height-full cursor-grab nav-bottom-right bg-dark cc-hover-zoom"
                    data-items="1" data-loop="true" data-dots="false" data-nav="true" data-animate-in="fadeIn"
                    data-animate-out="fadeOut" data-autoplay="true" data-autoplay-timeout="10000">

                    @foreach ($home_subbanner_photos as $item)

                    <div class="cc-item">
                        <!-- cc image -->
                        <div class="cc-image bg-image"
                            style="background-image: url({{asset('storage/'.$item->image)}}); background-position: 50% 50%;">
                        </div>


                        <div class="cc-caption cc-caption-xxlg bottom-left caption-animate max-width-550">
                            <h2 class="cc-title">
                                @php
                                $cat = $item->photo_categories()->pluck('title', 'slug')->toArray();
                                unset($cat['home-sub-banner']);
                                echo array_values($cat)[0] ?? null;
                                @endphp
                            </h2>
                        </div>
                        <!-- End caption -->
                    </div>

                    @endforeach


                </div>
                <!-- End content carousel -->

            </div> <!-- /.gl-carousel-wrap -->
        </div> <!-- /.gallery-list-carousel-inner -->
    </section>
    <!-- End gallery list section -->

    <section class="gallery-list-carousel glc-no-crop">


        <div class="tt-heading padding-on text-center">
            <div class="tt-heading-inner tt-wrap">
                <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->
                <h1 class="tt-heading-title">{{$home->portfolio_title}}</h1>
                <div class="tt-heading-subtitle">{{$home->portfolio_subtitle}}</div>
                <hr class="hr-short">
            </div>
            <!-- /.tt-heading-inner -->

            <div class="page-background bg-image" style="background-image: url(assets/img/misc/page-bg-1.jpg);">
            </div>
            <!-- End page background -->

            <div class="gallery-list-carousel-inner tt-wrap">
                <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->
                <div class="gl-carousel-wrap">

                    <div class="owl-carousel cc-height-full owl-mousewheel nav-light cc-hover-zoom" data-items="4"
                        data-margin="60" data-dots="false" data-nav="true" data-nav-speed="500" data-autowidth="true"
                        data-tablet-landscape="3" data-tablet-portrait="3" data-mobile-landscape="2"
                        data-mobile-portrait="1">

                        @foreach($portfolio_photos as $item)

                        <a href="#" class="cc-item">
                            <!-- cc auto width img -->
                            <img class="cc-image cc-auto-width-img" src="{{asset('storage/'.$item->image)}}" alt="img">

                            <!-- cc auto width img for small devices -->
                            <div class="cc-image cc-auto-width-img-bg bg-image"
                                style="background-image: url({{asset('storage/'.$item->image)}});"></div>

                            <div class="cc-caption cc-caption-lg bottom-left max-width-400">

                                <h2 class="cc-title">
                                    @php
                                    $cat = $item->photo_categories()->pluck('title', 'slug')->toArray();
                                    unset($cat['portfolio']);
                                    echo array_values($cat)[0] ?? null;
                                    @endphp
                                </h2>
                            </div>
                            <!-- End caption -->
                        </a>

                        @endforeach

                    </div>
                    <!-- End content carousel -->

                </div> <!-- /.gl-carousel-wrap -->
            </div> <!-- /.gallery-list-carousel-inner -->
    </section>
    <!-- End gallery list section -->

    <section class="gallery-list-carousel glc-no-crop">


        <div class="tt-heading padding-on text-center">
            <div class="tt-heading-inner tt-wrap">
                <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->
                <h1 class="tt-heading-title">{{$home->video_title}}</h1>
                <div class="tt-heading-subtitle">{{$home->video_subtitle}}</div>
                <hr class="hr-short">
            </div>
            <!-- /.tt-heading-inner -->

            <div class="page-background bg-image" style="background-image: url(assets/img/misc/page-bg-1.jpg);">
            </div>
            <!-- End page background -->

            <div class="gallery-list-carousel-inner tt-wrap">
                <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->
                <div class="gl-carousel-wrap">

                    <div class="owl-carousel cc-height-full owl-mousewheel nav-light cc-hover-zoom" data-items="4"
                        data-margin="60" data-dots="false" data-nav="true" data-nav-speed="800" data-autowidth="true"
                        data-tablet-landscape="3" data-tablet-portrait="3" data-mobile-landscape="2"
                        data-mobile-portrait="1">

                        <!-- Begin carousel item
    						========================= -->
                        <!-- cc auto width img -->


                        @foreach ($videos as $item)
                        <!-- cc auto width img for small devices -->
                        <div class="cc-imag">

                            <iframe width="100%" height="250"
                                src="{{$item->video != null ? asset('storage/'.$item->video) : $item->url}}"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                        @endforeach

                    </div>
                    <!-- End content carousel -->

                </div> <!-- /.gl-carousel-wrap -->
            </div> <!-- /.gallery-list-carousel-inner -->
    </section>
    <!-- End gallery list section -->


    <!-- End gallery list section -->
    @include('include.footer')
    <!-- End footer section -->

</div>
<!-- End body content -->

@endsection
