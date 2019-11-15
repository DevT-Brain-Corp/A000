@extends('nav.home')

@section('title', 'Reservation')

@section('content')

    <div id="page-content" class="page-content">
        <div id="page-content-scroll">
            <!--Enables this element to be scrolled -->

            <div class="content-strip half-bottom">
                <div class="above-overlay">
                    <h1 class="color-white center-text uppercase ultrabold full-top fa-2x small-bottom">Your Reservation Here</h1>
                    
                </div>
                <div class="content-strip-arrow"><i class="fa fa-angle-down color-wh"></i><i
                        class="fa fa-angle-down"></i><i class="fa fa-angle-down"></i></div>
                <div class="overlay bg-black opacity-80"></div>
                <div class="content-strip-bg preload-image" data-src="images/pictures/7.jpg"></div>
            </div>


            {{--card--}}
            <div class="content content-boxed content-boxed-padding">
                <h4 class="uppercase ultrabold color-blue-dark half-top">Reservation Information</h4>
                <p>
                    This information will be added to your reservation as well, so be sure it's absolutely correct.
                </p>
                @if (session('alert-success'))
                <i class="fa fa-user"></i><h2 style="color:green;" >{{ session('alert-success') }}</h2>
                @endif
                <div class="container">

                    <form action="{{ route('sendemail') }}" method="post">
                        @csrf
                        <div class="input-simple-1 has-icon input-green full-bottom">
                            <em>Nama </em>
                            <i class="fa fa-user"></i><input id="name" name="name" type="text"
                                placeholder="Soedjiwo Tedjo" required>
                        </div>
                        <div class="clear"></div>
                        <div class="input-simple-1 has-icon input-green full-bottom">
                            <em>Nomer Handphone</em>
                            <i class="fas fa-mobile-alt"></i><input name="phone" id="phone" type="tel"
                                placeholder="087XXXXXXXXX" required>
                        </div>
                        <div class="input-simple-1 has-icon input-green full-bottom">
                            <em>Email</em>
                            <i class="fas fa-at"></i>
                            <input name="email" id="email" type="email" placeholder="foodgasm@foodgasm.com" required>
                        </div>
                        <div class="input-simple-1 has-icon input-green full-bottom">
                            <em>Jumlah Orang</em>
                            <i class="fas fa-user-friends"></i>
                            <input name="sumpeople" type="number" placeholder="1" required>
                        </div>
                        <div class="one-half">
                            <div class="input-simple-1 has-icon input-green full-bottom">
                                <em>Tanggal</em>
                                <i class="far fa-calendar-alt"></i>
                                <input name="date" id="date" type="date" required>
                            </div>
                        </div>
                        <div class="one-half last-column">
                            <div class="input-simple-1 has-icon input-green full-bottom">
                                <em>Jam</em>
                                <i class="fas fa-clock"></i>
                                <input name="time" id="time" type="time">
                            </div>
                        </div>
                        <div class="fac fac-checkbox fac-default half-bottom font-12"><span></span>
                            <input id="box1-fac-checkbox" type="checkbox" value="1" checked="">
                            <label for="box1-fac-checkbox">I Read and Accept the <a href="#">Terms of
                                    Service</a></label>
                        </div>
                        <button type="submit"
                            class="button button-green button-full button-rounded button-sm uppercase ultrabold">Submit
                            Order</button>
                    </form>
                </div>


            </div>
        </div>
        <a href="#" class="back-to-top-badge back-to-top-small"><i class="fa fa-angle-up"></i>Back to Top</a>
    @endsection