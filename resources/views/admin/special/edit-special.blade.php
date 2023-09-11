@extends('admin.master')
@section('title')
    Update Special
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
{{--                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Manage Event</h3></div>--}}
                    <div class="card-body">
                        <form action="{{route('special.update',$office->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            {{--Usertype--}}
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" value="{{$office->name}}" name="name" type="text" placeholder="" required/>
                                        <label for="productTitle">Event Name</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" value="{{$office->price}}" name="price" type="text" placeholder="" required/>
                                        <label for="productTitle">Price</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" value="{{$office->description}}" name="description" type="text" placeholder="" required/>
                                        <label for="productTitle">Details</label>
                                    </div>
                                </div>
                            </div>


                            <div class="col-12 text-center">
                                @if($office->image)
                                    <img src="{{ asset($office->image) }}" width="120px" height="150px" class="img-fluid mx-auto d-block" alt="Product Image">
                                @else
                                    <p>No Image Available</p>
                                @endif
                            </div>

                            <div class="col-12">
                                <label class="form-label">Image</label>
                                <input type="file" class="form-control" name="image">
                            </div>


                            <div class="mt-4 mb-0">
                                <input type="submit" class="btn btn-outline-success text-center" value="Update Information">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
