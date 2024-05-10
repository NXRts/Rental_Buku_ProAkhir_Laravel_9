@extends('layouts.mainlayout')

@section('title', 'Books')

@section('content')
    <h1>Books List</h1>

    <div class="mt-5 d-flex justify-content-end">
        <a href="#" class="btn btn-secondary me-3">Deleted list</a>
        <a href="book-add" class="btn btn-primary">Tambah Data</a>
    </div>

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
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->book_code}}</td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->status}}</td>
                    <td>
                        <a href="#"><button style="color: black">edit</button></a>
                        <a href="#"><button style="color: black">hapus</button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
@endsection