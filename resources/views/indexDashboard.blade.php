<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Star Admin Premium Bootstrap Admin dash-board Template</title>
    <!-- plugins:css -->
    <link rel="stylesheet"
        href="{{ asset('dash-board/assets') }}/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('dash-board/assets') }}/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet"
        href="{{ asset('dash-board/assets') }}/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ asset('dash-board/assets') }}/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="{{ asset('dash-board/assets') }}/vendors/css/vendor.bundle.addons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <!-- JQUERY UI -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <!-- libreria UI-->
    <link rel="stylesheet" href="{{ asset('vendor/jquery-ui/jquery-ui.min.css') }}">

    <!-- Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- DataTable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js">
    </script>

    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('dash-board/assets') }}/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('dash-board/assets') }}/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="{{ asset('dash-board/assets') }}/images/favicon.ico" />


    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    <div class="container-scroller">
        @include('pages.administrador.header')
        <!-- si el nombre de la ruta -->
        <!-- la ruta indica al hijo -->
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        @yield('content')
        <!-- Ventanas -->
        @include('pages.administrador.foother')
        <!-- partial -->
    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('dash-board/assets') }}/vendors/js/vendor.bundle.base.js"></script>
    <script src="{{ asset('dash-board/assets') }}/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('dash-board/assets') }}/js/shared/off-canvas.js"></script>
    <script src="{{ asset('dash-board/assets') }}/js/shared/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('dash-board/assets') }}/js/demo_1/dash-board.js"></script>
    <!-- End custom js for this page-->
    <script src="{{ asset('dash-board/assets') }}/js/shared/jquery.cookie.js" type="text/javascript"></script>




    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('vendors') }}/js/vendor.bundle.base.js"></script>
    <script src="{{ asset('vendors') }}/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('js') }}/shared/off-canvas.js"></script>
    <script src="{{ asset('js') }}/shared/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('js') }}/shared/chart.js"></script>
    <!-- End custom js for this page-->
    <script src="{{ asset('js') }}/shared/jquery.cookie.js" type="text/javascript"></script>
    <!-- buscador autocomplete -->
    <script src="vendors/jquery-ui/jquery-ui.min.js"> </script>
    <script>
        var medicos = ['medico1', 'medico2', 'medico3', 'medico4'];
        $('#search').autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: "busqueda/usuarios",
                    dataType: 'json',
                    data: {
                        term: request.term
                    },
                    success: function(data) {
                        response(data)
                    }
                })
            }
        });

    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/ajax.js') }}" defer></script>
    @stack('js')
    <!-- <script src="/js/ajax.js"></script> -->
</body>

</html>
