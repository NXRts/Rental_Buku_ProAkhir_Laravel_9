@extends('layouts.mainlayout')

@section('title', 'Rent Log')

@section('content')
    <h1>Rent Log List</h1>

    <div class="mt-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>User</th>
                    <th>Book</th>
                    <th>Rent date</th>
                    <th>Return Date</th>
                    <th>Actual return Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rent_logs as $item)    
                <tr class="{{ $item->actual_return_date == null ? '' : ($item->return_date < $item->actual_return_date ? 'text-bg-danger' : 'text-bg-success') }}">
            
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->user->username }}</td>
                    <td>{{ $item->book->title  }}</td>
                    <td>{{ $item->rent_date }}</td>
                    <td>{{ $item->return_date }}</td>
                    <td>{{ $item->actual_return_date }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection