@extends('nav.home')

@section('title', 'FoodGasm - Galery')
@section('content')
<div id="page-content" class="page-content">
    <div id="page-content-scroll" class="header-clear-larger">
        <!--Enables this element to be scrolled -->

        <div class="decoration decoration-margins"></div>

        <div class="content">
        
            <div class="gallery gallery-thumbs gallery-square">

                <a class="show-gallery card">
                    <div class="imgBx">
                        <img src="{{asset('images/pictures/2t.jpg')}}" alt="images">
                    </div>
                    <div class="details">
                        <h2>Ice Cappucino<br><span>IDR 12.000,-</span></h2>
                    </div>
                </a>

                <a class="show-gallery card">
                    <div class="imgBx">
                        <img src="{{asset('images/pictures/3t.jpg')}}" alt="images">
                    </div>
                    <div class="details">
                        <h2>Ice Cappucino<br><span>IDR 12.000,-</span></h2>
                    </div>
                </a>
                <a class="show-gallery card">
                    <div class="imgBx">
                        <img src="{{asset('images/pictures/4t.jpg')}}" alt="images">
                    </div>
                    <div class="details">
                        <h2>Ice Cappucino<br><span>IDR 12.000,-</span></h2>
                    </div>
                </a>
                <a class="show-gallery card">
                    <div class="imgBx">
                        <img src="{{asset('images/pictures/4t.jpg')}}" alt="images">
                    </div>
                    <div class="details">
                        <h2>Ice Cappucino<br><span>IDR 12.000,-</span></h2>
                    </div>
                </a>
                <a class="show-gallery card">
                    <div class="imgBx">
                        <img src="{{asset('images/pictures/5t.jpg')}}" alt="images">
                    </div>
                    <div class="details">
                        <h2>Ice Cappucino<br><span>IDR 12.000,-</span></h2>
                    </div>
                </a>
            </div>
        </div>

        <div class="decoration decoration-margins"></div>
{{-- 
        <div class="content">
            <h5 class="uppercase ultrabold full-bottom center-text">Square Thumbs - Captions</h5>
            <div class="gallery gallery-thumbs gallery-square">
                <a class="show-gallery" href="images/pictures/1t.jpg" title="Vynil and Typerwritter">
                    <img src="{{ asset('images/empty.png')}}" data-src="{{ asset('images/pictures/1s.jpg')}}"
                        class="responsive-image" alt="img">
                    <span>Writer</span>
                </a>
                <a class="show-gallery" href="images/pictures/2t.jpg" title="Fruit Cookie Pie">
                    <img src="{{ asset('images/empty.png')}}" data-src="{{ asset('images/pictures/2s.jpg')}}"
                        class="responsive-image" alt="img">
                    <span>Cream</span>
                </a>
                <a class="show-gallery" href="images/pictures/3t.jpg" title="Plain Cookies and Flour">
                    <img src="{{ asset('images/empty.png')}}" data-src="{{ asset('images/pictures/3s.jpg')}}"
                        class="responsive-image" alt="img">
                    <span>Cookie</span>
                </a>
                <a class="show-gallery" href="images/pictures/4t.jpg" title="Pots and Stuff">
                    <img src="{{ asset('images/empty.png')}}" data-src="{{ asset('images/pictures/4s.jpg')}}"
                        class="responsive-image" alt="img">
                    <span>Pots</span>
                </a>
                <a class="show-gallery" href="images/pictures/5t.jpg" title="Delicious Strawberries">
                    <img src="{{ asset('images/empty.png')}}" data-src="{{ asset('images/pictures/5s.jpg')}}"
                        class="responsive-image" alt="img">
                    <span>Berry</span>
                </a>
                <a class="show-gallery" href="images/pictures/6t.jpg" title="A Beautiful Camera">
                    <img src="{{ asset('images/empty.png')}}" data-src="{{ asset('images/pictures/6s.jpg')}}"
                        class="responsive-image" alt="img">
                    <span>Camera</span>
                </a>
            </div>
        </div>

        <div class="decoration decoration-margins"></div>

        <div class="content">
            <h5 class="uppercase ultrabold full-bottom center-text">Square Thumbs - Polaroid Effect</h5>
            <div class="gallery gallery-thumbs gallery-square">
                <a class="show-gallery polaroid-effect" href="images/pictures/1t.jpg" title="Vynil and Typerwritter">
                    <img src="{{ asset('images/empty.png')}}" data-src="{{ asset('images/pictures/1s.jpg')}}"
                        class="responsive-image" alt="img">
                    <span>Writer</span>
                </a>
                <a class="show-gallery polaroid-effect" href="images/pictures/2t.jpg" title="Fruit Cookie Pie">
                    <img src="{{ asset('images/empty.png')}}" data-src="{{ asset('images/pictures/2s.jpg')}}"
                        class="responsive-image" alt="img">
                    <span>Cream</span>
                </a>
                <a class="show-gallery polaroid-effect" href="images/pictures/3t.jpg" title="Plain Cookies and Flour">
                    <img src="{{ asset('images/empty.png')}}" data-src="{{ asset('images/pictures/3s.jpg')}}"
                        class="responsive-image" alt="img">
                    <span>Cookie</span>
                </a>
                <a class="show-gallery polaroid-effect" href="images/pictures/4t.jpg" title="Pots and Stuff">
                    <img src="{{ asset('images/empty.png')}}" data-src="{{ asset('images/pictures/4s.jpg')}}"
                        class="responsive-image" alt="img">
                    <span>Pots</span>
                </a>
                <a class="show-gallery polaroid-effect" href="images/pictures/5t.jpg" title="Delicious Strawberries">
                    <img src="{{ asset('images/empty.png')}}" data-src="{{ asset('images/pictures/5s.jpg')}}"
                        class="responsive-image" alt="img">
                    <span>Berry</span>
                </a>
                <a class="show-gallery polaroid-effect" href="images/pictures/6t.jpg" title="A Beautiful Camera">
                    <img src="{{ asset('images/empty.png')}}" data-src="{{ asset('images/pictures/6s.jpg')}}"
                        class="responsive-image" alt="img">
                    <span>Camera</span>
                </a>
            </div>
        </div>

        <div class="decoration decoration-margins"></div>

        <div class="content">
            <h5 class="uppercase ultrabold full-bottom center-text">Round Thumbs - Captions</h5>
            <div class="gallery gallery-thumbs gallery-round">
                <a class="show-gallery" href="images/pictures/1t.jpg" title="Vynil and Typerwritter">
                    <img src="{{ asset('images/empty.png')}}" data-src="{{ asset('images/pictures/1s.jpg')}}"
                        class="responsive-image" alt="img">
                    <span>Writer</span>
                </a>
                <a class="show-gallery" href="images/pictures/2t.jpg" title="Fruit Cookie Pie">
                    <img src="{{ asset('images/empty.png')}}" data-src="{{ asset('images/pictures/2s.jpg')}}"
                        class="responsive-image" alt="img">
                    <span>Cream</span>
                </a>
                <a class="show-gallery" href="images/pictures/3t.jpg" title="Plain Cookies and Flour">
                    <img src="{{ asset('images/empty.png')}}" data-src="{{ asset('images/pictures/3s.jpg')}}"
                        class="responsive-image" alt="img">
                    <span>Cookie</span>
                </a>
                <a class="show-gallery" href="images/pictures/4t.jpg" title="Pots and Stuff">
                    <img src="{{ asset('images/empty.png')}}" data-src="{{ asset('images/pictures/4s.jpg')}}"
                        class="responsive-image" alt="img">
                    <span>Pots</span>
                </a>
                <a class="show-gallery" href="images/pictures/5t.jpg" title="Delicious Strawberries">
                    <img src="{{ asset('images/empty.png')}}" data-src="{{ asset('images/pictures/5s.jpg')}}"
                        class="responsive-image" alt="img">
                    <span>Berry</span>
                </a>
                <a class="show-gallery" href="images/pictures/6t.jpg" title="A Beautiful Camera">
                    <img src="{{ asset('images/empty.png')}}" data-src="{{ asset('images/pictures/6s.jpg')}}"
                        class="responsive-image" alt="img">
                    <span>Camera</span>
                </a>
            </div>
        </div>

        <div class="decoration decoration-margins"></div>

        <div class="content">
            <h5 class="uppercase ultrabold full-bottom center-text">Round Thumbs - No Captions</h5>
            <div class="gallery gallery-thumbs gallery-round">
                <a class="show-gallery" href="images/pictures/1t.jpg">
                    <img src="{{ asset('images/empty.png')}}" data-src="{{ asset('images/pictures/1s.jpg')}}"
                        class="responsive-image" alt="img">
                </a>
                <a class="show-gallery" href="images/pictures/2t.jpg">
                    <img src="{{ asset('images/empty.png')}}" data-src="{{ asset('images/pictures/2s.jpg')}}"
                        class="responsive-image" alt="img">
                </a>
                <a class="show-gallery" href="images/pictures/3t.jpg">
                    <img src="{{ asset('images/empty.png')}}" data-src="{{ asset('images/pictures/3s.jpg')}}"
                        class="responsive-image" alt="img">
                </a>
                <a class="show-gallery" href="images/pictures/4t.jpg">
                    <img src="{{ asset('images/empty.png')}}" data-src="{{ asset('images/pictures/4s.jpg')}}"
                        class="responsive-image" alt="img">
                </a>
                <a class="show-gallery" href="images/pictures/5t.jpg">
                    <img src="{{ asset('images/empty.png')}}" data-src="{{ asset('images/pictures/5s.jpg')}}"
                        class="responsive-image" alt="img">
                </a>
                <a class="show-gallery" href="images/pictures/6t.jpg">
                    <img src="{{ asset('images/empty.png')}}" data-src="{{ asset('images/pictures/6s.jpg')}}"
                        class="responsive-image" alt="img">
                </a>
            </div>
 --}}

            @endsection