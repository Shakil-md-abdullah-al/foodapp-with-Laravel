@extends('user.master')

@section('title')
    Custom Order
@endsection

@section('content')
    <div class="container-fluid px-4">
        <br>
        <br>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                My Custom Order
            </div>
            <div class="card-body">
                <table id="datatablesSimple" class="table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Own</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $query)
                        <tr>
                            <td>{{$query->name}}</td>
                            <td>{{$query->phone}}</td>
                            <td>{{$query->address}}</td>
                            <td>{{$query->own}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
