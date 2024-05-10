@extends('layouts.mainlayout')

@section('title', 'Books')

@section('content')
    <h1>Books List</h1>

    <div class="my-5">
        <table class="table table-striped">
            <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Code</th>
                  <th scope="col">Title</th>
                  <th scope="col">Status</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($books as $item)
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$item->book_code}}</td>
                <td>{{$item->title}}</td>
                <td>{{$item->status}}</td>
                <td>
                    <a href=""><button style="color: black">edit</button></a> 
                    <a href=""><button style="color: black">hapus</button></a>
                  </td>
                @endforeach
              </tbody>
        </table>
    </div>
@endsection