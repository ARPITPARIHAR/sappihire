<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('meta_title')</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('frontend/images/favicon.ico')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/lightbox.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/custom.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/responsive.css') }}">
        <style>
                .marquee:hover {
                    animation-play-state: paused;
                }
        </style>
        @yield('style')
    </head>
<body>
    @include('frontend.includes.navbar')
        @yield('content')
    @include('frontend.includes.footer')
    <div class="copyright">Copyright © {{ date('Y') }} <a href="{{ route('home') }}">{{ __('RICEM') }}</a>. All Rights Reserved</div>
@yield('script')
<script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/js/popper.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/lightbox-plus-jquery.min.js') }}"></script>
<script src="{{ asset('frontend/js/owl.carousel.js') }}"></script>
<script>
    window.onscroll = function() {myFunction()};

    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;

    function myFunction() {
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
    }

    $('.bnr_slide').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 5000,
        navText : ['<img src="images/prev.png">','<img src="images/next.png">'],
        responsive: {
        0: {
            items: 1
        },
        768: {
            items: 1
        },
        1200: {
            items: 1
        }
        }
    });

    $('.othr_slide').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 5000,
        navText : ['<img src="images/prev.png">','<img src="images/next.png">'],
        responsive: {
        0: {
            items: 1
        },
        768: {
            items: 3
        },
        1200: {
            items: 5
        }
        }
    });
</script>
</body>
</html>
