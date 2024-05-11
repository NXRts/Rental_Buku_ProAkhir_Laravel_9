@extends('layouts.mainlayout')

@section('title', 'Edit Book')

@section('content')

<style>
        /* CSS untuk gambar */
    .zoomable-image {
        cursor: pointer; /* Mengubah kursor menjadi pointer saat mengarahkan ke gambar */
        transition: transform 0.2s; /* Efek transisi saat gambar berubah ukuran */
    }

    /* CSS untuk efek zoom in saat gambar dihover */
    .zoomable-image:hover {
        transform: scale(1.2); /* Memperbesar gambar sebesar 20% saat dihover */
    }

    /* CSS untuk efek zoom in saat gambar diklik */
    .zoomable-image.clicked {
        transform: scale(1.5); /* Memperbesar gambar sebesar 50% saat diklik */
    }
</style>

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <h1>Edit Book</h1>

    <div class="mt-5 w-50">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/book-edit/{{$book->slug}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-2">
                <label for="code" class="form-label">Code</label>
                <input type="text" name="book_code" id="code" class="form-control" placeholder="Books Code" value="{{ $book->book_code }}" required>
            </div>
            <div class="mb-2">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Title Name" value="{{ $book->title }}" required>
            </div>
            
            <div class="mb-2">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" name="image">
            </div>

            <div class="mb-3">
                <label for="curentImage" class="form-label" style="display: block">Curent Image</label>
                @if ($book->cover != '')
                    <img class="zoomable-image" src="{{ asset('storage/cover/'.$book->cover) }}" alt="" width="300px">
                @else
                    <img class="zoomable-image" src="{{ asset('images/no_data.png') }}" alt="" width="300px">
                @endif
            </div>

            <div>
                <label for="category" class="form-label">Category</label>
                <select name="categories[]" id="category" class="form-control select-multiple" multiple>
                    @foreach ($categories as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="currentCategory" class="form-label">Current Category</label>
                <ul>
                    @foreach ($book->categories as $category)
                        <li>{{ $category->name}}</li>
                    @endforeach
                </ul>
            </div>

            <div class="mt-2">
                <button class="btn btn-success" type="submit">Tambah</button>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.select-multiple').select2();
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var image = document.querySelector('.zoomable-image');
        
            image.addEventListener('click', function() {
                image.classList.toggle('clicked');
            });
        });
    </script>

@endsection