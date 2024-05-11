@extends('layouts.mainlayout')

@section('title', 'Deleted Books')

@section('content')

    <h1>Deleted Book List</h1>

    <div class="mt-5 d-flex justify-content-end">
        <a href="/books" class="btn btn-primary">Back</a>
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
                  <th scope="col">Code Book</th>
                  <th scope="col">title</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($deletedBooks as $item)
                <tr>
                  <th scope="row">{{$loop->iteration}}</th>
                  <td><b>{{$item->book_code}}</b></td>
                  <td><b>{{$item->title}}</b></td>
                  <td>
                    <a href="/book-restore/{{$item->slug}}"><button style="color: black">Restore</button></a>
                  </td>
                </tr>
                @endforeach
              </tbody>
        </table>
    </div>
@endsection