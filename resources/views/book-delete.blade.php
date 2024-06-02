@extends('layouts.mainlayout')

@section('title', 'Delated Book')

@section('content')
    <h2>Are you sure to delete book <span style="color: red"><u><b>{{ $book->title }}</b></u></span> ?? </h2>
    <div class="mt-5">
        <a href="/book-destroy/{{ $book->slug }}" class="btn btn-danger">Yakin</a>
        <a href="/books" class="btn btn-primary" style="color: aliceblue">Tidak Jadi</a>
    </div>
@endsection
