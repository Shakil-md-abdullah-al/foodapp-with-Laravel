@extends('user.master')
@include('user.products.table-componemt')
@section('title')
    Cart Page
@endsection

@section('content')
    <div class="container-fluid px-4">
{{--        @if(session()->has('message'))--}}
{{--            <div class="alert alert-{{ session()->has('success') ? 'success' : 'danger' }}">--}}
{{--                <button data-dismiss="alert" type="button" class="close">&times;</button>--}}
{{--                {{ session()->get('message') }}--}}
{{--            </div>--}}
{{--        @endif--}}
        <br>
        <br>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Cart Page


                <div class="d-flex justify-content-end" style="margin-top: -25px;">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" style="background-color: blue; margin-right: 10px" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Proceed To Order
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('cash-order') }}" id="cashOnDelivery">Cash on Delivery</a>
                            <a class="dropdown-item" href="{{ route('all-products') }}" id="payWithCard">Pay with Card</a>
                        </div>
                        <script>
                            // Get the current date and time
                            const now = new Date();
                            const currentHour = now.getHours();
s
                            // Check if the current time is between 10 am (10) and 9 pm (21)
                            if (currentHour >= 10 && currentHour < 24) {
                                // Allow users to proceed with both options
                                document.getElementById('cashOnDelivery').addEventListener('click', function (e) {
                                    // Continue to the Cash on Delivery page
                                });

                                document.getElementById('payWithCard').addEventListener('click', function (e) {
                                    // Continue to the Pay with Card page
                                });
                            } else {
                                // Prevent users from proceeding and show the message
                                document.getElementById('cashOnDelivery').addEventListener('click', function (e) {
                                    e.preventDefault();
                                    alert('Please try between 10 am to 9 pm');
                                });

                                document.getElementById('payWithCard').addEventListener('click', function (e) {
                                    e.preventDefault();
                                    alert('Please try between 10 am to 9 pm');
                                });
                            }
                        </script>


                    </div>
                    <a href="{{route('all-products')}}" class="btn btn-primary">Shop More</a>
                </div>


            </div>
            <div class="card-body">
                <table id="datatablesSimple" id="datatablesSimple" class="custom-table">
                    <thead>
                    <tr>
                        <th style="width: 20%;">Product Name</th>
                        <th style="width: 10%;">Price</th>
                        <th style="width: 10%;">Quantity</th>
                        <th style="width: 35%;">Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $totalprice=0; ?>
                    @foreach($cart as $product)

                        <tr>
                            <td style="width: 20%;">{{$product->product_title}}</td>
                            <td style="width: 10%;">{{$product->price}}</td>
                            <td style="width: 10%;">{{$product->quantity}}</td>
                            <td style="width: 35%;">
                                <img src="{{$product->image}}" alt="" class="img-fluid" width="120px" height="120px">
                            </td>
                            <td class="d-flex">
                                <div class="btn-group">
{{--                                    <a href="{{route('products.edit',$product->id)}}" class="btn btn-primary">Edit</a>--}}
                                    <form action="{{route('delete-cart',$product->id)}}" method="post">
                                        @csrf
{{--                                        @method('DELETE')--}}
                                        <input type="submit" onclick="return confirm('Are You Want to Delete This Product?')" value="Remove From Cart" class="btn btn-danger" style="background-color: deeppink;color: white;margin-left: 5px;">
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <?php $totalprice= $totalprice + $product->price ?>
                    @endforeach
                    </tbody>

                </table>
                <div style="text-align: right;">
                    <h1 style="font-size: 22px;font-weight: 500; font-family: Roboto">Total Price: {{$totalprice}}/=</h1>
                </div>


            </div>
        </div>
    </div>
@endsection
