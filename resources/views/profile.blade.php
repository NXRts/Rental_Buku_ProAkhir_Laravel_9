@extends('layouts.mainlayout')

@section('title', 'Profile')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .carousel-item {
            height: 50vh;
        }
        .carousel-item img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            object-position: center;
        }
        h5{
            color: lightgrey
        }
        p{
            color: azure
        }
    </style>

    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="{{ asset('images/1.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5> "Membaca buku akan membuat otak kamu makin cerdas dan bertambah pengetahuan baru. Menulis setiap hari akan membuat tulisanmu makin bagus dan enak dibaca."</h5>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="{{ asset('images/2.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>"Kalau engkau hanya membaca buku yang dibaca semua orang, engkau hanya bisa berpikir sama seperti semua orang."</h5>
                    <p>Haruki Murakami</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('images/3.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>"Kuasailah semua buku, tapi jangan biarkan buku menguasai Anda. Membacalah untuk hidup, bukan hidup untuk membaca." </h5>
                    <p>-Owen Meredith</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <br>

    {{-- MAIN  --}}
    <h1>Selamat Datang, <span style="color: blue">{{ Auth::user()->username }}</span></h1>

    <div class="mt-5">
        <h4>Your Rent Logs</h4>
        <x-rent-log-table :rentlog='$rent_logs' />
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
@endsection
