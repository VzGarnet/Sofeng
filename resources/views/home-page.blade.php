<!doctype html>
<html lang="en">
<!-- <a href="#desc1" style="z-index: 10;">TEST BUTTON</a>
<a href="#desc2" style="z-index: 10;">TEST BUTTON</a> -->

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

  <!-- Add CSS -->
  <link href="{{ asset('css/home-page.css') }}" rel="stylesheet">
  <link href="{{ asset('css/search-home.css') }}" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Welcome - Travail</title>
  </head>

  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a href="#">
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

    <div id="container-header">
      <div class="promo" id="promo1">
        <img class="promo-img" src="{{url('/images/train1.jpg')}}" alt="images"/>
        <a href="#desc2" class="promo-text">Promo baru!</a>
    </div>
      <div class="promo" id="promo2">
        <img class="promo-img" src="{{url('/images/train2.jpg')}}" alt="images"/>
        <a href="#desc3" class="promo-text">Gerbong baru KAI</a>
      </div>
      <div class="promo" id="promo3">
        <img class="promo-img" src="{{url('/images/train3.jpg')}}" alt="images"/>
        <a href="#desc1" class="promo-text">Ayo naik kereta!</a>
      </div>
    </div>

  <!-- Search Box
  <div class="search">

        <div class="search-ticket">
            <h3>Pesan Tiket Kereta</h3>
            <i class='fas fa-train fa-2x'></i>
        </div>

        <div class="destination">
            <div class="departure">
                <h5>Stasiun Awal</h5>
                <select class="departure-select">
                    <option>Asal</option>
                </select>
            </div>

            <div class="vice-versa">
                <img src="{{url('/images/vice versa.png')}}" alt="Image"/>
            </div>

            <div class="arrival">
                <h5>Stasiun Tujuan</h5>
                <select class="arrival-select">
                    <option>Tujuan</option>
                </select>
            </div>
        </div>

     <br>

        <div class="detail">
            <div class="departure-date">
              <h5>Tanggal Pergi</h5>
              <div class="date-picker" id="datepicker">
                <input type="date" class="form-control" id="departure-date"/>
                <span class="input-group-append">
                </span>
                </span>
              </div>
            </div>

            <div class="arrival-date">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                <h5>Tanggal Pulang</h5>
                </label>
              </div>
              <div class="date-picker" id="datepicker">
                <input type="date" class="form-control" id="date"/>
                <span class="input-group-append">
                </span>
                </span>
              </div>
            </div>

            <div class="passenger">
              <h5>Penumpang</h5>
              <div class="quantity">
                <div class="adult">
                  <input type="number" id="adultTicket" name="adultTicket" min="0" max="5" value="0">
                  <label for="adultTicket">Dewasa</label>
                </div>

                <div class="child">
                  <input type="number" id="childTicket" name="childTicket" min="0" max="2" value="0">
                  <label for="childTicket">Anak</label>
                </div>
              </div>
            </div>

            <button type="submit" id="btn-search">Cari Tiket</button>


        </div>






    </div> -->

    <!-- Desc -->
    <section class="desc-box" id="desc1">
    <img class="desc-img" src="{{url('/images/train3.png')}}" alt="images"/>
    <div class="desc-container" id="cont1"></div>
    <div class="desc-text-left">Pesan Tiket Sekarang!</div>
    <div class="desc-text-fill" id="text-left">Ingin berlibur naik kereta? Ayo pesan tiket sekarang agar tidak kehabisan.<br>
    Dengan Travail, pemesanan tiket menjadi jauh lebih mudah.</div>
    <a href="/booking" class="btn-container" id="promo-btn1"><div class="promo-btn">Pesan</div></a>
    </section>
  <section class="desc-box" id="desc2">
    <img class="desc-img" src="{{url('/images/train1.jpg')}}" alt="images"/>
    <div class="desc-container" id="cont2"></div>
    <div class="desc-text-right">Promo Baru!</div>
    <div class="desc-text-fill" id="text-right">Travail menyediakan beberapa promo untuk para pengguna setia.
    <br>Yuk, cek kumpulan promo Travail di sini!</div>
    <a href="/promo" class="btn-container" id="promo-btn2"><div class="promo-btn">Pelajari</div></a>
  </section>
  <section class="desc-box" id="desc3">
    <img class="desc-img" src="{{url('/images/train2.jpg')}}" alt="images"/>
    <div class="desc-container" id="cont3"></div>
    <div class="desc-text-left">Gerbong Baru KAI</div>
    <div class="desc-text-fill" id="text-left">KAI telah menyediakan banyak gerbong baru untuk mengakomodir<br>
    kenyamanan dan keperluan para pengguna jasa kereta api.<br>Simak lebih lanjut mengenai gerbong-gebong tersebut
    di sini!</div>
    <a href="/gerbong" class="btn-container" id="promo-btn3"><div class="promo-btn">Pelajari</div></a>
  </section>
</body>



  <footer class="text-center text-white">
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
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn btn-link btn-floating btn-lg text-light m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="light"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn btn-link btn-floating btn-lg text-light m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="light"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn btn-link btn-floating btn-lg text-light m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="light"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn btn-link btn-floating btn-lg text-light m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="light"
        ><i class="fab fa-linkedin"></i
      ></a>
      <!-- Github -->
      <a
        class="btn btn-link btn-floating btn-lg text-light m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="light"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center text-light" style="font-weight:bold">
    © 2023 Copyright:
    <a class="text-light" href="#">Travail</a>
  </div>
  <!-- Copyright -->
</footer>





  </html>
