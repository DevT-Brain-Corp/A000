@extends('nav.home')

@section('title', 'menu')

@section('content')
<div id="page-transitions">
    <div id="header" class="header-logo-app header-dark">
        <a href="#" class="header-title back-button">Menu Styles</a>
        <a href="#" class="header-logo disabled"></a>
        <a href="#" class="header-icon header-icon-1 back-button font-10 no-border"><i
                class="fa fa-chevron-left"></i></a>
        <a href="#" class="header-icon header-icon-4 hamburger-animated no-border" data-deploy-menu="menu-1"></a>
    </div>

    <div id="page-content" class="page-content">
        <div id="page-content-scroll">
            <!--Enables this element to be scrolled -->

            <div class="content-strip half-bottom">
                <div class="above-overlay">
                    <h1 class="color-white center-text uppercase ultrabold full-top fa-2x small-bottom">FoodGasm Menu Styles</h1>
                    
                </div>
                <div class="content-strip-arrow"><i class="fa fa-angle-down color-wh"></i><i
                        class="fa fa-angle-down"></i><i class="fa fa-angle-down"></i></div>
                <div class="overlay bg-black opacity-80"></div>
                <div class="content-strip-bg preload-image" data-src="{{ asset('images/pictures/kopikocok.jpg') }}"></div>
            </div>

            <div class="content">
                <h5 class="uppercase ultrabold full-bottom center-text">Our Menus</h5>
                <div class="gallery gallery-thumbs gallery-square">

                    <a class="show-gallery card">
                        <div class="imgBx">
                            <img src="{{asset('images/pictures/ss1.jpg')}}" alt="images">
                        </div>
                        <div class="details">
                            <h2>Ice Cappucino<br><span>IDR 12.000,-</span></h2>
                        </div>
                    </a>

                    <a class="show-gallery card">
                        <div class="imgBx">
                            <img src="{{asset('images/pictures/ss2.jpg')}}" alt="images">
                        </div>
                        <div class="details">
                            <h2>Ice Cappucino<br><span>IDR 12.000,-</span></h2>
                        </div>
                    </a>
                    <a class="show-gallery card">
                        <div class="imgBx">
                            <img src="{{asset('images/pictures/ss4.jpg')}}" alt="images">
                        </div>
                        <div class="details">
                            <h2>Ice Cappucino<br><span>IDR 12.000,-</span></h2>
                        </div>
                    </a>
                    <a class="show-gallery card">
                        <div class="imgBx">
                            <img src="{{asset('images/pictures/ss5.jpg')}}" alt="images">
                        </div>
                        <div class="details">
                            <h2>Ice Cappucino<br><span>IDR 12.000,-</span></h2>
                        </div>
                    </a>
                    <a class="show-gallery card">
                        <div class="imgBx">
                            <img src="{{asset('images/pictures/ss6.jpg')}}" alt="images">
                        </div>
                        <div class="details">
                            <h2>Ice Cappucino<br><span>IDR 12.000,-</span></h2>
                        </div>
                    </a>
                </div>
            </div>
            {{--card--}}


        </div>
    </div>
    <a href="#" class="back-to-top-badge back-to-top-small"><i class="fa fa-angle-up"></i>Back to Top</a>

</div>
@endsection