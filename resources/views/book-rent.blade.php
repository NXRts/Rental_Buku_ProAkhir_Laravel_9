@extends('layouts.mainlayout')

@section('title', 'Book Rent')

@section('content')
    <div class="col-12 col-md-6 offset-md-2 col-lg-6 offset-md-3">
        <h1>Book Rent</h1>
        <hr class="mb-3">
        <form action="" method="POST">
            <div class="mb-3">
                <label for="user" class="form-label">User</label>
                <select name="user" id="user" class="form-control">
                    <option value="">Select User</option>
                    @foreach ($user as $item)
                        <option value="{{ $item->id}}">{{ $item->username }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="book" class="form-label">Book</label>
                <select name="book" id="book" class="form-control">
                    <option value="">Book</option>
                    @foreach ($books as $item)
                        <option value="{{$item->id}}">{{$item->title}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </div>
        </form>
    </div>
@endsection