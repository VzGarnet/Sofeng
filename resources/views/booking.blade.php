<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/booking.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Travail</title>
    
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
        <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
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
          <a class="dropdown-item" href="#">Check Order</a>
          <a class="dropdown-item" href="#">History</a>
          <!-- <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a> -->
        </div>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
   

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

    <div class="penumpang">
        <h5>Data Penumpang</h5>
        <div class="detail-penumpang">
            <div class="data-penumpang">
                <p>Penumpang 1</p> 
                <!-- disesuaikan dengan jumlah tiket nanti -->
            </div>

            <div class="titel">
                <h6>Titel</h6>
                <select class="titel-select">
                    <option selected>Pilih Titel</option>
                </select>
            </div>

            <div class="name-form">
                <label for="formGroupExampleInput" class="name-label">Nama Lengkap</label>
                <input type="text" class="name-control" id="formGroupExampleInput" placeholder="Masukkan Nama Lengkap Anda">
            </div>

            <div class="data">
                <div class="no-telp">
                    <label for="phone">Nomor Telepon</label>
                    <input type="tel" id="phone" class="phone-control" placeholder="Masukkan Nomor Telepon Anda">
                </div>

                <div class="email">
                    <label for="email">Email</label>
                    <input type="email" id="email" class="email-control" placeholder="Masukkan Alamat Email Anda">
                </div>
            </div>

            <div class="nik">
                <label for="formGroupExampleInput" class="nik-label">NIK</label>
                <input type="text" class="nik-control" id="formGroupExampleInput" placeholder="Masukkan NIK Anda">
            </div>


        </div>


    </div>

    <div class="price">
        <h5>Rincian Harga</h5>
        <div class="detail-price">
            <button class="btn btn-link" id="btn-collapse" type="button" data-toggle="collapse" data-target="#collapseHarga" aria-expanded="true" aria-controls="collapseHarga">
                <p>Harga yang Anda Bayarkan</p>
                <div class="total">
                <p>RP 375.000,-</p>
                <div class="icon">
                    <i class="fas fa-chevron-down"></i>
                </div>

                </div>
            </button>

        <div class="collapse" id="collapseHarga">
                <div class="train-detail">
                    <h5>Nama Kereta</h5>
                    <h5>RP 375.000,-</h5>
                </div>

                <div class="more-price">
                    <h5>Convenience Fee</h5>
                    <h5>GRATIS</h5>
                </div>
                 
          
        </div>
        </div>
    </div>

    <div class="booking-btn">
        <a href="">
            <button type="button" class="btn-kursi" >Pilih Kursi</button>
        </a>
        
        <a href="#">
        <button type="button" class="btn-pesan">Pesan Tiket</button>
        </a>
        
      


    </div>







<br>




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




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    


</body>
    
 




  </html>