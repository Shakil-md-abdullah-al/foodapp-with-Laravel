@extends('admin.master')
@section('title')
    update Category
@endsection

@section('content')
    @extends('admin.master')
@section('title')
    Edit Users
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
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit Category</h3></div>
                    <div class="card-body">
                        <form action="{{route('category.updatecat',$category->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
{{--                            @method('PUT')--}}
                            <div class="col-12">
                                <label class="form-label">Category Name</label>
                                <input type="text" value="{{$category->category_name}}" class="form-control" name="category_name">
                            </div>



                            <div class="mt-4 mb-0">
                                <input type="submit" class="btn btn-outline-success text-center" value="Update Category">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@endsection
