@extends('layout.app')

@section('content')
<div id="body-content">

    <section id="page-header" class="ph-sm">

        <!-- Begin page header image
        				=============================
        				* Use class "parallax-bg-1" up to "parallax-bg-6" to enable background image parallax effect.
        				* Use class "fade-out-scroll-3" to enable fade out effect if page scroll.
        				* Use class "hide-ph-image" to hide page header image without removing the code.
        				-->
        <div class="page-header-image parallax-bg-3 bg-image"
            style="background-image: url({{asset('storage/'.$contact->banner_image)}});">

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
                <h1 class="page-header-title">{{$contact->banner_title}}</h1>
                <hr class="hr-short">

                <!-- Use data attributes to set text maximum characters or words (example: data-max-characters="120" or data-max-words="40") -->
                <div class="page-header-description" data-max-words="40">
                    {{$contact->banner_subtitle}}
                </div>

            </div>
            <!-- End page header caption -->

        </div>
        <!-- End page header inner -->

    </section>
    <!-- End page header -->


    <!-- ============================
        			///// Begin contact section /////
        			============================= -->
    <section id="contact-section">
        <div class="contact-section-inner tt-wrap">
            <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->

            <!-- ======================
        					///// Begin split box /////
        					based on: http://www.minimit.com/articles/solutions-tutorials/bootstrap-3-responsive-columns-of-same-height
        					======================= -->
            <div class="split-box">
                <div class="container-fluid">
                    <div class="row">
                        <div class="row-lg-height full-height-vh">

                            <!-- Column -->
                            <div class="col-lg-6 col-lg-height col-lg-middle bg-image"
                                style="background-image: url(assets/img/misc/contact-bg.jpg); background-position: 50% 50%;">

                                <!-- Element cover -->
                                <div class="cover"></div>

                                <!-- Begin split box content -->
                                <div class="split-box-content text-left no-padding-left no-padding-right">

                                    <!-- Begin contact info -->
                                    <div class="contact-info-wrap">
                                        <div class="contact-info">
                                            <p><i class="fas fa-home"></i> Address: {{setting('site.address')}}</p>
                                            <p><i class="fas fa-phone"></i> Phone: {{setting('site.contact_no')}}</p>
                                            <p><i class="fas fa-envelope"></i> Email: <a
                                                    href="mailto:{{setting('site.email_address')}}"
                                                    target="_blank">{{setting('site.email_address')}}</a></p>
                                        </div>

                                        <!-- Begin social buttons -->
                                        <div class="social-buttons margin-top-20">
                                            <ul>
                                                <li><a href="{{setting('site.facebook_link')}}"
                                                        class="btn btn-social-min btn-default btn-rounded-full"
                                                        title="Follow me on Facebook" target="_blank"><i
                                                            class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="{{setting('site.twitter_link')}}"
                                                        class="btn btn-social-min btn-default btn-rounded-full"
                                                        title="Follow me on Twitter" target="_blank"><i
                                                            class="fab fa-twitter"></i></a></li>
                                                <li><a href="{{setting('site.google_link')}}"
                                                        class="btn btn-social-min btn-default btn-rounded-full"
                                                        title="Follow me on Google+" target="_blank"><i
                                                            class="fab fa-google-plus-g"></i></a></li>
                                                <li><a href="{{setting('site.pinterest_link')}}"
                                                        class="btn btn-social-min btn-default btn-rounded-full"
                                                        title="Follow me on Pinterest" target="_blank"><i
                                                            class="fab fa-pinterest-p"></i></a></li>
                                                <li><a href="{{setting('site.dribble_link')}}"
                                                        class="btn btn-social-min btn-default btn-rounded-full"
                                                        title="Follow me on Dribbble" target="_blank"><i
                                                            class="fab fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>
                                        <!-- End social buttons -->

                                    </div>
                                    <!-- End contact info -->

                                </div>
                                <!-- End split box content -->

                            </div> <!-- /.col -->

                            <!-- Column -->
                            <div class="col-lg-6 col-lg-height no-padding">

                                <!-- Begin split box content -->
                                <div class="split-box-content">

                                    <!-- Begin contact form
        											========================= -->
                                    <form action="{{route('contact.store')}}" method="POST">
                                        @csrf
                                        <div class="contact-form-inner text-left">

                                            <div class="contact-form-info">

                                                <!-- Begin tt-heading
        														======================
        														* Use class "padding-on" to enable heading paddings (useful if you use tt-heading as stand alone element).
        														* Use class "text-center" or "text-right" to align tt-heading.
        														* Use classes "tt-heading-xs", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set tt-heading size.
        														-->
                                                <div class="tt-heading">
                                                    <div class="tt-heading-inner">
                                                        <h1 class="tt-heading-title">{{$contact->sub_banner_title}}</h1>
                                                        <!-- <div class="tt-heading-subtitle">Subtitle Here</div> -->
                                                        <hr class="hr-short">
                                                    </div> <!-- /.tt-heading-inner -->
                                                </div>
                                                <!-- End tt-heading -->

                                                <div class="margin-top-30">
                                                    {!!$contact->sub_banner_subtitle!!}
                                                </div>

                                            </div> <!-- /.contact-form-info -->

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="contact[name]"
                                                            placeholder="Your Name" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="contact[email]"
                                                            placeholder="Your Email" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="contact[subject]"
                                                            placeholder="Subject" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <select class="form-control" name="contact[option]" required>
                                                            <option value="" disabled selected>Select an option</option>
                                                            <option value="Say Hello">Say hello</option>
                                                            <option value="New Project">New project</option>
                                                            <option value="Feedback">Feedback</option>
                                                            <option value="Other">Other</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="contact[message]" rows="4"
                                                            placeholder="Your Message" required></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="small text-gray"><em>* All fields are required!</em></div>

                                        </div> <!-- /.contact-form-inner -->

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <button type="submit" class="btn btn-primary btn-lg margin-top-40">Send
                                                    Message</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- End contact form -->

                                </div>
                                <!-- End split box content -->

                            </div> <!-- /.col -->
                        </div> <!-- /.row-height -->
                    </div> <!-- /.row -->

                </div> <!-- /.container -->
            </div>
            <!-- End split box -->

        </div> <!-- /.contact-section-inner -->
    </section>
    <!-- End contact section -->

    @include('include.footer')

</div>
@endsection
