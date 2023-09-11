@extends('admin.master')
@section('title')
    Special Items
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @if(session()->has('message'))
                <div class="alert alert-{{ session()->has('success') ? 'success' : 'danger' }}">
                    <button data-dismiss="alert" type="button" class="close">&times;</button>
                    {{ session()->get('message') }}
                </div>
            @endif

                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Add Special</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('special.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label for="name" class="form-label">Special Item Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter the name" required>
                                </div>

                                <div class="mb-3">
                                    <label for="price" class="form-label">Price</label>
                                    <input type="text" class="form-control" id="price" name="price" placeholder="Enter the price" required>
                                </div>

                                <div class="mb-3">
                                    <label for="description" class="form-label">Details</label>
                                    <input type="text" class="form-control" id="description" name="description" placeholder="Enter details" required>
                                </div>

                                <div class="mb-3">
                                    <label for="image" class="form-label">Food Image</label>
                                    <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                                </div>

                                <div class="mt-4">
                                    <button type="submit" class="btn btn-outline-success text-center">Add Food</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

        </div>


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
                        <th>Price</th>
                        <th>Description</th>
                        <th>image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($special as $package)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$package->name}}</td>
                            <td>{{$package->price}}</td>
                            <td>{{$package->description}}</td>
                            <td>
                                <img src="{{$package->image}}" alt="" class="" width="100px" height="100px">
                            </td>
                            <td class="d-flex">
                                {{--                                @if(Auth::user()->id == $user->id)--}}
                                <div class="btn-group">
                                    <a href="{{route('special.edit',$package->id)}}" class="btn btn-primary">Edit</a>
                                    <form action="{{route('special.destroy',$package->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" onclick="return confirm('Are You Want to Delete This Package?')" value="Delete" class="btn btn-danger" style="background-color: deeppink;color: white;margin-left: 5px;">
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
