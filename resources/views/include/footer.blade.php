<section id="footer" class="footer-dark no-margin-top">
    <div class="footer-inner">
        <div class="footer-container tt-wrap">
            <div class="row">
                <div class="col-md-3">

                    <!-- Begin footer logo -->
                    <div id="footer-logo">
                        <a href="{{route('home')}}" class="logo-dark"><img src="{{asset('assets/img/b-logo.png')}}"
                                alt="logo"></a>
                        <a href="{{route('home')}}" class="logo-light"><img src="{{asset('assets/img/b-logo.png')}}"
                                alt="logo"></a>

                        <!-- for small screens -->
                        <a href="{{route('home')}}" class="logo-dark-m"><img src="{{asset('assets/img/b-logo.png')}}"
                                alt="logo"></a>
                        <a href="{{route('home')}}" class="logo-light-m"><img src="{{asset('assets/img/b-logo.png')}}"
                                alt="logo"></a>
                    </div>
                    <!-- End footer logo -->

                </div> <!-- /.col -->

                <div class="col-md-5">

                    <!-- Begin footer text -->
                    <div class="footer-text">
                        <h4>{{setting('site.footer_creative_title')}}</h4>
                        {{setting('site.description')}}
                    </div>
                    <!-- End footer text -->

                </div> <!-- /.col -->

                <div class="col-md-4">

                    <!-- Begin social buttons -->
                    <div class="social-buttons">
                        <ul>
                            <li><a href="{{setting('site.facebook_link')}}"
                                    class="btn btn-social-min btn-default btn-rounded-full"
                                    title="Follow me on Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li><a href="{{setting('site.twitter_link')}}"
                                    class="btn btn-social-min btn-default btn-rounded-full" title="Follow me on Twitter"
                                    target="_blank"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li><a href="{{setting('site.google_link')}}"
                                    class="btn btn-social-min btn-default btn-rounded-full" title="Follow me on Google+"
                                    target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="{{setting('site.pinterest_link')}}"
                                    class="btn btn-social-min btn-default btn-rounded-full"
                                    title="Follow me on Pinterest" target="_blank"><i
                                        class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="{{setting('site.dribble_link')}}"
                                    class="btn btn-social-min btn-default btn-rounded-full"
                                    title="Follow me on Dribbble" target="_blank"><i class="fab fa-dribbble"></i></a>
                            </li>
                            <li>
                                <a href="maleto:{{setting('site.email_address')}}"
                                    class="btn btn-social-min btn-default btn-rounded-full" title="Drop me a line"
                                    target="_blank"><i class="fas fa-envelope"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!-- End social buttons -->

                    <!-- Begin footer subscribe form -->
                    <form id="footer-subscribe-form" class="form-btn-inside">
                        <div class="form-group">
                            <input type="email" class="form-control no-bg" id="footer-subscribe" name="subscribe"
                                placeholder="Subscribe. Enter your email address..." required="">
                            <button type="submit"><i class="fas fa-paper-plane"></i></button>
                        </div>
                    </form>
                    <!-- End footer subscribe form -->

                </div> <!-- /.col -->

            </div> <!-- /.row -->
        </div> <!-- /.footer-container -->

        <div class="footer-bottom">
            <div class="footer-container tt-wrap">
                <div class="row">
                    <div class="col-md-6 col-md-push-6">

                        <!-- Begin footer menu -->
                        <ul class="footer-menu">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><a href="{{route('about')}}">About</a></li>
                            <li><a href="{{route('showcase')}}">Portfolio</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                        <!-- End footer menu -->

                    </div> <!-- /.col -->

                    <div class="col-md-6 col-md-pull-6">

                        <!-- Begin footer copyright -->
                        <div class="footer-copyright">
                            <p>&copy; creative {{date('Y')}} / All rights reserved</p>
                            <p>Design by: <a href="#">Photo</a></p>
                        </div>
                        <!-- End footer copyright -->

                    </div> <!-- /.col -->

                </div> <!-- /.row -->
            </div> <!-- /.footer-container -->
        </div> <!-- /.footer-bottom -->

    </div> <!-- /.footer-inner -->

    <!-- Scroll to top button -->
    <a href="#body" class="scrolltotop sm-scroll" title="Scroll to top"><i class="fas fa-chevron-up"></i></a>

</section>
