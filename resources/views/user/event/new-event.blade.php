@extends('user.master')

@section('title')
    New Events
@endsection

@section('content')
    <div class="container-fluid px-4">
        <br>
        <br>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                New Events
            </div>
            <div class="card-body">
                <table id="datatablesSimple" class="table">
                    <thead>
                    <tr>
                        <th>Event Name</th>
                        <th>Customer Name</th>
                        <th>Phone</th>
                        <th>Place</th>
                        <th>Date</th>
                        <th>No of Attendees</th>
                        <th>Additional Info</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $query)
                        <tr>
                            <td>{{$query->event_type}}</td>
                            <td>{{$query->name}}</td>
                            <td>{{$query->phone}}</td>
                            <td>{{$query->place}}</td>
                            <td>{{$query->event_date}}</td>
                            <td>{{$query->event_attendees}}</td>
                            <td>{{$query->event_message}}</td>
                            <td class="d-flex">
                                @if($query->status == 'In Progress')
                                    <p style="color: green">In Progress</p>
                                @else
                                    <p style="color: green">Acccepted</p>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
