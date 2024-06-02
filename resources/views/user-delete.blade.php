@extends('layouts.mainlayout')

@section('title', 'Delated Category')

@section('content')
    <h2>Apa kamu yakin akan menghapus User <span style="color: red"><u><b>{{ $user->username }}</b></u></span> ?? </h2>
    <div class="mt-5">
        <a href="/user-destroy/{{ $user->slug }}" class="btn btn-danger">Yakin</a>
        <a href="/users" class="btn btn-primary" style="color: aliceblue">Tidak Jadi</a>
    </div>
@endsection
