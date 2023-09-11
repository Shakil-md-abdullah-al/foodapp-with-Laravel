@extends('admin.master')
@section('title')
    Add Chef
@endsection

@section('content')
    <div class="container-fluid px-4">
        <br>
        <br>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Manage <Producs></Producs>
{{--                <div class="d-flex justify-content-end" style="margin-top: -25px;"><a href="{{route('office.create')}}" class="btn btn-primary">Add Office</a></div>--}}

            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Description</th>
                        {{--                        <th>Description</th>--}}
                        <th>Quote</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($chefs as $office)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$office->name}}</td>
                            <td>{{$office->pos}}</td>
                            {{--                            <td>{{$product->description}}</td>--}}
                            <td>{{$office->description}}</td>
                            <td>{{$office->cq}}</td>
                            <td>
                                <img src="{{$office->image}}" alt="" class="" width="100px" height="100px">
                            </td>
                            <td class="d-flex">
                                {{--                                @if(Auth::user()->id == $user->id)--}}
                                <div class="btn-group">
                                    <a href="{{route('chef.edit',$office->id)}}" class="btn btn-primary">Edit</a>
                                    <form action="{{route('chef.destroy',$office->id)}}" method="post">
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
