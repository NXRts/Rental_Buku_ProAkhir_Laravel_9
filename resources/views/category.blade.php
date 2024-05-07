@extends('layouts.mainlayout')

@section('title', 'Category')

@section('content')
    <h1>Category List</h1>

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
                  <th scope="row">{{$loop->iteration}}</th>
                  <td><b>{{$item->name}}</b></td>
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