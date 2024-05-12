<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rental Buku || @yield('title')</title>
    <link rel="shortcut icon" href="{{asset('images/icon_RB.png')}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    
    <div class="main d-flex flex-column justify-content-between">
        {{-- NavBar --}}
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Rental  Buku</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        {{-- SideBar --}}
        <div class="body-content h-100">
            <div class="row g-0 h-100">
                <div class="sidebar col-lg-2 collapse d-lg-block"  id="navbarTogglerDemo03">
                    @if (Auth::user()->role_id == 1)
                        {{-- Admin --}}
                        <a href="/dashboard" @if (request()->route()->uri == 'dashboard') class="active" @endif>Dashboard</a>
                        <a href="/books"     @if (request()->route()->uri == 'books'      || request()->route()->uri == 'book-deleted'     || request()->route()->uri == 'book-add'           || request()->route()->uri == 'book-edit/{slug}'     || request()->route()->uri == 'book-delete/{slug}')     class="active" @endif>Books</a>
                        <a href="/categories"@if (request()->route()->uri == 'categories' || request()->route()->uri == 'category-deleted' || request()->route()->uri == 'category-add'       || request()->route()->uri == 'category-edit/{slug}' || request()->route()->uri == 'category-delete/{slug}') class="active" @endif>Categories</a>
                        <a href="/users"     @if (request()->route()->uri == 'users'      || request()->route()->uri == 'registered-users' || request()->route()->uri == 'user-detail/{slug}' || request()->route()->uri == 'user-ban/{slug}'      || request()->route()->uri == 'user-banned') class="active" @endif>User</a>
                        <a href="/rent-logs" @if (request()->route()->uri == 'rent-logs') class="active" @endif>Rent Log</a>
                        <a href="/logout">Logout</a>
                    @else
                        {{-- Client --}}
                        <a href="/profile">Profile</a>
                        <a href="/logout">Logout</a>                    
                    @endif
                </div>
                <div class="content p-5 col-lg-10">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>