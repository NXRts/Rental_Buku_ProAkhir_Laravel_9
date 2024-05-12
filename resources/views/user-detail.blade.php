@extends('layouts.mainlayout')

@section('title', 'User Detail')

@section('content')
    <h1>Detail User</h1>

    <div class="mt-5 d-flex justify-content-end">
        <a href="/users" class="btn btn-secondary me-3">Back</a>
        @if ($user->status == 'inactive')
            <a href="/user-approve/{{$user->slug}}" class="btn btn-primary me-3">Approve User</a>
        @endif
    </div>

    <div class="mt-5">
      @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }} 
          </div>
      @endif
    </div>

    <div class="my-5 w-25">
        <div class="mb-3">
            <label for="" class="form-label">Username</label>
            <input type="text" class="form-control" readonly value="{{$user->username}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Phone</label>
            <input type="text" class="form-control" readonly value="{{$user->phone}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Address</label>
            <textarea class="form-control" style="resize: none" readonly name="" id="" cols="30" rows="5">{{$user->address}}</textarea>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Status</label>
            <input type="text" class="form-control" readonly value="{{$user->status}}">
        </div>
    </div>
@endsection