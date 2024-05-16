@extends('layouts.mainlayout')

@section('title', 'Book Rent')

@section('content')
    <div class="col-12 col-md-6 offset-md-2 col-lg-6 offset-md-3">
        <h1>Book Rent</h1>
        <hr class="mb-3">
        <form action="" method="POST">
            <div class="mb-3">
                <label for="user" class="form-label">User</label>
                <select name="user" id="user" class="form-control"></select>
            </div>
            <div class="mb-3">
                <label for="book" class="form-label">Book</label>
                <select name="book" id="book" class="form-control"></select>
            </div>
            <div>
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </div>
        </form>
    </div>
@endsection