<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('/css/loginfix.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

</head>
<body>
    <footer class="text-center text-white" style="top: 750px; position: relative">
        <!-- Grid container -->
        <div class="container_pt-4">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a
                    class="btn btn-link btn-floating btn-lg text-light m-1"
                    href="#!"
                    role="button"
                    data-mdb-ripple-color="light"
                >
                    <i class="fab fa-facebook-f"></i>
                </a>

                <!-- Twitter -->
                <a
                    class="btn btn-link btn-floating btn-lg text-light m-1"
                    href="#!"
                    role="button"
                    data-mdb-ripple-color="light"
                >
                    <i class="fab fa-twitter"></i>
                </a>

                <!-- Google -->
                <a
                    class="btn btn-link btn-floating btn-lg text-light m-1"
                    href="#!"
                    role="button"
                    data-mdb-ripple-color="light"
                >
                    <i class="fab fa-google"></i>
                </a>

                <!-- Instagram -->
                <a
                    class="btn btn-link btn-floating btn-lg text-light m-1"
                    href="#!"
                    role="button"
                    data-mdb-ripple-color="light"
                >
                    <i class="fab fa-instagram"></i>
                </a>

                <!-- Linkedin -->
                <a
                    class="btn btn-link btn-floating btn-lg text-light m-1"
                    href="#!"
                    role="button"
                    data-mdb-ripple-color="light"
                >
                    <i class="fab fa-linkedin"></i>
                </a>

                <!-- Github -->
                <a
                    class="btn btn-link btn-floating btn-lg text-light m-1"
                    href="#!"
                    role="button"
                    data-mdb-ripple-color="light"
                >
                    <i class="fab fa-github"></i>
                </a>
            </section>
        </div>

        <!-- Copyright -->
        <div class="text-center text-light" style="font-weight:bold">
          © 2023 Copyright:
          <a class="text-light" href="#">Travail</a>
        </div>
        <!-- Copyright -->
    </footer>
</body>

</html>
