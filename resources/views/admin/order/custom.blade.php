@extends('admin.master')
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
                New Events

                {{--                <div class="d-flex justify-content-end" style="margin-top: -20px;"><a href="" class="btn btn-primary">Add Doctor</a></div>--}}
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Rice</th>
                        <th>Vegetable</th>
                        <th>soft_drinks</th>
                        <th>lacchi</th>
                        <th>Meat</th>
                        <th>Fish</th>
                        <th>Own</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $query)
                        <tr>
                            <td>{{$query->name}}</td>
                            <td>{{$query->phone}}</td>
                            <td>{{$query->address}}</td>
                            <td>{{$query->rice}}</td>
                            <td>{{$query->veg}}</td>
                            <td>{{$query->soft_drinks}}</td>
                            <td>{{$query->lacchi}}</td>
                            <td>{{$query->meat}}</td>
                            <td>{{$query->fish}}</td>
                            <td>{{$query->own}}</td>

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
