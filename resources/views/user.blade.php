@extends('layouts.mainlayout')

@section('title', 'User')

@section('content')
    <h1>Users List</h1>

    <div class="mt-5 d-flex justify-content-end">
        <a href="#" class="btn btn-secondary me-3">Banned user list</a>
        <a href="/registered-users" class="btn btn-success">New Registered User</a>
    </div>

    <div class="mt-5">
      @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }} 
          </div>
      @endif
    </div>

    <div class="my-5">
        <table class="table table-striped">
            <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Username</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Addres</th>
                  <th scope="col">Status</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    @foreach ($users as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->username}}</td>
                            <td>
                                @if ($item->phone)
                                    {{$item->phone}}
                                @else
                                    <i>NULL</i>
                                @endif
                            </td>
                            <td>{{$item->address}}</td>
                            <td><b>{{$item->status}}</b></td>
                            <td>
                                <a href="/{{$item->slug}}"><button type="button" class="btn btn-outline-warning">Detail</button></a> 
                                <a href="/{{$item->slug}}"><button type="button" class="btn btn-outline-danger">Ban user</button></a>
                              </td>
                        </tr>
                    @endforeach
                </tr>
              </tbody>
        </table>
    </div>
@endsection