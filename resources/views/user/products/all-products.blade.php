@extends('user.master')
@section('title')
    Food Page
@endsection


@section('content')
    <section class="product_section layout_padding" style="background-color: #f8f8f8">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Our <span>Foods</span>
                </h2>
            </div>
            <div class="row">
                @foreach($products as $product)
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
                                <img src="{{$product->image}}" alt="{{$product->title}}" class="" height="250px">
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





                    <script>
                        document.getElementById('add-to-cart-form').addEventListener('submit', function(event) {
                            var inputQuantity = parseInt(document.querySelector('input[name="quantity"]').value);
                            var availableQuantity = parseInt(document.getElementById('available-quantity').value);

                            if (inputQuantity > availableQuantity) {
                                event.preventDefault();
                                document.getElementById('quantity-warning').style.display = 'block';
                            } else {
                                document.getElementById('quantity-warning').style.display = 'none';
                            }
                        });
                    </script>

                @endforeach
            </div>

{{--            <div class="btn-box">--}}
{{--                <a href="{{route('all-products')}}">--}}
{{--                    View All products--}}
{{--                </a>--}}
{{--            </div>--}}
        </div>
    </section>
@endsection
