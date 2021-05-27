@extends('layout.app')

@section('content')

<div id="body-content">


    <!-- ========================
			///// Begin page header /////
			=============================
			* Use classes "ph-xs", "ph-sm", "ph-lg" or "ph-xlg" to set page header size.
			* Use class "ph-center" or "ph-right" to align page header caption.
			-->
    <section id="page-header" class="ph-xlg bg-transparent">

        <!-- Begin page header image
				=============================
				* Use class "parallax-bg-1" up to "parallax-bg-6" to enable background image parallax effect.
				* Use class "fade-out-scroll-3" to enable fade out effect if page scroll.
				* Use class "hide-ph-image" to hide page header image without removing the code.
				-->
        <div class="page-header-image parallax-bg-3 bg-image"
            style="background-image: url({{asset('storage/'.$about->banner_image)}});">

            <!-- Element cover
					===================
					* You can use prepared background transparent classes depends on brightness of your page header image. More info: file "helper.css".
					-->
            <div class="cover bg-transparent-4-dark"></div>

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
            <div class="page-header-caption ph-caption-xlg parallax-4 fade-out-scroll-3">
                <h1 class="page-header-title">{{$about->banner_title}}</h1>
                <hr class="hr-short">

                <!-- Use data attributes to set text maximum characters or words (example: data-max-characters="120" or data-max-words="40") -->
                <div class="page-header-description" data-max-words="40">
                    {{$about->banner_subtitle}}
                </div>

            </div>
            <!-- End page header caption -->

        </div>
        <!-- End page header inner -->

    </section>
    <!-- End page header -->


    <!-- =============================
			///// Begin about me section /////
			============================== -->
    <section id="about-me-section">
        <div class="about-me-inner">
            <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->

            <!-- ======================
					///// Begin split box /////
					based on: http://www.minimit.com/articles/solutions-tutorials/bootstrap-3-responsive-columns-of-same-height
					======================= -->
            <div class="split-box about-me">
                <div class="container-fluid">
                    <div class="row">
                        <div class="row-lg-height">

                            <!-- Column -->
                            <div class="col-lg-6 col-lg-height split-box-image no-padding bg-image"
                                style="background-image: url({{asset('storage/',$about->who_i_am_image)}}); background-position: 50% 50%;">

                                <!-- Split box image height
										============================
										* You can use prepared "padding-height-*" helper classes to set split box image height. Example: "padding-height-85" (useful if "split-box-content" contend/text is very short). Also you can use class "full-height-vh" for full height image. Find out "helper.css" file for more info. Note: class "sbi-height" is required.
										-->
                                <div class="sbi-height padding-height-85"></div>

                            </div> <!-- /.col -->

                            <!-- Column -->
                            <div class="col-lg-6 col-lg-height col-lg-middle no-padding">

                                <!-- Begin split box content
										=============================
										* Use class "shifted-left" or "shifted-right" to enable shifted content (do not use for long content).
										-->
                                <div class="split-box-content sb-content-right">

                                    <!-- Begin tt-heading
											======================
											* Use class "padding-on" to enable heading paddings (useful if you use tt-heading as stand alone element).
											* Use class "text-center" or "text-right" to align tt-heading.
											* Use classes "tt-heading-xs", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set tt-heading size.
											-->
                                    <div class="tt-heading">
                                        <div class="tt-heading-inner">
                                            <h1 class="tt-heading-title">{{$about->who_i_am_title}}</h1>
                                            <div class="tt-heading-subtitle">{{$about->who_i_am_subtitle}}</div>
                                            <hr class="hr-short">
                                        </div> <!-- /.tt-heading-inner -->
                                    </div>
                                    <!-- End tt-heading -->

                                    <div class="margin-top-30">
                                        {!!$about->who_i_am_content!!}
                                    </div>

                                    <!-- Begin signature -->
                                    <div class="signature">
                                        <img class="signature-dark" src="{{asset('storage/'.$about->signature)}}"
                                            alt="">
                                        <img class="signature-light" src="{{asset('storage/'.$about->signature)}}"
                                            alt="">
                                    </div>
                                    <!-- End signature -->

                                </div>
                                <!-- End split box content -->

                            </div> <!-- /.col -->

                        </div> <!-- /.row-height -->

                        <!-- Column -->
                        <div class="col-lg-6 col-lg-height col-lg-middle no-padding">

                            <!-- Begin split box content
										=============================
										* Use class "shifted-left" or "shifted-right" to enable shifted content (do not use for long content).
										-->
                            <div class="split-box-content sb-content-right">

                                <!-- Begin tt-heading
											======================
											* Use class "padding-on" to enable heading paddings (useful if you use tt-heading as stand alone element).
											* Use class "text-center" or "text-right" to align tt-heading.
											* Use classes "tt-heading-xs", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set tt-heading size.
											-->
                                <div class="tt-heading">
                                    <div class="tt-heading-inner">
                                        <h1 class="tt-heading-title">{{$about->our_mission_title}}</h1>
                                        <div class="tt-heading-subtitle">{{$about->our_mission_subtitle}}</div>
                                        <hr class="hr-short">
                                    </div> <!-- /.tt-heading-inner -->
                                </div>
                                <!-- End tt-heading -->

                                <div class="margin-top-30">
                                    {!!$about->our_mission_content!!}
                                </div>



                            </div>
                            <!-- End split box content -->

                        </div> <!-- /.col -->
                        <!-- Column -->
                        <div class="col-lg-6 col-lg-height col-lg-middle no-padding">

                            <!-- Begin split box content
										=============================
										* Use class "shifted-left" or "shifted-right" to enable shifted content (do not use for long content).
										-->
                            <div class="split-box-content sb-content-right">

                                <!-- Begin tt-heading
											======================
											* Use class "padding-on" to enable heading paddings (useful if you use tt-heading as stand alone element).
											* Use class "text-center" or "text-right" to align tt-heading.
											* Use classes "tt-heading-xs", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set tt-heading size.
											-->
                                <div class="tt-heading">
                                    <div class="tt-heading-inner">
                                        <h1 class="tt-heading-title">{{$about->our_vision_title}}</h1>
                                        <div class="tt-heading-subtitle">{{$about->our_vision_subvtitle}}</div>
                                        <hr class="hr-short">
                                    </div> <!-- /.tt-heading-inner -->
                                </div>
                                <!-- End tt-heading -->

                                <div class="margin-top-30">
                                    {!!$about->our_vision_content!!}
                                </div>



                            </div>
                            <!-- End split box content -->

                        </div> <!-- /.col -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div>
            <!-- End split box -->



        </div> <!-- /.about-me-inner -->
    </section>
    <!-- End about me section -->

    <!-- End latest work cection -->


    @include('include.footer')

</div>

@endsection
