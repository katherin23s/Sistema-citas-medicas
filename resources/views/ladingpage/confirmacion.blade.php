<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Confirmacion de cita</title>
</head>

<body>
    <div class="jumbotron-fluid">

        <div class="jumbotron-fluid">
            <div class="container-fluid special stripes">
                <div class="container push-down mx-auto">
                    <h1 class="jumbotron-heading text-white text-center"> <svg
                            class="jumbotron-heading text-white text-center" width="36" height="36"
                            viewBox="0 0 612 612" xmlns="http://www.w3.org/2000/svg" focusable="false">
                            <title>Bootstrap</title>
                            <path fill="currentColor"
                                d="M510 8a94.3 94.3 0 0 1 94 94v408a94.3 94.3 0 0 1-94 94H102a94.3 94.3 0 0 1-94-94V102a94.3 94.3 0 0 1 94-94h408m0-8H102C45.9 0 0 45.9 0 102v408c0 56.1 45.9 102 102 102h408c56.1 0 102-45.9 102-102V102C612 45.9 566.1 0 510 0z">
                            </path>
                            <path fill="currentColor"
                                d="M196.77 471.5V154.43h124.15c54.27 0 91 31.64 91 79.1 0 33-24.17 63.72-54.71 69.21v1.76c43.07 5.49 70.75 35.82 70.75 78 0 55.81-40 89-107.45 89zm39.55-180.4h63.28c46.8 0 72.29-18.68 72.29-53 0-31.42-21.53-48.78-60-48.78h-75.57zm78.22 145.46c47.68 0 72.73-19.34 72.73-56s-25.93-55.37-76.46-55.37h-74.49v111.4z">
                            </path>
                        </svg><br>CONFIRMACIÓN DE CITA </h1>
                    <p class="lead text-white text-center mx-auto" style="width: 60%;" class=" ">Su cita ha sido
                        confirmada. <br>
                    <div class="row justify-content-center">
                        <a href="{{ asset('ladingpage') }}" class="btn btn-outline-light m-1">Regresar a página
                            principal</a>
                    </div>
                </div>
            </div>
            <!--   /container  -->
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
        </script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
        -->
</body>

</html>
<style>
    .stripes {
        background-image: linear-gradient(to right, #1977cc 0%, #1977cc 12.5%, #1977cc 12.5%, #1977cc 25%, #1977cc 25%, #50d8f6 37.5%, #50d8f6 37.5%, #50d8f6 50%, #50d8f6 50%, #50d8f6 62.5%, #50d8f6 62.5%, #1977cc 75%, #1977cc 75%, #1977cc 87.5%, #1977cc 87.5%);
        background-attachment: fixed;
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        min-height: 100vh;
    }

    .push-down {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        top: 40%;
    }

    [class*="col-"] {
        padding-top: 1rem;
        padding-bottom: 1rem;
        background-color: rgba(86, 61, 124, .15);
        border: 1px solid rgba(86, 61, 124, .2);
    }

    @media (max-height: 700px) {
        .mobile-hide {
            display: none;
        }
    }

</style>
