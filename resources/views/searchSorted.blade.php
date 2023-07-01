@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="en">

<?php
use Illuminate\Support\Carbon;

    $trainName = 'Argo Dedy';
    $trainType = 'Economy I';
    $departTime = Carbon::parse('2023-01-12 00:01:00');
    $formatedDepart = $departTime->format('H:i');
    $arriveTime = Carbon::parse('2023-01-12 05:12:00');
    $formatedArrive = $arriveTime->format('H:i');
    $diffHour = $departTime->diffInHours($arriveTime);
    $diffMin = ($departTime->diffInMinutes($arriveTime))%60;
    $departStation = "Gambir";
    $departCity = "JKT";
    $arriveStation = "Tawang";
    $arriveCity = "SMG";
    $price = 375000;
?>

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/search.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Search Train</title>

  </head>
  <body>
  {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
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

<form action="{{ route('cari-tiket') }}" method="POST">
    @csrf
    <div class="search">
        <div class="search-ticket">
            <h3>Pesan Tiket Kereta</h3>
            <i class='fas fa-train fa-2x'></i>
        </div>

        <div class="destination">
            <div class="departure">
                <h5>Stasiun Awal</h5>
                <select class="departure-select" name="stAwal">
                  <option selected>Pilih Stasiun Keberangkatan</option>
                    <option value="JKT">JKT</option>
                    <option value="SMG">SMG</option>
                </select>
            </div>

            <div class="vice-versa">
                <img src="{{url('/images/3031716.png')}}" alt="Image"/>
            </div>

            <div class="arrival">
                <h5>Stasiun Tujuan</h5>
                <select class="arrival-select" name="stAkhir">
                  <option selected>Pilih Stasiun Tujuan</option>
                    <option value="JKT">JKT</option>
                    <option value="SMG">SMG</option>
                </select>
            </div>
        </div>

        <br>

        <div class="detail">
            <div class="departure-date">

                <h5>Tanggal Pergi</h5>

                <div class="date-picker" id="datepicker">
                    <input type="date" class="form-control" id="departure-date" name="tanggal">
                </div>

            </div>

           {{-- <div class="arrival-date">
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
            </div> --}}

            {{-- <div class="passenger">

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
            </div> --}}

            <button type="submit" id="btn-search">Cari Tiket</button>


        </div>
    </div>
</form>


  {{-- <form action="{{ route('process-form') }}" method="POST" style="margin:2vw">
    @csrf
    <input type="hidden" name="userInput" value="0">
    <button type="submit">Sort 1</button>
</form>

<form action="{{ route('process-form') }}" method="POST" style="margin:2vw">
    @csrf
    <input type="hidden" name="userInput" value="1">
    <button type="submit">Sort 2</button>
</form> --}}

{{-- @if ($userInput)
    @php
        $argos = DB::table('argo')->orderBy('harga')->get();
    @endphp
@else
    @php
        $argos = DB::table('argo')->orderByDesc('harga')->get();
    @endphp
@endif --}}

@php
    $argos = DB::table('argo')->where('stBID', '=', $stasiunAwal)
    ->where('stTID', '=', $stasiunAkhir)
    ->where('tanggal', '=', $tanggalBrgkt)->get();

    $info = DB::table('argo')->where('stBID', '=', $stasiunAwal)->first();
@endphp

<h3 style="margin-top: 2vh; margin-left: 5vw; ">{{ $info->stBrgkt}} ({{($stasiunAwal)}}) - {{$info->stTiba}} ({{($stasiunAkhir)}})</h3>

  <div class="head-container">
    <div style="font-size: 3vh; font-weight: 600">Departure Train</div>

    @php
        $dateString = Carbon::parse($tanggalBrgkt);
    @endphp

    <div style="font-size: 2vh">{{ $dateString->format('D, d F Y') }}</div>
    <div style="font-size: 2vh">{{ $info->stBrgkt}} ({{($stasiunAwal)}}) ->  {{$info->stTiba}} ({{($stasiunAkhir)}})</div>
  </div>

 @foreach ($argos as $argo)
 <div class="train-cont">
    <form action="{{ route('process-form') }}" method="POST">
        @csrf

        <div class="train-detail">
          <div class="big-text-argo">
            <div class="big-text" id="train-name">{{ $argo->namaArgo }}</div>
            <div class="small-text" id="train-class">{{ $argo->kelasArgo }}</div>
          </div>
          <h3 class="price">Rp {{ number_format($argo->harga,0,",","." ) }},-</h3>
        </div>

        <div class="detailed-info">
          <div class="dept-time">
            <div class="small-text" id="dep-head">Departure:</div>
            <div class="big-text" id="dep-time">{{ $formatedDepart }}</div>
            <div class="small-text" id="dep-station">{{ $argo->stBrgkt }} ({{ $argo->stBID }})</div>
          </div>

          <div class="arr-time">
            <div class="small-text" id="arr-head">Arrival:</div>
            <div class="big-text" id="arr-time">{{ $formatedArrive }}</div>
            <div class="small-text" id="arr-station">{{ $argo->stTiba }} ({{ $argo->stTID }})</div>
          </div>

          <div class="est-time">
            <div class="small-text" id="est-head">Estimate:</div>
            <div class="big-text" id="est-time">{{ $diffHour }} hour(s) {{ $diffMin }} minute(s)</div>
            <div class="small-text" id="est-type">Transit</div>
          </div>

          <div>
            <button type="submit" value="{{ $argo->argoID }}" class="btn-search-select" name="identifierArgo">Pilih Tiket</button>
          </div>


        </div>

    </form>
 </div>
@endforeach



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>


  </html>

  @include('layouts.foot')
@endsection
