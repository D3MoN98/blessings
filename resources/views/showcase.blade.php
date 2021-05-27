@extends('layout.app')

@section('content')

<div id="body-content">


    <!-- ========================
			///// Begin page header /////
			=============================
			* Use classes "ph-xs", "ph-sm", "ph-lg" or "ph-xlg" to set page header size.
			* Use class "ph-center" or "ph-right" to align page header caption.
			-->
    <section id="page-header" class="bg-transparent">

        <!-- Begin page header image
				=============================
				* Use class "parallax-bg-1" up to "parallax-bg-6" to enable background image parallax effect.
				* Use class "fade-out-scroll-3" to enable fade out effect if page scroll.
				* Use class "hide-ph-image" to hide page header image without removing the code.
				-->
        <div class="page-header-image parallax-bg-6 bg-image"
            style="background-image: url({{asset('storage/'.$showcase->banner_image)}});">

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
            <div class="page-header-caption ph-caption-xlg parallax-4 fade-out-scroll-3">
                <h1 class="page-header-title">{{$showcase->banner_title}}</h1>
                <hr class="hr-short">

                <!-- Use data attributes to set text maximum characters or words (example: data-max-characters="120" or data-max-words="40") -->
                <div class="page-header-description" data-max-words="40">
                    <p>{{$showcase->banner_subtitle}}</p>
                </div>

            </div>
            <!-- End page header caption -->

        </div>
        <!-- End page header inner -->

    </section>
    <!-- End page header -->


    <!-- =================================
			///// Begin gallery list section /////
			================================== -->
    <section id="gallery-list-section" class="gl-categories">
        <div class="isotope-wrap">
            <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->


            <div class="isotope col-3 gutter-3">


                <div class="isotope-items-wrap gli-dark gli-alter-5">

                    <!-- Grid sizer (do not remove!!!) -->
                    <div class="grid-sizer"></div>

                    @foreach ($photo_categories as $item)

                    <div class="isotope-item iso-height-1">

                        <!-- Begin gallery list item -->
                        <div class="gallery-list-item">

                            <!-- Begin gallery list item image -->
                            <div class="gl-item-image-wrap">

                                <!-- Begin gallery list item image inner -->
                                <a href="{{route('showcase.details', $item->id)}}" class="gl-item-image-inner">
                                    <div class="gl-item-image bg-image"
                                        style="background-image: url({{asset('storage/'.$item->photos()->first()->image)}}); background-position: 50% 50%">
                                    </div>

                                    <span class="gl-item-image-zoom"></span>
                                </a>
                                <!-- End gallery list item image inner -->
                            </div>
                            <!-- End gallery list item image -->

                            <!-- Begin gallery list item info -->
                            <div class="gl-item-info">
                                <div class="gl-item-caption">
                                    <h2 class="gl-item-title"><a href="{{route('showcase.details', $item->id)}}">
                                            {{$item->title}}</a>
                                    </h2>
                                </div>
                            </div>
                            <!-- End gallery list item info -->

                        </div>
                        <!-- End gallery list item -->

                    </div>

                    @endforeach

                </div>
                <!-- End isotope items wrap -->


                <!-- Begin isotope pagination
						============================== -->
                <!-- <div class="isotope-pagination">
							<div class="iso-load-more">
								<a class="btn btn-dark-bordered btn-lg" href="">View More <i class="fas fa-refresh"></i></a>
							</div>
						</div> -->
                <!-- End isotope pagination -->

            </div>
            <!-- End isotope -->

        </div> <!-- /.isotope-wrap -->
    </section>
    <!-- End gallery list section -->



    <!-- End latest work cection -->


    <!-- ===========================
			///// Begin footer section /////
			================================
			* Use class "footer-dark" to enable dark footer.
			* Use class "no-margin-top" if needed.
			-->
    <!-- End gallery list section -->

    @include('include.footer')

</div>

@endsection
