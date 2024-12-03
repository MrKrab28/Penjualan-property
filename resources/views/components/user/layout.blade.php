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

    <footer class="ftco-footer ftco-section" id="footer">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">PT. Edy Mitra Karya</h2>
                        <p>PT. Edy Mitra Karya adalah perusahaan pengembang properti terpercaya yang telah berdedikasi
                            membangun hunian berkualitas. Dengan komitmen kami terhadap inovasi,
                            kualitas, dan kepuasan pelanggan, kami telah berhasil menghadirkan berbagai proyek perumahan
                            yang mengedepankan kenyamanan dan nilai investasi jangka panjang. </p>
                        <ul class="ftco-footer-social list-unstyled mt-5">
                            <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">

                    <div class="ftco-footer-widget mb-0">

                        <div class="block-23 mb-3">
                            <div class="contact-container">
                                <h2 class="ftco-heading-2">Location</h2>
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3974.025616396788!2d119.52683298496586!3d-5.099559638459076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefb9fd0eb4971%3A0xbf463be92dcf78c2!2sJl.%20Bumi%20Permata%20Sudiang%202%20No.18%2C%20Sudiang%20Raya%2C%20Kec.%20Biringkanaya%2C%20Kota%20Makassar%2C%20Sulawesi%20Selatan%2090552!5e0!3m2!1sid!2sid!4v1733219871952!5m2!1sid!2sid"
                                    width="400" height="180" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Contact?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon fa fa-map"></span><span class="text">Perumahan, Jl. Bumi Permata
                                        Sudiang 2 No.18, Kel.Sudiang Raya, Kec.Biringkanaya, Kota Makassar, Sulawesi
                                        Selatan 90552</span></li>
                                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+62
                                            813 4345 9931</span></a></li>
                                <li><a href="#"><span class="icon fa fa-envelope pr-4"></span><span
                                            class="text">Email: emk.putrakarya@gmail.com</span></a></li>
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
                        </script> All rights reserved <i class="fa fa-heart" aria-hidden="true"></i> by
                        <a href="https://colorlib.com" target="_blank">Universitas Islam Makassar</a>
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
    <script src="{{ asset('assets/admin/libs/sweetalert2/sweetalert2.all.min.js') }}"></script>
    @if (Session::has('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ Session::get('success') }}',
            })
        </script>
    @endif
    @if (Session::has('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Failed',
                text: '{{ Session::get('error') }}',
            })
        </script>
    @endif
</body>

</html>
