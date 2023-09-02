<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Discount Coupon System</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600%7CPoppins:300,400,500,600" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('dcs/css/bootstrap.min.css') }}" rel="stylesheet">
    <link id="theme" href="{{ asset('dcs/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('dcs/css/sparkicons.css') }}" rel="stylesheet">
    <link href="{{ asset('dcs/css/et-line.css') }}" rel="stylesheet">
    <link href="{{ asset('dcs/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('dcs/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('dcs/css/magnific-popup.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('dcs/css/style.changer.css') }}">

    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>

<body class="antialiased">
    <div class="justify-center">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/admin/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
            @endif
        </div>
        @endif

        <div class="loader"></div>
        <div class="main-container transition-fade">
            <section id="hero" style="height: 500px">
                <div class="container valign">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <h1>DCS - Discount Coupon System</h1>
                            <p class="lead mt-20 mb-48">Connect with us.</p><a href="{{ route('login') }}"
                                class="btn btn-circle">Login</a>
                        </div>
                    </div>
                </div>
            </section>

            <footer class="page-footer-2 dark">
                <div class="container">
                    <hr class="mb-30 fdelivery">
                    <div class="row">
                        <div class="col-sm-4"><span class="small">©{{ date('Y') }} DCS- Adarsha Poudel</span>
                        </div>
                        <div class="col-sm-4 text-center"></div>
                        <div class="col-sm-4 text-right mt-xs-40 hidden-xs">
                            <div class="social-links"><a href="https://www.facebook.com/profile.php?id=100009166797046" title="Facebook"
                                    target="_blank"><i class="ti-facebook"></i></a></div>
                        </div>
                    </div>
                </div>
            </footer>
            <div id="notify" class="notify notify-sm">
                <div class="notify-inner valign text-center"></div><span class="notify-close"></span>
            </div>
        </div>
        <script src="{{ asset('dcs/js/vendor/jquery-2.2.0.min.js') }}"></script>
        <script src="{{ asset('dcs/js/vendor/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('dcs/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('dcs/js/smoothscroll.js') }}"></script>
        <script src="{{ asset('dcs/js/plugins.js') }}"></script>
        <script src="{{ asset('dcs/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('dcs/js/main.js') }}"></script>
        <script src="{{ asset('dcs/js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('dcs/js/style.changer.js') }}"></script>
        </div>
    </body>

    </html>
