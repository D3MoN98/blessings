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
        <div class="page-header-image parallax-bg-3 bg-image"
            style="background-image: url({{asset('storage/'.$photos->first()->image)}});">

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
                <h1 class="page-header-title">{{$photo_category->title}}</h1>
                <hr class="hr-short">

                <!-- Use data attributes to set text maximum characters or words (example: data-max-characters="120" or data-max-words="40") -->
                <div class="page-header-description">
                    <p>{{$photo_category->description}}</p>
                </div>

            </div>
            <!-- End page header caption -->

        </div>
        <!-- End page header inner -->

    </section>
    <!-- End page header -->


    <!-- ===================================
    			///// Begin gallery single section /////
    			==================================== -->
    <section id="gallery-single-section">
        <div class="isotope-wrap tt-wrap">

            <div class="isotope col-3 gutter-3">

                <!-- Begin isotope top content -->


                <!-- Begin isotope items wrap
    						==============================
    						* Use classes "gsi-color", "gsi-zoom" or "gsi-simple" to change gallery single item cover variations.
    						-->
                <div id="gallery" class="isotope-items-wrap lightgallery">

                    <!-- Grid sizer (do not remove!!!) -->
                    <div class="grid-sizer"></div>


                    <!-- =====================
                    /// Begin isotope item ///
                    ==========================
                    * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
                    -->
                    @foreach ($photos as $item)

                    <div class="isotope-item">

                        <!-- Begin gallery single item -->
                        <a href="{{asset('storage/'.$item->image)}}" class="gallery-single-item lg-trigger"
                            data-exthumbnail="{{asset('storage/'.$item->image)}}"
                            data-sub-html="<p>Yes, you can use image captions :)</p>">

                            <!-- Begin gallery single item image -->
                            <img src="{{asset('storage/'.$item->image)}}" class="gs-item-image" alt="">
                            <!-- End gallery single item image -->

                            <!-- Gallery single item icon -->
                            <div class="gs-item-icon"><i class="fas fa-search"></i></div>

                        </a>
                        <!-- End gallery single item -->

                    </div>
                    <!-- End isotope item -->

                    @endforeach

                </div>
                <!-- End isotope items wrap -->


                <!-- Begin isotope pagination
    						============================== -->
                <div class="isotope-pagination">
                    <div class="iso-load-more">
                        {{-- <a class="btn btn-dark-bordered btn-lg" href="#">View More <i class="fas fa-refresh"></i></a> --}}
                        {{$photos->links()}}
                    </div>
                </div>
                <!-- End isotope pagination -->

            </div>
            <!-- End isotope -->

        </div> <!-- /.isotope-wrap -->
    </section>
    <!-- End gallery single section -->



    <!-- End latest work cection -->

    @include('include.footer')

</div>
@endsection
