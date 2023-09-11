@extends('admin.master')
@section('title')
    Platter
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
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Platter</h3></div>
                    <div class="card-body">
                        <form action="{{route('platter.store')}}" method="post">
                            @csrf

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="name" type="text" placeholder="Office Code"/>
                                        <label for="productTitle">Platter Name</label>
                                    </div>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="price" type="text" placeholder="Office Code" required />
                                        <label for="productTitle">Platter Price</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="description" type="text" placeholder="Office Code" required />
                                        <label for="productTitle">Details</label>
                                    </div>
                                </div>
                            </div>


                            <div class="mt-4 mb-0">
                                <input type="submit" class="btn btn-outline-success text-center" value="Add Platter">
                            </div>
                        </form>
                    </div>
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
                Manage Packages
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
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($platters as $platter)
                        <tr>
                            <td>{{$platter->id}}</td>
                            <td>{{$platter->name}}</td>
                            <td>{{$platter->price}}</td>
                            <td>{{$platter->description}}</td>
                            <td class="d-flex">
                                {{--                                @if(Auth::user()->id == $user->id)--}}
                                <div class="btn-group">
                                    <a href="{{route('platter.edit',$platter->id)}}" class="btn btn-primary">Edit</a>
                                    <form action="{{route('platter.destroy',$platter->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" onclick="return confirm('Are You Want to Delete This Platter?')" value="Delete" class="btn btn-danger" style="background-color: deeppink;color: white;margin-left: 5px;">
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
