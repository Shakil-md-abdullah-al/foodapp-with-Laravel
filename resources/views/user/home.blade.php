@extends('user.master')
@section('title')
    Home Page
@endsection

@section('content')
    @include('user.include.slider')
    <!-- why section -->
    <section class="why_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Why Stay With Us
                </h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="box ">
                        <div class="img-box">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                           <g>
                               <g>
                                   <path d="M476.158,231.363l-13.259-53.035c3.625-0.77,6.345-3.986,6.345-7.839v-8.551c0-18.566-15.105-33.67-33.67-33.67h-60.392
                                    V110.63c0-9.136-7.432-16.568-16.568-16.568H50.772c-9.136,0-16.568,7.432-16.568,16.568V256c0,4.427,3.589,8.017,8.017,8.017
                                    c4.427,0,8.017-3.589,8.017-8.017V110.63c0-0.295,0.239-0.534,0.534-0.534h307.841c0.295,0,0.534,0.239,0.534,0.534v145.372
                                    c0,4.427,3.589,8.017,8.017,8.017c4.427,0,8.017-3.589,8.017-8.017v-9.088h94.569c0.008,0,0.014,0.002,0.021,0.002
                                    c0.008,0,0.015-0.001,0.022-0.001c11.637,0.008,21.518,7.646,24.912,18.171h-24.928c-4.427,0-8.017,3.589-8.017,8.017v17.102
                                    c0,13.851,11.268,25.119,25.119,25.119h9.086v35.273h-20.962c-6.886-19.883-25.787-34.205-47.982-34.205
                                    s-41.097,14.322-47.982,34.205h-3.86v-60.393c0-4.427-3.589-8.017-8.017-8.017c-4.427,0-8.017,3.589-8.017,8.017v60.391H192.817
                                    c-6.886-19.883-25.787-34.205-47.982-34.205s-41.097,14.322-47.982,34.205H50.772c-0.295,0-0.534-0.239-0.534-0.534v-17.637
                                    h34.739c4.427,0,8.017-3.589,8.017-8.017s-3.589-8.017-8.017-8.017H8.017c-4.427,0-8.017,3.589-8.017,8.017
                                    s3.589,8.017,8.017,8.017h26.188v17.637c0,9.136,7.432,16.568,16.568,16.568h43.304c-0.002,0.178-0.014,0.355-0.014,0.534
                                    c0,27.996,22.777,50.772,50.772,50.772s50.772-22.776,50.772-50.772c0-0.18-0.012-0.356-0.014-0.534h180.67
                                    c-0.002,0.178-0.014,0.355-0.014,0.534c0,27.996,22.777,50.772,50.772,50.772c27.995,0,50.772-22.776,50.772-50.772
                                    c0-0.18-0.012-0.356-0.014-0.534h26.203c4.427,0,8.017-3.589,8.017-8.017v-85.511C512,251.989,496.423,234.448,476.158,231.363z
                                    M375.182,144.301h60.392c9.725,0,17.637,7.912,17.637,17.637v0.534h-78.029V144.301z M375.182,230.881v-52.376h71.235
                                    l13.094,52.376H375.182z M144.835,401.904c-19.155,0-34.739-15.583-34.739-34.739s15.584-34.739,34.739-34.739
                                    c19.155,0,34.739,15.583,34.739,34.739S163.99,401.904,144.835,401.904z M427.023,401.904c-19.155,0-34.739-15.583-34.739-34.739
                                    s15.584-34.739,34.739-34.739c19.155,0,34.739,15.583,34.739,34.739S446.178,401.904,427.023,401.904z M495.967,299.29h-9.086
                                    c-5.01,0-9.086-4.076-9.086-9.086v-9.086h18.171V299.29z" />
                               </g>
                           </g>
                                <g>
                                    <g>
                                        <path d="M144.835,350.597c-9.136,0-16.568,7.432-16.568,16.568c0,9.136,7.432,16.568,16.568,16.568
                                    c9.136,0,16.568-7.432,16.568-16.568C161.403,358.029,153.971,350.597,144.835,350.597z" />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M427.023,350.597c-9.136,0-16.568,7.432-16.568,16.568c0,9.136,7.432,16.568,16.568,16.568
                                    c9.136,0,16.568-7.432,16.568-16.568C443.591,358.029,436.159,350.597,427.023,350.597z" />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M332.96,316.393H213.244c-4.427,0-8.017,3.589-8.017,8.017s3.589,8.017,8.017,8.017H332.96
                                    c4.427,0,8.017-3.589,8.017-8.017S337.388,316.393,332.96,316.393z" />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M127.733,282.188H25.119c-4.427,0-8.017,3.589-8.017,8.017s3.589,8.017,8.017,8.017h102.614
                                    c4.427,0,8.017-3.589,8.017-8.017S132.16,282.188,127.733,282.188z" />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M278.771,173.37c-3.13-3.13-8.207-3.13-11.337,0.001l-71.292,71.291l-37.087-37.087c-3.131-3.131-8.207-3.131-11.337,0
                                    c-3.131,3.131-3.131,8.206,0,11.337l42.756,42.756c1.565,1.566,3.617,2.348,5.668,2.348s4.104-0.782,5.668-2.348l76.96-76.96
                                    C281.901,181.576,281.901,176.501,278.771,173.37z" />
                                    </g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                        </svg>
                        </div>
                        <div class="detail-box">
                            <h5>
                                On Time Delivery
                            </h5>
                            <p>
                                Get your Lunch on time daily
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box ">
                        <div class="img-box">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 490.667 490.667" style="enable-background:new 0 0 490.667 490.667;" xml:space="preserve">
                           <g>
                               <g>
                                   <path d="M138.667,192H96c-5.888,0-10.667,4.779-10.667,10.667V288c0,5.888,4.779,10.667,10.667,10.667s10.667-4.779,10.667-10.667
                                    v-74.667h32c5.888,0,10.667-4.779,10.667-10.667S144.555,192,138.667,192z" />
                               </g>
                           </g>
                                <g>
                                    <g>
                                        <path d="M117.333,234.667H96c-5.888,0-10.667,4.779-10.667,10.667S90.112,256,96,256h21.333c5.888,0,10.667-4.779,10.667-10.667
                                    S123.221,234.667,117.333,234.667z" />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M245.333,0C110.059,0,0,110.059,0,245.333s110.059,245.333,245.333,245.333s245.333-110.059,245.333-245.333
                                    S380.608,0,245.333,0z M245.333,469.333c-123.52,0-224-100.48-224-224s100.48-224,224-224s224,100.48,224,224
                                    S368.853,469.333,245.333,469.333z" />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M386.752,131.989C352.085,88.789,300.544,64,245.333,64s-106.752,24.789-141.419,67.989
                                    c-3.691,4.587-2.965,11.307,1.643,14.997c4.587,3.691,11.307,2.965,14.976-1.643c30.613-38.144,76.096-60.011,124.8-60.011
                                    s94.187,21.867,124.779,60.011c2.112,2.624,5.205,3.989,8.32,3.989c2.368,0,4.715-0.768,6.677-2.347
                                    C389.717,143.296,390.443,136.576,386.752,131.989z" />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M376.405,354.923c-4.224-4.032-11.008-3.861-15.061,0.405c-30.613,32.235-71.808,50.005-116.011,50.005
                                    s-85.397-17.771-115.989-50.005c-4.032-4.309-10.816-4.437-15.061-0.405c-4.309,4.053-4.459,10.816-0.405,15.083
                                    c34.667,36.544,81.344,56.661,131.456,56.661s96.789-20.117,131.477-56.661C380.864,365.739,380.693,358.976,376.405,354.923z" />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M206.805,255.723c15.701-2.027,27.861-15.488,27.861-31.723c0-17.643-14.357-32-32-32h-21.333
                                    c-5.888,0-10.667,4.779-10.667,10.667v42.581c0,0.043,0,0.107,0,0.149V288c0,5.888,4.779,10.667,10.667,10.667
                                    S192,293.888,192,288v-16.917l24.448,24.469c2.091,2.069,4.821,3.115,7.552,3.115c2.731,0,5.461-1.045,7.531-3.136
                                    c4.16-4.16,4.16-10.923,0-15.083L206.805,255.723z M192,234.667v-21.333h10.667c5.867,0,10.667,4.779,10.667,10.667
                                    s-4.8,10.667-10.667,10.667H192z" />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M309.333,277.333h-32v-64h32c5.888,0,10.667-4.779,10.667-10.667S315.221,192,309.333,192h-42.667
                                    c-5.888,0-10.667,4.779-10.667,10.667V288c0,5.888,4.779,10.667,10.667,10.667h42.667c5.888,0,10.667-4.779,10.667-10.667
                                    S315.221,277.333,309.333,277.333z" />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M288,234.667h-21.333c-5.888,0-10.667,4.779-10.667,10.667S260.779,256,266.667,256H288
                                    c5.888,0,10.667-4.779,10.667-10.667S293.888,234.667,288,234.667z" />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M394.667,277.333h-32v-64h32c5.888,0,10.667-4.779,10.667-10.667S400.555,192,394.667,192H352
                                    c-5.888,0-10.667,4.779-10.667,10.667V288c0,5.888,4.779,10.667,10.667,10.667h42.667c5.888,0,10.667-4.779,10.667-10.667
                                    S400.555,277.333,394.667,277.333z" />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M373.333,234.667H352c-5.888,0-10.667,4.779-10.667,10.667S346.112,256,352,256h21.333
                                    c5.888,0,10.667-4.779,10.667-10.667S379.221,234.667,373.333,234.667z" />
                                    </g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                        </svg>
                        </div>
                        <div class="detail-box">
                            <h5>
                                Free Shiping
                            </h5>
                            <p>
                                variations of passages
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box ">
                        <div class="img-box">
                            <svg id="_30_Premium" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg" data-name="30_Premium">
                                <g id="filled">
                                    <path d="m252.92 300h3.08a124.245 124.245 0 1 0 -4.49-.09c.075.009.15.023.226.03.394.039.789.06 1.184.06zm-96.92-124a100 100 0 1 1 100 100 100.113 100.113 0 0 1 -100-100z" />
                                    <path d="m447.445 387.635-80.4-80.4a171.682 171.682 0 0 0 60.955-131.235c0-94.841-77.159-172-172-172s-172 77.159-172 172c0 73.747 46.657 136.794 112 161.2v158.8c-.3 9.289 11.094 15.384 18.656 9.984l41.344-27.562 41.344 27.562c7.574 5.4 18.949-.7 18.656-9.984v-70.109l46.6 46.594c6.395 6.789 18.712 3.025 20.253-6.132l9.74-48.724 48.725-9.742c9.163-1.531 12.904-13.893 6.127-20.252zm-339.445-211.635c0-81.607 66.393-148 148-148s148 66.393 148 148-66.393 148-148 148-148-66.393-148-148zm154.656 278.016a12 12 0 0 0 -13.312 0l-29.344 19.562v-129.378a172.338 172.338 0 0 0 72 0v129.38zm117.381-58.353a12 12 0 0 0 -9.415 9.415l-6.913 34.58-47.709-47.709v-54.749a171.469 171.469 0 0 0 31.467-15.6l67.151 67.152z" />
                                    <path d="m287.62 236.985c8.349 4.694 19.251-3.212 17.367-12.618l-5.841-35.145 25.384-25c7.049-6.5 2.89-19.3-6.634-20.415l-35.23-5.306-15.933-31.867c-4.009-8.713-17.457-8.711-21.466 0l-15.933 31.866-35.23 5.306c-9.526 1.119-13.681 13.911-6.634 20.415l25.384 25-5.841 35.145c-1.879 9.406 9 17.31 17.367 12.618l31.62-16.414zm-53-32.359 2.928-17.615a12 12 0 0 0 -3.417-10.516l-12.721-12.531 17.658-2.66a12 12 0 0 0 8.947-6.5l7.985-15.971 7.985 15.972a12 12 0 0 0 8.947 6.5l17.658 2.66-12.723 12.535a12 12 0 0 0 -3.417 10.516l2.928 17.615-15.849-8.231a12 12 0 0 0 -11.058 0z" />
                                </g>
                            </svg>
                        </div>
                        <div class="detail-box">
                            <h5>
                                Best Quality
                            </h5>
                            <p>
                                Quality food to ensure your health
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end why section -->

    <style>
        .arrival_section .arrival_bg_box img{
            height: 500px !important;
            padding-top: 65px;
        }
    </style>
    <!-- arrival section -->
    <section class="arrival_section">
        @foreach($special as $special)
        <div class="container">
            <div class="box">
                <div class="arrival_bg_box">
                    <img src="{{{$special->image}}}" height="250px" alt="">
                </div>
                <div class="row">
                    <div class="col-md-6 ml-auto">
                        <div class="heading_container remove_line_bt">
                            <h2>
                                #Today's Special
                            </h2>
                        </div>
                        <p style="margin-top: 20px;margin-bottom: 30px;">
                        {{$special->description}}
                        </p>
                        <a href="" class="btn">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </section>
    <!-- end arrival section -->

    <!-- product section -->
    <section class="product_section layout_padding" style="background-color: #f8f8f8">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Latest <span>Foods</span>
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
                            @if(!empty($product->productRating->rating))
                                <div>
                                    <h5 style="font-size: 20px;padding-top: 10px;">Rating: {{$product->productRating->rating}}(of 5)</h5>
                                </div>
                            @endif

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

