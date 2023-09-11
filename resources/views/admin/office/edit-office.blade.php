@extends('admin.master')
@section('title')
    Update Office
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
                        <form action="{{route('office.update',$office->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            {{--Usertype--}}
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" value="{{$office->o_name}}" name="o_name" type="text" placeholder="" required/>
                                        <label for="productTitle">Ofice Name</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" value="{{$office->code}}" name="code" type="text" placeholder="" required/>
                                        <label for="productTitle">Ofice Code</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" value="{{$office->o_phone}}" name="o_phone" type="number" placeholder="Product Title (min. 5 characters)" required/>
                                        <label for="productTitle">Ofice Contact</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" value="{{$office->o_address}}" name="o_address" type="text" placeholder="Product Title (min. 5 characters)" required/>
                                        <label for="productTitle">Ofice Name</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" value="{{$office->o_email}}" name="o_email" type="email" placeholder="Product Title (min. 5 characters)" required/>
                                        <label for="productTitle">Ofice Email</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" value="{{$office->no_emp}}" name="no_emp" type="number" placeholder="Product Title (min. 5 characters)" required/>
                                        <label for="productTitle">No of Employee</label>
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
                                <input type="submit" class="btn btn-outline-success text-center" value="Update Office">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
