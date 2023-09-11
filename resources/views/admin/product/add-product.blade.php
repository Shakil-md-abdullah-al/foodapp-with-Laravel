@extends('admin.master')
@section('title')
    Add Product
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
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Products</h3></div>
                    <div class="card-body">
                        <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
                            @csrf

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
                                        <input class="form-control" name="title" type="text" placeholder="Product Title (min. 5 characters)" required minlength="5" />
                                        <label for="productTitle">Product Title</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="description" type="text" placeholder="Product Description" required />
                                        <label for="productDescription">Product Description</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="price" type="number" step="0.01" placeholder="Product Price" required />
                                        <label for="productPrice">Product Price</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="quantity" type="number" min="1" placeholder="Product Quantity" required />
                                        <label for="productQuantity">Product Quantity</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="discount_price" type="number" placeholder="Discount Price" />
                                        <label for="discountPrice">Discount Price</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Product Image</label>
                                <input type="file" class="form-control" name="image" required>
                            </div>

                            <div class="mt-4 mb-0">
                                <input type="submit" class="btn btn-outline-success text-center" value="Add Product">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
