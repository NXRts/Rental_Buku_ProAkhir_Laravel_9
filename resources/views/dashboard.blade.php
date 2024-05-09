@extends('layouts.mainlayout')

@section('title', 'Dashboard')

@section('content')

    <h1>Selamat Datang, <span style="color: blue">{{Auth::user()->username}}</span></h1>

    <div class="row mt-5">
        <div class="col-lg-4">
            <div class="card-data book">
                <div class="row">
                    <div class="col-6"><i class="bi bi-journal-bookmark"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc"><a href="#">Books</a></div>
                        <div class="card-count">{{$book_count}}</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card-data category">
                <div class="row">
                    <div class="col-6"><i class="bi bi-list-task"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc"><a href="#">Category</a></div>
                        <div class="card-count">12</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card-data user">
                <div class="row">
                    <div class="col-6"><i class="bi bi-people-fill"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc"><a href="#">User</a></div>
                        <div class="card-count">4</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <h2>#Rent Log</h2><hr>
        <table class="table table-striped">
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Peminjam</th>
                  <th scope="col">Book Title</th>
                  <th scope="col">Rent Date</th>
                  <th scope="col">Return Date</th>
                  <th scope="col">Actual Return Date</th>
                  <th scope="col">status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>123</td>
                  <td>3213</td>
                  <td>2131</td>
                  <td>ON</td>
                </tr>
              </tbody>
        </table>
    </div>

@endsection