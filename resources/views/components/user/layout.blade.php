@props(['title'])

<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        @if (isset($title))
            {{ $title }} | {{ config('app.name') }}
        @else
            {{ config('app.name') }}
        @endif
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="{{ asset('assets/user/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/user/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/user/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/css/style.css') }}">
</head>

<body>

    <x-user.header />
    <!-- END nav -->

    <section class="hero-wrap" style="background-image: url('{{ asset('assets/user/images/GERBANG.jpg') }}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center">
                <div class="col-lg-7 col-md-6 ftco-animate d-flex align-items-end">
                    <div class="text">
                        <h1 class="mb-4">Temukan Property <br>Terbaik Anda</h1>
                        <p style="font-size: 18px;">Bangun Masa Depan Cerah dengan Properti Idaman Serta Kenyamanan dan
                            Keindahan dalam Setiap Sudut | PT. Edy Mitra Karya </p>
                       
                        <p><a href="{{ route('user.property') }}#properties"
                                class="btn btn-primary rounded-pill py-3 px-4">View all properties</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb ftco-no-pt search-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="search-wrap-1 ftco-animate p-4">
                        <form action="#" class="search-property-1">
                            <div class="row">

                                <div class="col-lg-4">
                                    <div
                                        class="media block-6 services services-bg services-darken d-block text-center px-4 py-2">
                                        <div class="icon d-flex justify-content-center align-items-center"><span
                                                class="flaticon-home"></span></div>

                                    </div>
                                </div>
                                <div class="col-lg-4 align-items-end">

                                    <h1 class="justify-content-center text-white">PT. Edy Mitra Karya</h1>
                                </div>
                                <div class="col-lg-4">
                                    <div
                                        class="media block-6 services services-bg services-darken d-block text-center px-4 py-2">
                                        <div class="icon d-flex justify-content-center align-items-center"><span
                                                class="flaticon-home"></span></div>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{ $slot }}

    <footer class="ftco-footer ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Ecoverde</h2>
                        <p>Far far away, behind the word mountains, far from the countries.</p>
                        <ul class="ftco-footer-social list-unstyled mt-5">
                            <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Community</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Search Properties</a>
                            </li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>For Agents</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Reviews</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>FAQs</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">About Us</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Our Story</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Meet the team</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Careers</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Company</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>About Us</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Press</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Careers</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon fa fa-map"></span><span class="text">203 Fake St. Mountain
                                        View, San Francisco, California, USA</span></li>
                                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2
                                            392 3929 210</span></a></li>
                                <li><a href="#"><span class="icon fa fa-envelope pr-4"></span><span
                                            class="text">info@yourdomain.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i
                            class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                            target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    <script src="{{ asset('assets/user/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('assets/user/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('assets/user/js/google-map.js') }}"></script>
    <script src="{{ asset('assets/user/js/main.js') }}"></script>

</body>

</html>
