@extends('admin.master')
@section('title')
    Add Event
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
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Event</h3></div>
                    <div class="card-body">
                        <form action="{{route('eventmanage.store')}}" method="post" enctype="multipart/form-data">
                            @csrf


                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="name" type="text" placeholder="Office Code"/>
                                        <label for="productTitle">Event Name</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="place" type="text" placeholder="Office Code"/>
                                        <label for="productTitle">Event Place</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="timedate" type="text" placeholder="Office Code"/>
                                        <label for="productTitle">Event Time</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="description" type="text" placeholder="Office Code"/>
                                        <label for="productTitle">Event Details</label>
                                    </div>
                                </div>
                            </div>


                            <div class="col-12">
                                <label class="form-label">Event Image</label>
                                <input type="file" class="form-control" name="image" required>
                            </div>

                            <div class="mt-4 mb-0">
                                <input type="submit" class="btn btn-outline-success text-center" value="Add Event">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
