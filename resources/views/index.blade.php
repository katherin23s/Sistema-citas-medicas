<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Medilab Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="landingPage/assets/img/favicon.png" rel="icon">
    <link href="landingPage/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="landingPage/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="landingPage/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="landingPage/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="landingPage/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="landingPage/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="landingPage/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="landingPage/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="landingPage/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="landingPage/assets/css/style.css" rel="stylesheet">


    <!-- Plugin DateTime Picker -->

    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css" />
    <link href="css/base.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/styles/github.min.css" rel="stylesheet">
    <link href="css/tempusdominus-bootstrap-4.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"
        integrity="sha512-ubuT8Z88WxezgSqf3RLuNi5lmjstiJcyezx34yIU2gAHonIi27Na7atqzUZCOoY4CExaoFumzOsFQ2Ch+I/HCw=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha512-M5KW3ztuIICmVIhjSqXe01oV2bpe248gOxqmlcYrEzAvws7Pw3z6BK0iGbrwvdrUQUhi3eXgtxp5I8PDo9YfjQ=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.0/moment-with-locales.min.js"
        integrity="sha512-EATaemfsDRVs6gs1pHbvhc6+rKFGv8+w4Wnxk4LmkC0fzdVoyWb+Xtexfrszd1YuUMBEhucNuorkf8LpFBhj6w=="
        crossorigin="anonymous"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.31/moment-timezone-with-data-10-year-range.min.js"
        integrity="sha512-Rb9RCtecTEK3SdnnQhrZx4GM1ascb2CNHybgugRDTriP/b1As79OemxeIT5qs6RMJ/fCpeJrDjtpASh7I7EKMQ=="
        crossorigin="anonymous"></script>
    <!-- CDN example (unpkg) -->
    <script src="https://unpkg.com/dayjs@1.8.21/dayjs.min.js"></script>
    <script src="https://unpkg.com/dayjs@1.8.21/plugin/localizedFormat.js"></script>
    <script src="https://unpkg.com/dayjs@1.8.21/plugin/relativeTime.js"></script>
    <script>
        dayjs.extend(window.dayjs_plugin_localizedFormat)
        dayjs.extend(window.dayjs_plugin_relativeTime)

    </script>
    <script>
        dayjs().format();

    </script>
    <script>
        var base_url = '..';

    </script>



    <script src="js/tempusdominus-bootstrap-4.js"></script>



    <!-- Progress Steps -->
    <link href="css/progress.css" rel="stylesheet">


    <!-- =======================================================
  * Template Name: Medilab - v4.0.0
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    @include('ladingpage.header')

    <!-- ======= Hero Section ======= -->

    <!-- portada -->

    @hasSection('content')
        @yield('content')
    @endif
    <!-- End Hero -->

    <main id="main">
    </main><!-- End #main -->

    @include('ladingpage.foother')

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <!-- Vendor JS Files -->
    <script src="landingPage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="landingPage/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="landingPage/assets/vendor/php-email-form/validate.js"></script>
    <script src="landingPage/assets/vendor/purecounter/purecounter.js"></script>
    <script src="landingPage/assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="landingPage/assets/js/main.js"></script>

</body>

</html>
