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
    <link rel="stylesheet" href="{{asset('css2/gerbong.css')}}">

    <title>Gerbong</title>
</head>
<body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <div class="infogerbong">Berita: Travail Menambahkan Gerbong Baru untuk Meningkatkan Layanan Perjalanan</div>

    <div class="picgerbong" id="pg1">
        <img class="pg1-img" src="{{url('/images/infogerbong.jpg')}}" alt="images"/>
    </div>

    <div class="row">
        <div class="column">
            <p>Travail, dengan bangga mengumumkan penambahan gerbong baru pada beberapa layanan kereta api mereka. Keputusan ini diambil sebagai bagian dari komitmen Travail untuk terus meningkatkan kualitas layanan dan memberikan pengalaman perjalanan terbaik kepada para penumpang.</p>
            <p>Travail, sebagai solusi inovatif dalam industri transportasi di Indonesia, senantiasa berusaha menyesuaikan diri dengan kebutuhan dan permintaan pasar. Dalam beberapa minggu mendatang, beberapa layanan kereta api Travail akan ditingkatkan kapasitasnya dengan menambahkan gerbong baru yang modern dan nyaman.</p>
            <p>Gerbong baru Travail akan dilengkapi dengan fasilitas terkini, kursi ergonomis, dan peralatan mutakhir untuk meningkatkan kenyamanan penumpang. Selain itu, setiap gerbong akan diatur dengan sistem manajemen yang canggih untuk memastikan ketepatan waktu dan efisiensi dalam perjalanan.</p>
        </div>

        <div class="column">
            <p>Dengan penambahan gerbong ini, Travail juga berharap dapat memberikan kontribusi lebih besar bagi pertumbuhan sektor pariwisata dan ekonomi di Indonesia. Travail akan terus berinovasi dan berusaha untuk menjadi mitra setia dalam memenuhi kebutuhan transportasi masyarakat Indonesia.</p>
            <p>Bagi para calon penumpang yang berencana melakukan perjalanan dengan kereta api, Travail mengundang untuk menikmati pengalaman perjalanan yang nyaman dan aman dengan fasilitas terbaik yang ditawarkan. Penumpang diingatkan untuk memesan tiket segera mengingat peningkatan permintaan dapat menyebabkan keterbatasan tempat duduk.</p>
            <p>Travail berharap penambahan gerbong ini akan semakin memperkuat posisi mereka sebagai perusahaan kereta api terkemuka di Indonesia dan akan terus berkomitmen untuk memberikan layanan terbaik bagi masyarakat. Nikmati pesona Nusantara dengan Travail, layanan kereta api yang menjadi solusi cerdas untuk perjalanan Anda.</p>
        </div>
    </div>
</body>
</html>

@include('layouts.foot')
@endsection
