@extends('layouts.mainlayout')

@section('title', 'Delated Category')

@section('content')
    <h2>Apa kamu yakin akan menghapus Categories <span style="color: red"><u><b>{{$category->name}}</b></u></span> ?? </h2>
    <div class="mt-5">
        <a href="/category-destroy/{{$category->slug}}" class="btn btn-danger">Yakin</a>
        <a href="/categories" class="btn btn-primary" style="color: aliceblue">Tidak Jadi</a>
    </div>
@endsection