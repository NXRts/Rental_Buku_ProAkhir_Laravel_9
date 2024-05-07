@extends('layouts.mainlayout')

@section('title', 'Add Category')

@section('content')
    <h1>Add New Category</h1>

    <div class="mt-5 w-50">
        <form action="" method="POST">
            <div>
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Category Name">
            </div>

            <div class="mt-2">
                <button class="btn btn-success">Tambah</button>
            </div>
        </form>
    </div>

@endsection