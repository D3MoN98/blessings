@extends('layout.landing')

@section('content')
<div id="body-content">


    <!-- ==========================
        ///// Begin intro section /////
        =========================== -->
    <section id="tt-intro" class="gallery-list-carousel slideshow-intro">
        <div class="tt-intro-inner tt-wrap">
            <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->
            <div class="gl-carousel-wrap no-padding">


                <div class="owl-carousel cc-height-full cursor-grab bg-dark" data-items="1" data-loop="true"
                    data-autoplay="true" data-autoplay-timeout="8000" data-nav="true" data-animate-in="fadeIn"
                    data-animate-out="fadeOut">

                    <!-- Begin carousel item
                        ========================= -->
                    @foreach ($landing_photos as $item)
                    <div class="cc-item">

                        <!-- cc image -->
                        <div class="cc-image bg-image"
                            style="background-image: url({{asset('storage/'.$item->image)}}); background-position: 50% 50%;">
                        </div>

                        <!-- Element cover -->
                        <div class="intro-caption caption-animate intro-caption-xxlg center">

                            <div class="pointr_inn">
                                <ul>
                                    <li><a href="{{route('home')}}" data-toggle="tooltip" data-placement="top"
                                            title="Blasings"><img src="{{asset('assets/img/b_logo2.png')}}"></a></li>

                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Partha Dam"><img
                                                src="assets/img/partha-logo.png"></a></li>
                                </ul>
                            </div>

                        </div>
                        <!-- End intro caption -->
                    </div>

                    @endforeach
                    <!-- End carousel item -->

                </div>
                <!-- End content carousel -->


            </div> <!-- /.gl-carousel-wrap -->



        </div> <!-- /.tt-intro-inner -->

    </section>
    <!-- End intro section -->



</div>
@endsection
