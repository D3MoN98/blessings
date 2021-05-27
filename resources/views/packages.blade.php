@extends('layout.app')

@section('content')
<div id="body-content">

    <section id="page-header" class="ph-lg">

        <!-- Begin page header image
    				=============================
    				* Use class "parallax-bg-1" up to "parallax-bg-6" to enable background image parallax effect.
    				* Use class "fade-out-scroll-3" to enable fade out effect if page scroll.
    				* Use class "hide-ph-image" to hide page header image without removing the code.
    				-->
        <div class="page-header-image parallax-bg-3 bg-image"
            style="background-image: url({{asset('storage/'.$package->banner_image)}});">

            <!-- Element cover
    					===================
    					* You can use prepared background transparent classes depends on brightness of your page header image. More info: file "helper.css".
    					-->
            <div class="cover bg-transparent-5-dark"></div>

        </div>
        <!-- End page header image -->

        <!-- Begin page header inner -->
        <div class="page-header-inner tt-wrap">

            <!-- Begin page header caption
    					===============================
    					* Use classes "ph-caption-xs", "ph-caption-sm", "ph-caption-lg" or "ph-caption-xlg" to set page header size.
    					* Use class "parallax-1" up to "parallax-6" to enable parallax effect.
    					* Use class "fade-out-scroll-1" up to "fade-out-scroll-6" to enable fade out effect if page scroll.
    					-->
            <div class="page-header-caption ph-caption-lg parallax-4 fade-out-scroll-3">
                <h1 class="page-header-title">{{$package->banner_title}}</h1>
                <hr class="hr-short">
                <div class="page-header-description">
                    <p>{{$package->banner_subtitle}}</p>
                </div>

            </div>
            <!-- End page header caption -->

        </div>
        <!-- End page header inner -->

    </section>
    <!-- End page header -->


    <!-- ===========================
    			///// Begin prices section /////
    			============================ -->
    <section id="prices-section">

        <!-- Begin tt-heading
    				======================
    				* Use class "padding-on" to enable heading paddings (useful if you use tt-heading as stand alone element).
    				* Use class "text-center" or "text-right" to align tt-heading.
    				* Use classes "tt-heading-xs", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set tt-heading size.
    				-->
        <div class="tt-heading padding-on">
            <div class="tt-heading-inner tt-wrap">
                <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->

                <div class="row">
                    <div class="col-md-4">

                        <h1 class="tt-heading-title">{{$package->sub_banner_title}}</h1>
                        <!-- <div class="tt-heading-subtitle">Subtitle Here</div> -->
                        <hr class="hr-short">

                    </div> <!-- /.col -->

                    <div class="col-md-8">
                        {!!$package->sub_banner_content!!}
                    </div> <!-- /.col -->
                </div> <!-- /.row -->

            </div> <!-- /.tt-heading-inner -->
        </div>
        <!-- End tt-heading -->

        <div class="prices-section-inner tt-wrap">
            <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->

            <!-- Begin price boxes container
    					================================= -->
            <div class="price-boxes-container margin-bottom-80">
                <div class="row">


                    @if ($package->package_one_active)
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                        <!-- Begin price box -->
                        <div class="price-box">
                            <div class="pr-box price-heading bg-image"
                                style="background-image: url(assets/img/misc/price-box-4.jpg);">
                                <div class="price-heading-inner">
                                    <i class="fas fa-gem"></i>
                                    <h3 class="price-title">{{$package->package_one_title}}</h3>
                                    <div class="price-heading-text">{{$package->package_one_subtitle}}</div>
                                </div>
                            </div>
                            <div class="pr-box price-box-price">
                                <div class="price"><span class="price-currency">₹</span>{{$package->package_one_price}}
                                </div>
                                <!-- <div class="price-tenure">Per 1 Year</div> -->
                            </div>
                            <div class="pr-box price-features">
                                {!!$package->package_one_content!!}
                            </div>
                            <div class="pr-box">
                                <a href="{{route('contact-us')}}" class="btn btn-price-box btn-dark btn-lg">Book Now</a>

                            </div>
                        </div>
                        <!-- End price box -->
                    </div> <!-- /.col -->
                    @endif

                    @if ($package->package_one_active)
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                        <!-- Begin price box -->
                        <div class="price-box">
                            <div class="pr-box price-heading bg-image"
                                style="background-image: url(assets/img/misc/price-box-4.jpg);">
                                <div class="price-heading-inner">
                                    <i class="fas fa-gem"></i>
                                    <h3 class="price-title">{{$package->package_two_title}}</h3>
                                    <div class="price-heading-text">{{$package->package_two_subtitle}}</div>
                                </div>
                            </div>
                            <div class="pr-box price-box-price">
                                <div class="price"><span class="price-currency">₹</span>{{$package->package_two_price}}
                                </div>
                                <!-- <div class="price-tenure">Per 1 Year</div> -->
                            </div>
                            <div class="pr-box price-features">
                                {!!$package->package_two_content!!}
                            </div>
                            <div class="pr-box">
                                <a href="{{route('contact-us')}}" class="btn btn-price-box btn-dark btn-lg">Book Now</a>

                            </div>
                        </div>
                        <!-- End price box -->
                    </div> <!-- /.col -->
                    @endif

                    @if ($package->package_one_active)
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                        <!-- Begin price box -->
                        <div class="price-box">
                            <div class="pr-box price-heading bg-image"
                                style="background-image: url(assets/img/misc/price-box-4.jpg);">
                                <div class="price-heading-inner">
                                    <i class="fas fa-gem"></i>
                                    <h3 class="price-title">{{$package->package_three_title}}</h3>
                                    <div class="price-heading-text">{{$package->package_three_subtitle}}</div>
                                </div>
                            </div>
                            <div class="pr-box price-box-price">
                                <div class="price"><span
                                        class="price-currency">₹</span>{{$package->package_three_price}}</div>
                                <!-- <div class="price-tenure">Per 1 Year</div> -->
                            </div>
                            <div class="pr-box price-features">
                                {!!$package->package_three_content!!}
                            </div>
                            <div class="pr-box">
                                <a href="{{route('contact-us')}}" class="btn btn-price-box btn-dark btn-lg">Book Now</a>

                            </div>
                        </div>
                        <!-- End price box -->
                    </div> <!-- /.col -->
                    @endif
                </div> <!-- /.row -->


            </div>
            <!-- End price boxes container -->

        </div> <!-- /.prices-section-inner -->
    </section>
    <!-- End prices section -->



    <!-- End latest work cection -->


    @include('include.footer')

</div>
@endsection
