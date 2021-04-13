<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Star Admin Premium Bootstrap Admin dash-board Template</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="dash-board/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="dash-board/assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="dash-board/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="dash-board/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="dash-board/assets/vendors/css/vendor.bundle.addons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="dash-board/assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="dash-board/assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="dash-board/assets/images/favicon.ico" />


</head>

<body>
    <div class="container-scroller">


        @include('pages.administrador.header')
        <!-- si el nombre de la ruta -->
        <!-- la ruta indica al hijo -->

        @if(Request::is('main'))
        @yield('content')
        @elseif(Request::is('citas'))
        @yield('citas')
        @elseif(Request::is('medicos'))
        @yield('medicos')
        @elseif(Request::is('configuracion'))
        @yield('configuracion')
        @elseif(Request::is('consultorios'))
        @yield('consultorios')
        @elseif(Request::is('especializacion'))
        @yield('especializacion')
        @elseif(Request::is('usuarios'))
        @yield('usuarios')
        @elseif(Request::is('facturacion'))
        @yield('facturacion')
        @elseif(Request::is('pacientes'))
        @yield('pacientes')
        @elseif(Request::is('receta'))
        @yield('receta')
        @stack('jsreceta')
        @elseif(Request::is('calendario'))
        @stack('csscalendario')
        @yield('calendario')
        @stack('jscalendario')
        @endif
        @include('pages.administrador.foother')

        <!-- partial -->
    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="dash-board/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="dash-board/assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="dash-board/assets/js/shared/off-canvas.js"></script>
    <script src="dash-board/assets/js/shared/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="dash-board/assets/js/demo_1/dash-board.js"></script>
    <!-- End custom js for this page-->
    <script src="dash-board/assets/js/shared/jquery.cookie.js" type="text/javascript"></script>




    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <script src="vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="js/shared/off-canvas.js"></script>
    <script src="js/shared/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="js/shared/chart.js"></script>
    <!-- End custom js for this page-->
    <script src="js/shared/jquery.cookie.js" type="text/javascript"></script>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/ajax.js') }}" defer></script>
    <!-- <script src="/js/ajax.js"></script> -->
</body>

</html>