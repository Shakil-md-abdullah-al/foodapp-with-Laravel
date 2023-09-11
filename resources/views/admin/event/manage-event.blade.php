@extends('admin.master')
@section('title')
    Manage Event
@endsection

@section('content')
    <div class="container-fluid px-4">
        <br>
        <br>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Manage
{{--                <div class="d-flex justify-content-end" style="margin-top: -25px;"><a href="{{route('office.create')}}" class="btn btn-primary">Add Office</a></div>--}}

            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Place</th>
                        <th>Description</th>
                        {{--                        <th>Description</th>--}}
                        <th>Timedate</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($event as $office)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$office->name}}</td>
                            <td>{{$office->place}}</td>
                            {{--                            <td>{{$product->description}}</td>--}}
                            <td>{{$office->description}}</td>
                            <td>{{$office->timedate}}</td>
                            <td>
                                <img src="{{$office->image}}" alt="" class="" width="100px" height="100px">
                            </td>
                            <td class="d-flex">
                                {{--                                @if(Auth::user()->id == $user->id)--}}
                                <div class="btn-group">
                                    <a href="{{route('eventmanage.edit',$office->id)}}" class="btn btn-primary">Edit</a>
                                    <form action="{{route('eventmanage.destroy',$office->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" onclick="return confirm('Are You Want to Delete This?')" value="Delete" class="btn btn-danger" style="background-color: deeppink;color: white;margin-left: 5px;">
                                    </form>
                                </div>
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
