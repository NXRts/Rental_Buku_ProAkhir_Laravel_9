@extends('layouts.mainlayout')

@section('title', 'Profile')

@section('content')
    <h1>Selamat Datang, <span style="color: blue">{{Auth::user()->username}}</span></h1>

    <div class="mt-5">
        <h5>Your Rent Logs</h5>
        <x-rent-log-table :rentlog='$rent_logs' />
    </div>
@endsection