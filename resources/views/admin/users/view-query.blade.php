@extends('admin.master')
@section('title')
    User's Query
@endsection

@section('content')
    <div class="container-fluid px-4">
        <br>
        <br>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Manage User's Query

                {{--                <div class="d-flex justify-content-end" style="margin-top: -20px;"><a href="" class="btn btn-primary">Add Doctor</a></div>--}}
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                    <tr>
                        <th>Customer Name</th>
                        <th>Email</th>
                        <th>Subject </th>
                        <th>Messagee</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $query)
                        <tr>
                            <td>{{$query->name}}</td>
                            <td>{{$query->email}}</td>
                            <td>{{$query->subject}}</td>
                            <td>{{$query->message}}</td>
                            <td>{{$query->status}}</td>

                            <td class="d-flex">
                                @if($query->status=='In Progress')
                                    <div class="btn-group">
                                        <a href="{{route('deliver-query',$query->id)}}" onclick="return confirm('Are You Sure to Deliver it??')" class="btn btn-primary">Action Taken</a>
                                    </div>
                                @else
                                    <p style="color: green">Action Taken</p>
                                @endif

                                {{--                                @endif--}}
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
