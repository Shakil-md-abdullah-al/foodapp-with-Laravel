@extends('admin.master')
@section('title')
    Update Product
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
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Manage Products</h3></div>
                    <div class="card-body">
                        <form action="{{route('products.update',$product->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            {{--Usertype--}}
                            <div class="col-12 mb-3">
                                <label class="form-label">Product Category</label>
                                <select name="category" class="form-control" required>
                                    <option value="">Select Product Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" value="{{$product->title}}" name="title" type="text" placeholder="Product Title (min. 5 characters)" required minlength="5" />
                                        <label for="productTitle">Product Title</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="description" value="{{$product->description}}" type="text" placeholder="Product Description" required />
                                        <label for="productDescription">Product Description</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" value="{{$product->price}}" name="price" type="number" step="0.01" placeholder="Product Price" required />
                                        <label for="productPrice">Product Price</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" value="{{$product->quantity}}" name="quantity" type="number" min="1" placeholder="Product Quantity" required />
                                        <label for="productQuantity">Product Quantity</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="discount_price" value="{{$product->price}}" type="number" placeholder="Discount Price" />
                                        <label for="discountPrice">Discount Price</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 text-center">
                                @if($product->image)
                                    <img src="{{ asset($product->image) }}" width="120px" height="150px" class="img-fluid mx-auto d-block" alt="Product Image">
                                @else
                                    <p>No Image Available</p>
                                @endif
                            </div>

                            <div class="col-12">
                                <label class="form-label">Image</label>
                                <input type="file" class="form-control" name="image">
                            </div>






                            <div class="mt-4 mb-0">
                                <input type="submit" class="btn btn-outline-success text-center" value="Update Food">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
