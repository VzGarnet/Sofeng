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
    <link rel="stylesheet" href="{{asset('css2/cekorder1.css')}}">

    <title>Cek Order</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
    </nav>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <!-- contentnya -->
    <div class="wrappers">
        <div class="choose1">
            <ul>
                <li><a href="/cekorder" id="hari">90 Hari Terakhir</a></li>
                <li><a href="/cekorder1" id="januari">Januari 2023</a></li>
                <li><a href="#" id="filter"><i class="fa fa-filter" aria-hidden="true"></i> Filter</a></li>
            </ul>
        </div>
    </div>

    <div id="month">Januari 2023</div>

    <div class="kontenhistory">
        <div id="headcontent">
            <div id="headcontenttext">Booking ID 10090022</div>
        </div>

        <div id="bodycontent">
            <div id="bodycontent1">
                 <ul>
                    <li><i style="font-size: 18px" class="fa fa-calendar-o" aria-hidden="true" id="iconfa"></i>Kamis, 12 Januari 2023</li>
                    <li><i style="font-size: 18px" class="fa fa-map-marker" aria-hidden="true" id="iconfa"></i> Gambir (JKT) &nbsp;&nbsp;<i class="fa fa-long-arrow-right" aria-hidden="true"></i> Tawang (SMG)</li>
                    <li><i style="font-size: 18px" class="fa fa-train" aria-hidden="true" id="iconfa"></i>Argo Dedy</li>
                </ul>
            </div>
        </div>

        <div id="footcontent">
            <div id="footcontent1">
                <ul>
                    <li id="fc1list1">Transaksi Selesai <i class="fa fa-check-circle-o" aria-hidden="true" id="iconfa"></i></li>
                    <li id="fc1list2">Rp. 375.000,-</li>
                </ul>
            </div>
        </div>
    </div>

    <div id="space"></div>

    <div class="kontenhistory">
        <div id="headcontent">
            <div id="headcontenttext">Booking ID 10090022</div>
        </div>

        <div id="bodycontent">
            <div id="bodycontent1">
                <ul>
                    <li><i style="font-size: 18px" class="fa fa-calendar-o" aria-hidden="true" id="iconfa"></i>Minggu, 15 Januari 2023</li>
                    <li><i style="font-size: 18px" class="fa fa-map-marker" aria-hidden="true" id="iconfa"></i> Tawang (SMG) &nbsp;&nbsp;<i class="fa fa-long-arrow-right" aria-hidden="true"></i> Gambir (JKT)</li>
                    <li><i style="font-size: 18px" class="fa fa-train" aria-hidden="true" id="iconfa"></i>Argo Putra</li>
                </ul>
            </div>
        </div>

        <div id="footcontent">
            <div id="footcontent1">
                <ul>
                    <li id="fc1list1">Transaksi Selesai <i class="fa fa-check-circle-o" aria-hidden="true" id="iconfa"></i></li>
                    <li id="fc1list2">Rp. 1.000.000,-</li>
                </ul>
            </div>
        </div>
    </div>
</body>

<footer class="text-center text-white" style="top: 750px; position: relative">
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
</footer>

</html>