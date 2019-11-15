<!DOCTYPE HTML>
<html lang="en">

<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
        <title>@yield('title')</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/framework.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{asset('fontawesome-free/css/all.min.css')}}" type="text/css">

        <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i"
                rel="stylesheet">
        <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>
</head>

<body>

        <div id="preloader" class="preloader-light">

                <center style="margin-top: 100px">
                        <img src="{{ asset('images/pictures/splashlogo.png') }}" alt="">
                </center>
                <div id="preload-spinner"></div>
                <p>Your Daily Comfort Food</p>
                <em></em>
        </div>
        <div id="header" class="header-logo-left header-dark">
                <a href="#" class="header-logo"></a>
                <a href="#" class="header-icon header-icon-1 hamburger-animated" data-deploy-menu="menu-1"></a>
        </div>

        <div id="menu-1" class="menu-wrapper menu-light menu-sidebar-right menu-large">
                <div class="menu-scroll">
                        <div class="menu-socials">
                                <a href="#" class="font-12"><i class=></i></a>
                                <a href="#" class="font-12"><i class=></i> </a>
                                <a href="#" class="font-12"><i class=></i> </a>
                                <a href="#" class="font-13"><i class=></i> </a>
                                <a href="#" class="font-13"><i class=></i> </a>
                                <a href="#" class="font-14 close-menu"><i class="fa color-red-dark fa-times"></i></a>
                        </div>
                        <a style="margin-left:50px;" href="{{ route('home') }}"><img src="{{ asset('images/pictures/splashlogo.png') }}"
                                        alt=""></a>
                        <div class="menu">
                                <em class="menu-divider">Navigation<i class="fa fa-navicon"></i></em>
                                <a class="menu-item active-item" href="{{ url('/') }}"><i
                                                class="font-15 fa color-night-light fa-home"></i><strong>Homepages</strong></a>
                                <a class="menu-item" href="{{ route('menu') }}"><i
                                                class="font-15 fa color-blue-dark fa-cog"></i><strong>Menu</strong></a>
                                <a class="menu-item" href="{{ route('reservation') }}"><i
                                                class="font-14 fa color-teal-dark fa-navicon"></i><strong>Reservation</strong></a>
                                <a class="menu-item" href="{{ route('galery') }}"><i
                                                class="font-13 fa color-green-dark fa-file"></i><strong>Food
                                                Gallery</strong></a>
                                <a class="menu-item no-border" href="https://www.instagram.com/foodgasm.jbr/"><i
                                                class="font-14 fa color-blue-dark fa-envelope"></i><strong>Contact</strong></a>
                                <em class="menu-divider">Get Social<i class="fa fa-share-alt"></i></em>
                                <a class="menu-item" data-submenu="sub-1" href="#"><i
                                                class="font-16 fa phone-color fa-phone-square"></i><strong>Call
                                                Us</strong></a>
                                <div id="sub-1" class="submenu-item">
                                        <a href="tel:+62 811-115-666">FOODGASM</a>
                                </div>
                                <a class="menu-item no-border" href="https://www.instagram.com/foodgasm.jbr/"><i
                                                class="font-17 fab instagram-color fa-instagram"></i><strong>Instagram</strong></a>
                                <a class="menu-item close-menu" href="#"><i
                                                class="font-14 fa color-orange-dark fa-times"></i><strong>Close</strong></a>
                        </div>
                </div>
        </div>
        @yield('content')

        <div class="footer footer-dark">
                <a href="{{ route('home') }}" class="footer-logo"></a>
                <div class="footer-socials">
                        <a href="https://www.instagram.com/foodgasm.jbr/"
                                class="scale-hover icon icon-round no-border icon-xs facebook-bg border-teal-3d"><i
                                        class="fab fa-instagram"></i></a>

                        <p class="copyright-text">Copyright &copy; Enabled <span id="copyright-year">2017</span>. All
                                Rights
                                Reserved.</p>
                </div>


</body>

</html>