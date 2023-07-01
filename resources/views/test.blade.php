@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/success.css') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 id="big-text">Terima kasih telah memilih layanan Travail.</h1>
    <p id="small-text">Permintaan Anda berhasil diproses.<br>Silahkan melanjutkan dengan memilih salah satu dari menu berikut</p>

    <div class="buttonsuccess">
        <a href="/home-page" class="btn-container" id="btn1"><div class="texts-btn">Kembali ke home page</div></a>
        <a href="/cekorder" class="btn-container" id="btn2"><div class="texts-btn">Lihat riwayat pesanan</div></a>
    </div>
    <div id="image-lower"><img src="{{asset('/images/success-page.png')}}" alt=""></div>
</body>

</html>

@include('layouts.foot')
@endsection
