<!DOCTYPE html>

<html class="light-style customizer-hide" data-theme="theme-default">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <title>Register | {{ config('app.name') }}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/fonts/boxicons.css') }}">

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/css/core.css') }}" class="template-customizer-core-css">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/css/theme-default.css') }}"
        class="template-customizer-theme-css">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/app.css') }}">

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}">

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/css/pages/page-auth.css') }}">
    <!-- Helpers -->
    <script src="{{ asset('assets/admin/vendor/js/helpers.js') }}"></script>
</head>

<body>
    <!-- Content -->

    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Register -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center">
                            <a href="/" class="app-brand-link gap-2">
                                <img src="{{ asset('assets/admin/img/LOGO-EMK.png') }}" alt="" class="app-brand-logo">
                            </a>
                        </div>
                        <!-- /Logo -->
                        <h4 class="mb-2">Welcome! 👋</h4>
                        <form id="formAuthentication" class="mb-3" action="{{ route('registerUser') }}"
                            method="POST" autocomplete="off">
                            @csrf
                            <x-form.input label="Name" type="text" name="nama" id="nameInput" :required="true" />
                            <x-form.input label="Email" type="email" name="email" id="emailInput"
                                :required="true" />
                            <x-form.input label="Password" name="password" type="password" id="passwordInput"
                                :required="true" />
                            <x-form.input label="Phone Number" type="tel" name="no_hp" id="phoneInput"
                                :required="true" />
                            <x-form.select label="Gender" name="jk" id="roleSelect" :required="true">
                                <option value="LAKI-LAKI">LAKI-LAKI</option>
                                <option value="PEREMPUAN">PEREMPUAN</option>
                            </x-form.select>
                            <div class="mb-3">
                                <button class="btn btn-primary d-grid w-100" type="submit">Sign up</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /Register -->
            </div>
        </div>
    </div>

    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src=" {{ asset('assets/admin/vendor/libs/jquery/jquery.js') }}"></script>
    <script src=" {{ asset('assets/admin/vendor/libs/popper/popper.js') }}"></script>
    <script src=" {{ asset('assets/admin/vendor/js/bootstrap.js') }}"></script>
    <script src=" {{ asset('assets/admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src=" {{ asset('assets/admin/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src=" {{ asset('assets/admin/js/main.js') }}"></script>

    <script src="{{ asset('assets/admin/libs/sweetalert2/sweetalert2.all.min.js') }}"></script>

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
