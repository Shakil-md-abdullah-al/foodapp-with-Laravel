@extends('admin.master')
@section('title')
    Add Office
@endsection

@section('content')
    <div class="container-fluid px-4">
        <br>
        <br>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Manage <Producs></Producs>
                <div class="d-flex justify-content-end" style="margin-top: -25px;"><a href="{{route('office.create')}}" class="btn btn-primary">Add Office</a></div>

            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Code</th>
                        <th>Employee</th>
                        {{--                        <th>Description</th>--}}
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($offices as $office)
                        <tr>
                            <td>{{$office->id}}</td>
                            <td>{{$office->o_name}}</td>
                            <td>{{$office->code}}</td>
                            {{--                            <td>{{$product->description}}</td>--}}
                            <td>{{$office->no_emp}}</td>
                            <td>{{$office->o_phone}}</td>
                            <td>{{$office->o_email}}</td>
                            <td>{{$office->o_address}}</td>
                            <td>
                                <img src="{{$office->image}}" alt="" class="" width="100px" height="100px">
                            </td>
                            <td class="d-flex">
                                {{--                                @if(Auth::user()->id == $user->id)--}}
                                <div class="btn-group">
                                    <a href="{{route('office.edit',$office->id)}}" class="btn btn-primary">Edit</a>
                                    <form action="{{route('office.destroy',$office->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" onclick="return confirm('Are You Want to Delete This Product?')" value="Delete" class="btn btn-danger" style="background-color: deeppink;color: white;margin-left: 5px;">
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
