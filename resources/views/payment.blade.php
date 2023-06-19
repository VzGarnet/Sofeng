<!-- Variables -->
<!-- 
{{ $testVar = "hello" }}
{{ $passengerName = "Kevin Dedy Setiawan" }}
{{ $nik = "1111111111" }}
{{ $email = "kevin.stwn@email.com" }}
{{ $seatNo = "A14" }}
{{ $carNo = 5 }}

{{ $price = 375000 }}
{{ $addFee = 500 }}
{{ $subtotal = $price + $addFee }}
{{ $serviceFee = 7500 }}
{{ $uniqueCodeFee = 420 }}
{{ $total = $subtotal + $serviceFee + $uniqueCodeFee }}


{{ $trainName = "Argo Dedy" }}
{{ $class = "Ekonomi I" }}
{{ $type = "Transit" }}

{{ $departStation = "Gambir" }}
{{ $departCity = "JKT" }}
{{ $arriveStation = "Tawang" }}
{{ $arriveCity = "SMG" }}
-->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Additional CSS -->
    <link rel="stylesheet" href="{{ asset('css/payment.css') }}">

    <!-- Additional JS -->
    <script src="\public\js\payment.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Travail - Payment</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a href="/home">
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
          <a class="dropdown-item" href="/cekorder1">Check Order</a>
          <a class="dropdown-item" href="#">History</a>
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

    <h1 class="title">Order Details</h1>

    <div class="order-det">
        <div class="container-head">Ticket Information</div>
        <div class="ticket-det">
          <div class="big-text" id="train-name">{{ $trainName }}<div class="small-text">{{ $class }}</div></div>
          <div class="circle" id="arrive-crc"></div>
          <div class="vl"></div>
          <div class="circle" id="depart-crc"></div>
          <div class="big-text" id="depart-schedule">00:01<div class="small-text">12 Januari 2023</div></div>
          <div class="big-text" id="arrive-schedule">05:12<div class="small-text">12 Januari 2023</div></div>
          <div class="big-text" id="depart-stn">{{ $departStation }} Station<div class="small-text">({{ $departCity }})</div></div>
          <div class="big-text" id="arrive-stn">{{ $arriveStation }} Station<div class="small-text">({{ $arriveCity }})</div></div>
        </div>
    </div>

    <div class="small-containers" id="passenger-info">
        <div class="container-head">Passenger Data</div>
        <div>
            <p id="passenger-name">{{ $passengerName }}</p>
            <p>NIK        : <div class="datas">{{ $nik }}</div></p>
            <p>Email   : <div class="datas">{{ $email }}</div></p>
            <p>Seat       : <div class="datas">{{ $seatNo }}/{{ $carNo }}</div></p>
        </div>
    </div>

    <div class="small-containers" id="payment-info">
        <div class="container-head">Payment Details</div>
        <div>
            <p>{{ $departStation }} ({{ $departCity }}) - {{ $arriveStation }} ({{ $arriveCity }})<p class="datas">Rp {{ number_format($price,0,",","." ) }},-</p></p>
            <p style="color: green;">Convenience fee<p class="datas" style="color: green;">Rp {{ number_format($addFee,0,",","." ) }},-</p></p>
        </div>
        <div class="hl"></div>
        <div id="total-fee">Total<div id="total-text">Rp {{ number_format($subtotal,0,",","." ) }},-</div></div>
    </div>

    <h1 class="title" id="payment-title">Payment</h1>
    <div class="payment-box">
      <div class="left-box">
        <button class="payment-type" onclick="creditCard()">Credit Card</button>
        <button class="payment-type" onclick="virtualAcc()">Virtual Account</button>
        <button class="payment-type" onclick="atm()">ATM</button>
        <button class="payment-type" onclick="karenMart()">Karen Mart</button>
        <button class="payment-type" onclick="cbaWan()">CBA WanKlick</button>
      </div>
      <div class="right-box">
        <div class="payment-form" id="credit-card">
          <h2 class="form-title">Credit Card</h2>
          <form>
            <div class="subtitle">Destination</div>
            <div class="payment-choice">
              <input type="radio" id="cba-card" name="payment-choice" value="cba-card">
              <label for="cba-card">CBA Card<img class="payment-logo" id="logo-cba" src="{{url('/images/logo-cba.png')}}" alt="Image"/></label>
            </div>
            <div class="payment-choice">
              <input type="radio" id="inb-card" name="payment-choice" value="inb-card">
              <label for="inb-card">INB Card<img class="payment-logo" id="logo-inb" src="{{url('/images/logo-inb.png')}}" alt="Image"/></label>
            </div>
            <div class="payment-choice">
              <input type="radio" id="diriman-card" name="payment-choice" value="diriman-card">
              <label for="diriman-card">Diriman Card<img class="payment-logo" id="logo-diriman" src="{{url('/images/logo-diriman.png')}}" alt="Image"/></label>
            </div>
          </form>
        </div>
        <div class="payment-det">
          <h2 class="form-title">Payment Details</h2>
          <div>{{ $departStation }} ({{ $departCity }}) - {{ $arriveStation }} ({{ $arriveCity }}) x 1 (Adult)<span class="tabs">Rp {{ number_format($subtotal,0,",","." ) }},-</span></div>
          <div style="color: green;">Convenience Fee<span class="tabs">Rp 0,-</span></div>
          <div>Service Fee<span class="tabs">Rp {{ number_format($serviceFee,0,",","." ) }},-</span></div>
          <div>Unique Code<span class="tabs">Rp {{ number_format($uniqueCodeFee,0,",","." ) }},-</span></div>
          <h2 class="form-title" id="endTotal">Total<span class="tabs">Rp {{ number_format($total,0,",","." ) }},-</span></h2>
        </div>
      </div>

      <!-- <div class="right-box">
        <div class="payment-form" id="virtual-acc">
          <h2 class="form-title">Credit Card</h2>
          <form>
            <div class="subtitle">Destination</div>
            <div class="payment-choice">
              <input type="radio" id="cba-card" name="payment-choice" value="cba-card">
              <label for="cba-card">CBA Card<img class="payment-logo" id="logo-cba" src="{{url('/images/logo-cba.png')}}" alt="Image"/></label>
            </div>
            <div class="payment-choice">
              <input type="radio" id="inb-card" name="payment-choice" value="inb-card">
              <label for="inb-card">INB Card<img class="payment-logo" id="logo-inb" src="{{url('/images/logo-inb.png')}}" alt="Image"/></label>
            </div>
            <div class="payment-choice">
              <input type="radio" id="diriman-card" name="payment-choice" value="diriman-card">
              <label for="diriman-card">Diriman Card<img class="payment-logo" id="logo-diriman" src="{{url('/images/logo-diriman.png')}}" alt="Image"/></label>
            </div>
          </form>
        </div>
      </div>
    </div> -->

</body>


  <footer class="text-center text-white">
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

<script>
  function creditCard() {
    var x = document.getElementById("credit-card");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
</script>



  </html>