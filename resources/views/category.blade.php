@extends('layouts.mainlayout')

@section('title', 'Category')

@section('content')
    <h1>Category List</h1>

    <div class="mt-5 d-flex justify-content-end">
        <a href="category-deleted" class="btn btn-secondary me-3">Deleted list</a>
        <a href="category-add" class="btn btn-primary">Tambah Data</a>
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
                @foreach ($categories as $item)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td><b>{{ $item->name }}</b></td>
                        <td>
                            <a href="category-edit/{{ $item->slug }}"><button type="button"
                                    class="btn btn-outline-warning">Edit</button></a>
                            <a href="category-delete/{{ $item->slug }}"><button type="button"
                                    class="btn btn-outline-danger">Hapus</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