{{--Start Cusrom Menu--}}
    <section class="custom-menu my-5" style="background-color: #f8f8f8;">
        <form action="{{ route('custom-store') }}" method="POST">
        @csrf

            <div class="container">
                <div class="row my-3">
                    <div class="col-md-10 offset-md-1">
                        <h2 class="text-center" style="font-weight: 600; font-size: 45px; color: #002c3e; padding-top: 30px; padding-bottom: 40px; font-family: Playfair Display, serif;">Customize Your Menu</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3 fm">
                            <label class="form-label custom-label">Rice Menu</label>
                            <select name="rice" class="form-control">
                                <option value="">Select Rice Menu</option>
                                @foreach($Rice as $rice)
                                    <option value="{{$rice->id}}es">{{ $rice->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6" style="position: relative;">
                        <label class="form-label custom-label" style="position: relative; top: 0; left: 0;">Vegetable Menu</label>
                        <div class="mb-3">
                            <select name="veg" class="form-control">
                                <option value="">Select Vegetable Menu</option>
                                @foreach($vegetable as $veg)
                                    <option value="{{ $veg->id }}">{{ $veg->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3 fm">
                            <label class="form-label custom-label">Soft Drinks Menu</label>
                            <select name="soft_drinks" class="form-control">
                                <option value="">Select Soft Drink</option>
                                @foreach($softDrinks as $drinks)
                                    <option value="{{ $drinks->id }}">{{ $drinks->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6" style="position: relative;">
                        <label class="form-label custom-label" style="position: relative; top: 0; left: 0;">Lassi Menu</label>
                        <div class="mb-3">
                            <select name="lacchi" class="form-control">
                                <option value="">Select Lassi Flavor</option>
                                @foreach($lacchi as $drinks)
                                    <option value="{{ $drinks->id }}">{{ $drinks->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3 fm">
                            <label class="form-label custom-label">Meat Menu</label>
                            <select name="meat" class="form-control">
                                <option value="">Select Meat Dish</option>
                                @foreach($meat as $meat)
                                    <option value="{{ $meat->id }}">{{ $meat->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6" style="position: relative;">
                        <label class="form-label custom-label" style="position: relative; top: 0; left: 0;">Fish Menu</label>
                        <div class="mb-3">
                            <select name="fish" class="form-control">
                                <option value="">Select Fish Dish</option>
                                @foreach($fish as $fish)
                                    <option value="{{ $fish->id }}">{{ $fish->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <label for="menu_selection">Add Your Own Menu:</label>
                        <div id="custom_option">
                            <label for="custom_input">Enter Your Own:</label>
                            <textarea name="own" class="form-control" rows="4"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-center"> <!-- Center-align the button -->
                        <button type="submit" class="btn btn-primary btn-cus" style="background-color: cornflowerblue; margin-top: 20px; width: 50%;">
                            <span style="display: block; text-align: center;">Place Your Order</span>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </section>

    <script>
        function toggleCustomOption(select) {
            const customOptionDiv = document.getElementById('custom_option');
            if (select.value === "option5") {
                customOptionDiv.style.display = "block";
            } else {
                customOptionDiv.style.display = "none";
            }
        }
    </script>


    <style>
        .custom-label {
            background-color: cornflowerblue;
            color: white;
            text-align: center;
            padding: 5px; /* Optional: Add padding for better visual appearance */
        }
        .btn-cus:hover{
            background-color: red;
            color: white;
            width: 100%;
        }
        .package .card:hover{
            background-color: white;
            border: none;
        }
    </style>

{{--    Packege Section--}}
    <section class="packages" style="background-color: rgba(255,253,213,0.6)">
        <h2 class="text-center btr" style="font-weight: 600;font-size: 45px; color: #002c3e;padding-top: 30px;padding-bottom: 40px;font-family: Playfair Display, serif;">Packages</h2>
        <div class="row">
            <div class="col-md-10 offset-md-1 mb-5">
                <div class="row">
                    @foreach($packages as $index => $package)
                        <div class="col-md-4 package">
                            <div class="card" style="width: 18rem; background-color: {{ $index % 2 == 0 ? 'rgba(235,255,218,0.92)' : 'rgba(255,42,68,0.23)' }}">
                                <div class="card-body text-center">
                                    <h3 class="card-title" style="font-size: 42px; font-weight: 600">{{ $package->name }}</h3>
                                    <h5 class="card-title">Starts From</h5>
                                    <h5 class="card-title" style="color: red; font-size: 25px; padding-bottom: 15px">{{ $package->price }} /=</h5>
                                    <h5 class="" style="color: green; font-size: 22px; padding-bottom: 10px">Features</h5>
                                    <p class="text-left pl-5"> <b>Cash On Delivery</b> </p>
                                    <p class="text-left pl-5">For Small Company</p>
                                    <p class="text-left pl-5 pb-2">On Time Delivery</p>
                                    <!-- Form starts here -->
                                    @if(Auth::user() && Auth::user()->usertype == 2)
                                        <form action="{{ route('package-cart', $package->id) }}" method="POST" id="add-to-cart-form">
                                            @csrf
                                            <div class="row mt-2">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <!-- You can add a label here if needed -->
                                                        <input type="hidden" id="available-quantity" value="" min="1" required placeholder="Employee">
                                                        <input type="number" name="quantity" id="quantity" value="1" min="1" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <input type="submit" value="Add" class="btn btn-primary" style="background-color: #0b5ed7">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                @endif

                                <!-- Form ends here -->
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- end Package section -->
    <section class="platter" style="margin-top: 30px;margin-bottom: 30px;background-color: rgba(151,255,53,0.08)">
        <h2 class="text-center btr" style="font-weight: 600; font-size: 45px; color: #002c3e; padding-top: 30px;margin-bottom: 30px; padding-bottom: 40px; font-family: Playfair Display, serif; text-decoration: none; position: relative;">
            <span style="border-bottom: 2px solid red; width: 12%; position: absolute; left: 50%; transform: translateX(-50%);">Platter</span>
        </h2>

        <div class="row">
            @foreach($platters as $platter)
            <div class="col-md-10 offset-md-1">
                <div class="row table table-bordered">

                    <div class="col-md-9">
                        <h2 style="font-weight: 600;font-size: 32px;color: green">{{$platter->name}}</h2>
                        <h2 style="font-weight: 600;font-size: 32px;color: green"></h2>
                        <h5 style="font-family: Roboto;font-size: 20px;line-height: 32px">{{$platter->description}}</h5>
                    </div>
                    <div class="col-md-2" style="font-size: 22px;font-weight: 600;">Price: {{$platter->price}}/=</div>

                    <div class="row">
                        <div class="col-md-12">

                            <form action="{{ route('menu-cart', $platter->id) }}" method="POST" id="add-to-cart-form">
                                @csrf
                                <div class="row mt-2">
                                    <div class="col-md-4">
                                        <div class="form-group " style="padding-left: 10px">
                                            <label for="quantity" style="font-family: Roboto; font-size: 20px; font-weight: 500; padding-left: 10px">Quantity:</label>
                                            <input type="hidden" id="available-quantity" value="{{ $platter->quantity }}">
                                            <input type="number" name="quantity" id="quantity" value="1" min="1" max="{{ $platter->quantity }}" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="submit" id="order-button" value="Add to Cart" class="btn btn-primary" style="background-color: #0b5ed7">
                                        </div>
                                    </div>
                                </div>

{{--                                <script>--}}
{{--                                    function canPlaceOrderNow() {--}}
{{--                                        const now = new Date();--}}
{{--                                        const openingTime = new Date();--}}
{{--                                        openingTime.setHours(10, 0, 0); // Set opening time to 10:00 AM--}}
{{--                                        const closingTime = new Date();--}}
{{--                                        closingTime.setHours(21, 0, 0); // Set closing time to 9:00 PM--}}

{{--                                        return now >= openingTime && now <= closingTime;--}}
{{--                                    }--}}

{{--                                    const orderButton = document.getElementById('order-button');--}}

{{--                                    orderButton.addEventListener('click', function (event) {--}}
{{--                                        if (!canPlaceOrderNow()) {--}}
{{--                                            event.preventDefault(); // Prevent form submission if it's outside of the allowed time--}}
{{--                                            alert('You can only place orders between 10:00 AM and 9:00 PM.');--}}
{{--                                        }--}}
{{--                                    });--}}
{{--                                </script>--}}

                        </div>
                    </div>

                    </form>
                </div>
            </div>
            @endforeach
        </div>
        </form>

    </section>


    <!-- subscribe section -->
{{--    <section class="subscribe_section">--}}
{{--        <div class="container-fuild">--}}
{{--            <div class="box">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-6 offset-md-3">--}}
{{--                        <div class="subscribe_form ">--}}
{{--                            <div class="heading_container heading_center">--}}
{{--                                <h3>Subscribe To Get Discount Offers</h3>--}}
{{--                            </div>--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>--}}
{{--                            <form action="">--}}
{{--                                <input type="email" placeholder="Enter your email">--}}
{{--                                <button>--}}
{{--                                    subscribe--}}
{{--                                </button>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- end subscribe section -->
    <!-- client section -->
    <section class="client_section layout_padding" style="background-color: #d4ced0;">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Client's Review
                </h2>
            </div>
            <div id="carouselExample3Controls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="box col-lg-10 mx-auto">
                            <div class="img_container">
                                <div class="img-box">
                                    <div class="img_box-inner">
                                        <img src="{{asset('user-assets')}}/images/const.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Twinckel Construction
                                </h5>
                                <h6>
                                    Ahashanganj
                                </h6>
                                <p>
                                    Their brunch is awesome, I love the avocado toast and the California focaccia. Pizza is really good as well.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="box col-lg-10 mx-auto">
                            <div class="img_container">
                                <div class="img-box">
                                    <div class="img_box-inner">
                                        <img src="{{asset('user-assets')}}/images/const2.webp" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Anna Trevor
                                </h5>
                                <h6>
                                    Customer
                                </h6>
                                <p>
                                    Dignissimos reprehenderit repellendus nobis error quibusdam? Atque animi sint unde quis reprehenderit, et, perspiciatis, debitis totam est deserunt eius officiis ipsum ducimus ad labore modi voluptatibus accusantium sapiente nam! Quaerat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="box col-lg-10 mx-auto">
                            <div class="img_container">
                                <div class="img-box">
                                    <div class="img_box-inner">
                                        <img src="{{asset('user-assets')}}/images/const.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Anna Trevor
                                </h5>
                                <h6>
                                    Customer
                                </h6>
                                <p>
                                    Dignissimos reprehenderit repellendus nobis error quibusdam? Atque animi sint unde quis reprehenderit, et, perspiciatis, debitis totam est deserunt eius officiis ipsum ducimus ad labore modi voluptatibus accusantium sapiente nam! Quaerat.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel_btn_box">
                    <a class="carousel-control-prev" href="#carouselExample3Controls" role="button" data-slide="prev">
                        <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExample3Controls" role="button" data-slide="next">
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="fb-customerchat" page_id="Ps0h91v60klme" messenger_app_id="628740622575087" data-access-token="EAAI71hV25e8BO840O5fma2bccJsCFK07ZAZBhBsCcRIZAcoCZCeJMCrlMLUUabaAmMDaWZCVPiye9R456MZBtRZBfMUsRPwaC5DRenMp8ONwOGYGrlZBwNkSiXe3SFurUMl2WT7J6UgLQZCZAZCwPm866wMnllafozT1TIchreW2vkedocPfR5zkjupkhzDUSyPzzYe"></div>
    <!-- Add the Facebook Messenger SDK -->
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml            : true,
                version          : 'v13.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- Add the Facebook Messenger chat plugin -->
    <div class="fb-customerchat"
         attribution="setup_tool"
         page_id="Ps0h91v60klme"
         theme_color="#0084FF"
         logged_in_greeting="Hello! How can we assist you today?"
         logged_out_greeting="Hello! How can we assist you today?">
    </div>




    <!-- end client section -->
@endsection
