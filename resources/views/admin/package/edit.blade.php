@extends('admin.master')
@section('title')
    Packages Update
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
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Manage Office</h3></div>
                    <div class="card-body">
                        <form action="{{route('package.update',$package->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            {{--Usertype--}}
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" value="{{$package->name}}" name="name" type="text" placeholder="" required/>
                                        <label for="productTitle">Package Name</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" value="{{$package->price}}" name="price" type="text" placeholder="" required/>
                                        <label for="productTitle">Package Price</label>
                                    </div>
                                </div>
                            </div>


                            <div class="mt-4 mb-0">
                                <input type="submit" class="btn btn-outline-success text-center" value="Update Package">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
