@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css2/about.css')}}">

    <title>Cek Order</title>
</head>
<body>
{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a href="/welcome">
        <img src="{{url('/images/travail1.png')}}" alt="Image"/>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="/home">Home<span class="sr-only">(current)</span></a>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link" href="#">Bebas</a>
        </li> -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Booking
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/search">Booking Ticket</a>
            <a class="dropdown-item" href="/cekorder">Check Order</a>
            <!-- <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a> -->
            </div>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
        </li> -->
        <li class="nav-item">
            <a class="nav-link" href="/about">About Us</a>


        </ul>
        <li class="Login">
            <a class="login" href="/login">Login/Sign Up</a>
        </li>
        <!-- <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> -->
    </div>
    </nav> --}}

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- <div class="desc-box" id="desc1">
        <div class="desc-text-center">ABOUT</div>
    </div> -->

    <div class="headerabout">
        <h1>About Us<h1>
    </div>

    <div class="row">
        <div class="column">
            <h2>Travail: <br>Connecting Indonesia</h2>
            <p>Travail adalah aplikasi untuk mengatasi permasalahan transportasi khususnya di Indonesia. Kami menyadari bahwa kemacetan di daerah JABODETABEK merupakan suatu yang sangat sering terjadi. Travail menciptakan pengalaman transportasi umum yang cepat dan efisien. Kami sangat memperhatikan pengalaman pengguna sehingga mudah digunakan bagi siapa saja. Dikarenakan Travail menyediakan fitur yang dirancang untuk memenuhi kebutuhan user, seperti pemesanan tiket pulang dan pemesanan tiket pergi.</p>
            <p>Kami berkomitmen untuk terus mengembangkan aplikasi kami dengan mengambil masukan dari masyarakat untuk meningkatkan kualitas layanan kami. Travail percaya bahwa transportasi umum yang efisien dan mudah diakses merupakan suatu kunci untuk mengatasi kemacetan yang terjadi di Indonesia. Dengan teknologi terkini dan juga terfokus pada pengalaman pengguna, Travail bertujuan untuk menjadi solusi yang dapat diandalkan bagi masyarakat Indonesia dalam perjalanan sehari-hari mereka.</p>
        </div>
        <div class="column">
            <h2>Travel & Rail</h2>
            <p>Travail, sebagai kepanjangan dari TRAVel and rAIL, hadir sebagai solusi inovatif untuk mengatasi berbagai permasalahan yang terkait dengan industri transportasi di Indonesia. Dengan menyediakan layanan kereta api yang modern, efisien, dan handal, Travail bertujuan untuk memberikan pengalaman perjalanan yang luar biasa bagi para penumpangnya. Dukungan teknologi terkini dan sistem manajemen yang canggih memungkinkan Travail untuk menyediakan jaringan rel kereta api yang terintegrasi dengan baik, menghubungkan berbagai kota dan destinasi wisata utama di seluruh Nusantara.</p>
            <p>Selain itu, Travail juga berkomitmen untuk meningkatkan kualitas layanan dengan mengutamakan keamanan, ketepatan waktu, serta memberikan pelayanan terbaik kepada setiap penumpangnya. Dengan menghadirkan kereta api sebagai sarana transportasi yang ramah lingkungan dan berbiaya terjangkau, Travail berharap dapat berperan aktif dalam mendukung pertumbuhan sektor pariwisata dan ekonomi negara. Melalui upaya ini, Travail berkomitmen untuk menjadi mitra setia dalam mewujudkan masa depan transportasi yang lebih baik dan berkelanjutan di Indonesia.</p>
        </div>
    </div>

</body>

{{-- <footer class="text-center text-white" style="top: 750px; position: relative">
    <!-- Grid container -->
    <div class="container pt-4">
        <!-- Section: Social media -->
        <section class="mb-4">
        <!-- Facebook -->
        <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-facebook-f"></i
        ></a>

        <!-- Twitter -->
        <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-twitter"></i
        ></a>

        <!-- Google -->
        <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-google"></i
        ></a>

        <!-- Instagram -->
        <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-instagram"></i
        ></a>

        <!-- Linkedin -->
        <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-linkedin"></i
        ></a>
        <!-- Github -->
        <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-github"></i
        ></a>
        </section>
        <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center text-dark p-3">
        © 2023 Copyright:
        <a class="text-dark" href="#">Travail</a>
    </div>
    <!-- Copyright -->
</footer> --}}

</html>

@include('layouts.foot')
@endsection
