@extends('nav.home')

@section('title','Foodgasm - Beranda')

@section('content')
    <div id="page-content" class="page-content">
        <div id="page-content-scroll">

            <div class="single-slider owl-carousel owl-has-dots-over bg-black">
                <div>
                    <div class="cover-content cover-content-center">
                        <h1 class="center-text color-white small-bottom fa-2x">Food and Baverage</h1>
                        <p class="center-text color-white opacity-70 no-bottom">Chose Best Food and Baverage in
                            Foodgasm, Check Our Menu</p>
                    </div>
                    <div class="cover-overlay overlay bg-black opacity-80"></div>
                    <!-- GAMBAR DIBAWAH -->
                    <img width="700" class="owl-lazy" src="{{ asset('images/pictures/geprek-3.jpg') }}" data-src="{{ asset('images/pictures/geprek-3.jpg') }}"
                         data-src="{{ asset('images/pictures/geprek-3.jpg') }}">
                </div>
                <div>
                    <div class="cover-content cover-content-center">
                        <h1 class="center-text color-white small-bottom">Clean and Chill Place</h1>
                        <p class="center-text color-white opacity-80 no-bottom">We provide clean and chill area for eat
                            our best food</p>
                    </div>
                    <div class="cover-overlay overlay bg-black opacity-70"></div>
                    <img width="700" class="owl-lazy" src="{{ asset('images/pictures/koloke2.jpg') }}" data-src="{{ asset('images/pictures/koloke2.jpg') }} "
                         data-src-retina="{{ asset('images/pictures/koloke2.jpg') }}">
                </div>
                <div>
                    <div class="cover-content cover-content-center">
                        <h1 class="center-text color-white small-bottom">Reservation</h1>
                        <p class="center-text color-white opacity-60 no-bottom">Reserve seat for your best dinner</p>
                    </div>
                    <div class="cover-overlay overlay bg-black opacity-80"></div>
                    <img width="700" class="owl-lazy" src="{{ asset('images/pictures/kopikocok.jpg') }}" data-src="{{ asset('images/pictures/kopikocok.jpg') }}"
                         data-src-retina="{{ asset('images/pictures/kopikocok.jpg') }}">
                </div>

                <div>
                    <div class="cover-content cover-content-center">
                        <h1 class="center-text color-white small-bottom">Built for You</h1>
                        <p class="center-text color-white opacity-80 no-bottom">For over 1 years we've been cooking food
                            for you<i class="fa fa-heart color-orange-dark font-12"></i> our customers.</p>
                    </div>
                    <div class="cover-overlay overlay bg-black opacity-60"></div>
                    <img width="700" class="owl-lazy" src="{{ asset('images/pictures/mieayamspecial2.jpg') }}" data-src="{{ asset('images/pictures/mieayamspecial2.jpg') }}"
                         data-src-retina="{{ asset('images/pictures/mieayamspecial2.jpg') }}">
                </div>
            </div>

            <div class="homepage-cta no-top">
                <h1 class="half-top center-text no-bottom font-21">FOODGASM</h1>
                <h2 class="center-text opacity-40">Your Daily Comfort Food</h2>
                <p class="boxed-text half-bottom">
                    Open Daily to Serve You [ 9.30 - 00:00 ]
                </p>
                <div class="single-slider-no-timeout owl-carousel owl-auto-height smal-top">
                    <div>
                        <div class="homepage-cta-button">
                            <div class="button-center-large"><a href="{{ route('reservation') }}"
                                                                class="button button-full button-blue button-sm button-rounded uppercase ultrabold">Reservation</a>
                            </div>
                            <p class="center-text no-bottom opacity-50 font-10">Reserve your seat here</p>
                        </div>
                    </div>
                    <div>
                        <div class="homepage-cta-socials">
                            <a href="#" class="icon icon-xs no-border facebook-bg icon-round"><i
                                    class="fa fa-facebook"></i></a>
                            <a href="#" class="icon icon-xs no-border google-bg icon-round"><i
                                    class="fa fa-google-plus"></i></a>
                            <a href="#" class="icon icon-xs no-border twitter-bg icon-round"><i
                                    class="fa fa-twitter"></i></a>
                        </div>
                        <p class="center-text no-bottom opacity-50 font-10">There are multiple Call To Action Styles.
                            Swipe me Left</p>
                    </div>
                </div>
            </div>

            <div class="decoration decoration-margins half-top"></div>

            {{-- <div class="content-strip">
                <div class="container">
                    <h2 class="bold uppercase color-white center-text">25,000 Happy Customers</h2>
                    <p class="small-text color-white opacity-50 center-text half-bottom">Become a happy customer
                        today!</p>
                    <p class="boxed-text no-bottom color-white opacity-80">
                        Over 25,000 customers can vouch for our quality items, and fast support. We made it here because
                        of you, and we'll always respect you.
                    </p>
                    <a href="#"
                       class="button button-ghost border-gray-light button-rounded button-center full-top button-s uppercase bold">Our
                        Menu</a>
                </div>
                <div class="overlay bg-black opacity-70"></div>
                <div class="content-strip-bg preload-image" data-src="images/pictures/1.jpg"></div>
            </div> --}}


            <div class="decoration decoration-margins"></div>



        </div>
    </div>

    <!-- Share Menu -->
    <div id="menu-share" data-menu-size="380" class="menu-wrapper menu-light menu-bottom">
        <em class="menu-divider menu-divider-contrast uppercase">Share this page via<i class="fa fa-share-alt"></i></em>
        <div class="content">
            <ul class="link-list">
                <li><a class="no-border" href="https://www.facebook.com/sharer/sharer.php?u=http://www.enableds.com/"><i
                            class="fa fa-facebook font-14 facebook-color"></i>Facebook<i class="fa fa-angle-right"></i></a>
                </li>
                <li><a class="no-border"
                       href="https://twitter.com/home?status=Check%20out%20ThemeForest%20http://www.enableds.com"><i
                            class="fa fa-twitter font-14 twitter-color"></i>Twitter<i class="fa fa-angle-right"></i></a>
                </li>
                <li><a class="no-border" href="whatsapp://send" data-text="Check this out!"
                       data-href="http://www.enableds.com"><i class="fa fa-whatsapp font-16 whatsapp-color"></i>Whatsapp<i
                            class="fa fa-angle-right"></i></a></li>
                <li><a class="no-border" href="https://plus.google.com/share?url=http://www.enableds.com"><i
                            class="fa fa-google font-14 google-color"></i>Google +<i class="fa fa-angle-right"></i></a>
                </li>
                <li><a class="no-border"
                       href="mailto:name@domain.com?subject=Check%20this%20out&body=http%3A%2F%2Fwww.enableds.com"><i
                            class="fa fa-envelope font-14 mail-color"></i>Mail Link<i class="fa fa-angle-right"></i></a>
                </li>
                <li><a class="no-border close-menu"><i class="fa fa-times color-red-dark font-15"></i>Cancel<i
                            class="fa fa-angle-right"></i></a></li>
            </ul>
        </div>
    </div>

    <!-- Notification Bell Icon Menu -->
    <div id="menu-2" data-menu-size="358" class="menu-wrapper menu-light menu-top menu-notification">
        <div class="menu-scroll">
            <em class="menu-divider menu-divider-contrast no-top">NOTIFICATIONS & Updates<i
                    class="fa fa-bell-o"></i></em>
            <a href="#"><i class="fa fa-check color-green-light"></i><strong>MEET APPECA</strong><em> We just released a
                    new mobile website with an awesome design & features.</em></a>
            <a href="#"><i class="fa fa-heart color-red-light"></i><strong>IT'S SIMPLE </strong><em>We build easy to use
                    code, easy to use and complete documentations for everyone.</em></a>
            <a href="#"><i class="fa fa-user color-blue-light"></i><strong>24/7 Support</strong><em>We're here for you,
                    we even reply to tickets on Sundays! We're here to help you!</em></a>
            <a href="#"><i class="fa fa-star color-yellow-dark"></i><strong>Elite Author</strong><em>Over 10 years of
                    experience guarantee a quality crafted item & support.</em></a>
            <a href="http://www.enableds.com/weekly-offers/" class="default-link"><i
                    class="fa fa-envelope color-pink-light"></i><strong>Subscribe to NEWSLETTER</strong><em>Subscribe to
                    our newsletter to get the latest news and updates. Click this Notification.</em></a>
            <a href="https://www.facebook.com/enabled.labs/" class="default-link"><i
                    class="fa fa-twitter color-twitter"></i><strong>Follow our Twitter</strong><em>Yes, we're on Twitter
                    too. Follow us for news and updates. Click this Notification.</em></a>
            <a href="https://twitter.com/iEnabled" class="default-link full-bottom"><i
                    class="fa fa-facebook color-facebook"></i><strong>Like us on Facebook</strong><em>We're also on
                    Facebook. Follow us for news and updates. Tap this Notification.</em></a>
        </div>
    </div>

    <!-- Contact Icon Menu -->
    <div id="menu-4" data-menu-size="385" class="menu-wrapper menu-light menu-bottom menu-contact">
        <div class="menu-scroll">
            <div class="contact-form">
                <div class="formSuccessMessageWrap" id="formSuccessMessageWrap">
                    <p class="center-text full-bottom full-top"><i class="fa fa-2x fa-paper-plane-o"></i></p>
                    <h4 class="uppercase ultrabold half-bottom center-text">Message Sent</h4>
                    <p class="center-text boxed-text half-bottom">
                        We usually reply in less than 24 hours. <br/> Thank you for getting in touch with us!
                    </p>
                    <a href="#"
                       class="button button-round color-white button-blue button-xs button-center close-menu uppercase bold full-bottom full-top">Return
                        to Site</a>
                </div>
                <form action="php/contact.php" method="post" class="contactForm" id="contactForm">
                    <fieldset>
                        <div class="menu-contact-title half-top">
                            <h4>Let's get in Touch</h4>
                            <h5 class="full-bottom">Get in touch with us. Send us a message and we'll get back to you in
                                the shortest possible time!</h5>
                        </div>
                        <div class="formValidationError" id="contactNameFieldError">Name is required!</div>
                        <div class="formValidationError" id="contactEmailFieldError">Mail address required!</div>
                        <div class="formValidationError" id="contactEmailFieldError2">Mail address must be valid!</div>
                        <div class="formValidationError" id="contactMessageTextareaError"></div>
                        <div class="formFieldWrap">
                            <label class="field-title contactNameField" for="contactNameField"></label>
                            <input type="text" name="contactNameField" placeholder="John Doe" value=""
                                   class="contactField requiredField" id="contactNameField"/>
                        </div>
                        <div class="formFieldWrap">
                            <label class="field-title contactEmailField" for="contactEmailField"></label>
                            <input type="text" name="contactEmailField" placeholder="mail@domain.com" value=""
                                   class="contactField requiredField requiredEmailField" id="contactEmailField"/>
                        </div>
                        <div class="clear"></div>
                        <div class="formTextareaWrap half-bottom">
                            <label class="field-title contactMessageTextarea" for="contactMessageTextarea"></label>
                            <textarea name="contactMessageTextarea" placeholder="Enter your message here."
                                      class="contactTextarea requiredField" id="contactMessageTextarea"></textarea>
                        </div>
                        <div class="contactFormButton">
                            <input type="submit" class="buttonWrap contactSubmitButton" id="contactSubmitButton"
                                   value="Send Message" data-formId="contactForm"/>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

    <a href="#" class="back-to-top-badge back-to-top-small"><i class="fa fa-angle-up"></i>Back to Top</a>
@endsection
