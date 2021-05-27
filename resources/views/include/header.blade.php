<header id="header" class="header-show-hide-on-scroll menu-align-right">

    <!-- Begin header inner -->
    <div class="header-inner tt-wrap">

        <!-- Begin logo
				================ -->
        <div id="logo">
            <a href="{{route('home')}}" class="logo-dark"><img src="{{asset('assets/img/b-logo.png')}}" alt="logo"></a>
            <a href="{{route('home')}}" class="logo-light"><img src="{{asset('assets/img/b-logo.png')}}" alt="logo"></a>

            <!-- for small screens -->
            <a href="{{route('home')}}" class="logo-dark-m"><img src="{{asset('assets/img/b-logo.png')}}"
                    alt="logo"></a>
            <a href="{{route('home')}}" class="logo-light-m"><img src="{{asset('assets/img/b-logo.png')}}"
                    alt="logo"></a>
        </div>
        <!-- End logo -->

        <!-- ====================
				//// Begin main menu ////
				===================== -->
        <nav class="tt-main-menu">

            <!-- Begin mobile menu toggle button -->
            <div id="tt-m-menu-toggle-btn">
                <span></span>
            </div>
            <!-- End mobile menu toggle button -->



            <!-- Collect the nav links for toggling
					========================================
					* Use class "tt-submenu-dark" to enable submenu dark style.
					-->
            <div class="tt-menu-collapse tt-submenu-dark">
                <ul class="tt-menu-nav">

                    <!-- Begin submenu (submenu master)
							==================================== -->
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('about')}}">About</a></li>
                    <li><a href="{{route('showcase')}}">Showcase</a></li>
                    <li><a href="social.html">Social Media</a></li>
                    <li><a href="testimonials.html">Testimonials</a></li>
                    <li><a href="{{route('packages')}}">Package</a></li>


                </ul> <!-- /.tt-menu-nav -->
            </div> <!-- /.tt-menu-collapse -->

        </nav>
        <!-- End main menu -->

    </div>
    <!-- End header inner -->

</header>
