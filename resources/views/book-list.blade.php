@extends('layouts.mainlayout')

@section('title', 'Books List')

@section('content')

    <style>
    img {
        user-drag: none; /* Mencegah elemen gambar untuk didrag */
        -webkit-user-drag: none; /* Untuk browser WebKit (Safari, Chrome) */
        -webkit-touch-callout: none; /* Untuk browser WebKit (Safari, Chrome) agar tidak menampilkan menu saat tap-and-hold */
        pointer-events: none; /* Mencegah peristiwa pointer, termasuk klik kanan */
    }

    </style>

    <h1>Books List</h1>
    <hr>

    <div class="my-5">
        <div class="row">
            @foreach ($books as $item)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="{{ $item->cover != NULL ? asset('storage/cover/'.$item->cover) : asset('images/no_data.png') }}" class="card-img-top" draggable="false" alt="HH">
                        <div class="card-body">
                            <h5 class="card-title">{{$item->book_code}}</h5>
                            <p class="card-text">{{$item->title}}</p>
                            <p class="card-text text-end fw-bold {{ $item->status == 'in stock' ? 'text-success' : 'text-danger' }}">{{$item->status}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection