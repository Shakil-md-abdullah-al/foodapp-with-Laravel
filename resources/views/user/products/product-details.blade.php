@extends('user.master')
@section('title')
    Food Details
@endsection


@section('content')
    <div class="container-fluid mb-5">
{{--        @section('content')--}}
{{--            @if(session()->has('message'))--}}
{{--                <div class="alert alert-success">--}}
{{--                    <button data-dismiss="alert" type="button" class="close">&times;</button>--}}
{{--                    {{session()->get('message')}}--}}
{{--                </div>--}}
{{--            @endif--}}
        <div class="row" style="margin-top: 30px;background-color: #f8f8f8;padding-top: 30px">
            <div class="col-md-5 offset-md-1">
                <img src="{{ asset($product->image) }}" alt="{{ $product->title }}" height="370px" width="100%">

{{--                <p style="font-family: Poppins;line-height: 35px;font-size: 22px;margin-top: 30px;">{{ $product->description }}</p>--}}
            </div>
            <div class="col-md-5 offset-md-1">
                <h2 style="font-size: 40px">{{ $product->title }}</h2>
                <br>
                @if($product->discount_price != null)
                    <h4 style="color: blue;font-size: 22px">
                        Discount Price: ৳ {{ $product->discount_price }}
                    </h4>
                    <h4 style="text-decoration: line-through; color: red;font-size: 22px;margin-top: 15px">
                        Original Price: ৳ {{ $product->price }}
                    </h4>
                @else
                    <h4 style="color: blue;font-size: 22px">
                        Price: ৳ {{ $product->price }}
                    </h4>
                @endif
                <br>
                <form action="{{route('add-cart',$product->id)}}" method="POST">
                    @csrf
                    <label for="quantity" style="font-size: 25px">Quantity:</label>
                    <input type="number" name="quantity" value="1" min="1" max="{{ $product->quantity }}" class="form-control">
                    <br>
                    <button type="submit" class="btn btn-primary" style="background-color: #0b5ed7;">
                        Add to Cart
                    </button>
                </form>

                <form action="{{route('review',$product->id)}}" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <div class="form-group">
                        <label for="rating">Rating:</label>
                        <select name="rating" id="rating" class="form-control">
                            <option value="5">5 Stars</option>
                            <option value="4">4 Stars</option>
                            <option value="3">3 Stars</option>
                            <option value="2">2 Stars</option>
                            <option value="1">1 Star</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" style="background-color: blue">Submit Review</button>
                </form>

            </div>

            </div>
        </div>
                <div class="row">
                    <div class="col-md-12" style="background-color: #f8f8f8; padding-bottom: 30px">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <p style="font-family: Poppins;line-height: 35px;font-size: 22px;margin-top: 30px;">{{ $product->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
    </div>



    <section class="product_section layout_padding" style="margin-top: 30px !important;">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Related <span>Foods</span>
                </h2>
            </div>
            <div class="row">
                @foreach($relatedProducts as $product)
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="box">
                            <div class="option_container">
                                <div class="options">
                                    <a href="{{route('product-details',$product->id)}}" class="option1">
                                        Product Details
                                    </a>
                                    <form action="{{route('add-cart',$product->id)}}" method="POST" id="add-to-cart-form">
                                        @csrf
                                        <div class="row mt-2">
                                            <div class="col-md-4">
                                                <input type="hidden" id="available-quantity" value="{{ $product->quantity }}">
                                                <input type="number" name="quantity" value="1" min="1" max="{{ $product->quantity }}" width="100px" required>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="submit" value="Add to Cart">
                                            </div>

                                        </div>

                                    </form>

                                    <p id="quantity-warning" style="color: red; display: none;">Quantity exceeds available stock</p>
                                </div>
                            </div>
                            <div class="">
                                <img src="{{asset($product->image)}}" alt="{{$product->title}}" height="250px">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    {{$product->title}}
                                </h5>
                                <br>
                                @if($product->discount_price !=null)
                                    <h6 style="color: blue">
                                        Discount Price <br>
                                        ৳ {{$product->discount_price}}
                                    </h6>

                                    <h6 style="text-decoration: line-through;color: red">

                                        ৳ {{$product->price}}
                                    </h6>
                                @else
                                    <h6 style="color: blue">
                                        Price <br>
                                        ৳ {{$product->price}}
                                    </h6>
                                @endif


                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

@endsection


