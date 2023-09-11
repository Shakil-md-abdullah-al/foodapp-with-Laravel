@extends('admin.master')

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
                        <th>Action</th>
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
                            <td>{{$query->status}}</td>
                            <td class="d-flex">
                                @if($query->status == 'In Progress')
                                    <div class="btn-group">
                                        <a href="{{route('deliver-event', $query->id)}}" onclick="return confirm('Are You Sure to Accept it??')" class="btn btn-primary">Accepted</a>
                                    </div>
                                @else
                                    <p style="color: green">Action Taken</p>
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
