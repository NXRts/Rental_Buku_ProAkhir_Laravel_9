@extends('layouts.mainlayout')

@section('title', 'Deleted Category')

@section('content')

    <h1>Deleted Category List</h1>

    <div class="mt-5 d-flex justify-content-end">
        <a href="categories" class="btn btn-primary">Back</a>
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
                  <th scope="col">Nama</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($deletedCategory as $item)
                <tr>
                  <th scope="row">{{$loop->iteration}}</th>
                  <td><b>{{$item->name}}</b></td>
                  <td>
                    <a href="category-restore/{{$item->slug}}"><button style="color: black">Restore</button></a>
                  </td>
                </tr>
                @endforeach
              </tbody>
        </table>
    </div>
@endsection