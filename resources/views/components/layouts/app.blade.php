<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Mofi admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Mofi admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('import/assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('import/assets/images/favicon.png') }}" type="image/x-icon">
    <title>{{ $title ?? 'Page Title' }}</title>

    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('import/assets/css/font-awesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('import/assets/css/vendors/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('import/assets/css/vendors/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('import/assets/css/vendors/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('import/assets/css/vendors/feather-icon.css') }}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('import/assets/css/vendors/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('import/assets/css/vendors/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('import/assets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('import/assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('import/assets/css/vendors/owlcarousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('import/assets/css/vendors/sweetalert2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('import/assets/css/c3.css') }}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('import/assets/css/vendors/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('import/assets/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('import/assets/css/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('import/assets/css/responsive.css') }}">
    @livewireStyles
    @stack('styles')
</head>

<body>
    <div class="loader-wrapper">
        <div class="loader loader-1">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>
            <div class="loader-inner-1"></div>
        </div>
    </div>
    <!-- loader ends-->

    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        @include('components.partials.header')
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            @include('components.partials.sidebar')
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    {{ $slot }}
                </div>
                <!-- Container-fluid Ends-->
            </div>
            <!-- footer start-->
            @include('components.partials.footer')
        </div>
    </div>
    
    <livewire:admin.modal.modal-details />

    <!-- latest jquery-->
    <script src="{{ asset('import/assets/js/jquery.min.js') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('import/assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <!-- feather icon js-->
    <script src="{{ asset('import/assets/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('import/assets/js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- scrollbar js-->
    <script src="{{ asset('import/assets/js/scrollbar/simplebar.js') }}"></script>
    <script src="{{ asset('import/assets/js/scrollbar/custom.js') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('import/assets/js/config.js') }}"></script>
    <!-- Plugins JS start-->
    <script src="{{ asset('import/assets/js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('import/assets/js/sidebar-pin.js') }}"></script>
    <script src="{{ asset('import/assets/js/slick/slick.min.js') }}"></script>
    <script src="{{ asset('import/assets/js/slick/slick.js') }}"></script>
    <script src="{{ asset('import/assets/js/header-slick.js') }}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ asset('import/assets/js/script.js') }}"></script>
    <script src="{{ asset('import/assets/js/sweet-alert/sweetalert.min.js') }}"></script>
    <!-- Plugin used-->
    @livewireScripts
    @stack('scripts')
    
    <script>
        document.addEventListener('livewire:init', function() {
            Livewire.on('swal:success', param => {
                if (Array.isArray(param) && param.length > 0) {
                    param = param[0];
                }
                Swal.fire({
                    icon: param.type,
                    title: param.title,
                    text: param.text,
                }).then(() => {
                    window.location.href = param.route;
                });
            });
        });
    </script>
</body>

</html>


{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Mofi admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Mofi admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('import/images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('import/images/favicon.png') }}" type="image/x-icon">
    <title>{{ $title ?? 'Page Title' }}</title>

    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('import/css/font-awesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('import/css/vendors/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('import/css/vendors/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('import/css/vendors/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('import/css/vendors/feather-icon.css') }}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('import/css/vendors/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('import/css/vendors/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('import/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('import/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('import/css/vendors/prism.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('import/css/vendors/sweetalert2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('import/css/c3.css') }}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('import/css/vendors/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('import/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('import/css/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('import/css/responsive.css') }}">
    @livewireStyles
    @stack('styles')
</head>

<body>
    <div class="loader-wrapper">
        <div class="loader loader-1">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>
            <div class="loader-inner-1"></div>
        </div>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        @include('components.partials.header')
        <!-- Page Body Start-->
        <div class="page-body-wrapper compact-wrapper">
            @include('components.partials.sidebar')
            <div class="page-body">
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    {{ $slot }}
                </div>
                <!-- Container-fluid Ends-->
            </div>
            @include('components.partials.footer')
        </div>
    </div>

    <livewire:admin.modal.modal-details />

    <!-- latest jquery-->
    <script src="{{ asset('import/js/jquery.min.js') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('import/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <!-- feather icon js-->
    <script src="{{ asset('import/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('import/js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- scrollbar js-->
    <script src="{{ asset('import/js/scrollbar/simplebar.js') }}"></script>
    <script src="{{ asset('import/js/scrollbar/custom.js') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('import/js/config.js') }}"></script>
    <!-- Plugins JS start-->
    <script src="{{ asset('import/js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('import/js/sidebar-pin.js') }}"></script>
    <script src="{{ asset('import/js/sweet-alert/sweetalert.min.js') }}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ asset('import/js/script.js') }}"></script>
    <script src="{{ asset('import/js/script1.js') }}"></script>

    <!-- Plugin used-->
    <script>
        document.addEventListener('livewire:init', function() {
            Livewire.on('swal:success', param => {
                if (Array.isArray(param) && param.length > 0) {
                    param = param[0];
                }

                console.log(param);
                Swal.fire({
                    icon: param.type,
                    title: param.title,
                    text: param.text,
                }).then(() => {
                    window.location.href = param.route;
                });
            });
        });
    </script>
    @livewireScripts
    @stack('scripts')
</body>

</html> --}}
