@extends('user.master')
@include('user.products.table-componemt')
@section('title')
    Package Cart Page
@endsection

@section('content')
    <!-- Include Bootstrap CSS and JavaScript -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"></script>

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
                            <a class="dropdown-item" href="{{route('cash-order-package')}}" id="cashOnDelivery">Pay</a>
{{--                            <a class="dropdown-item" href="{{route('cash-order-package')}}" id="cashOnDelivery">Pay with Card</a>--}}
                        </div>
                        <script>
                            document.addEventListener("DOMContentLoaded", function () {
                                // Get the current date and time
                                const now = new Date();
                                const currentHour = now.getHours();

                                // Check if the user selected "Cash on Delivery" for the "monthly" package
                                document.getElementById('cashOnDelivery').addEventListener('click', function (e) {
                                    e.preventDefault(); // Prevent the default link behavior

                                    // Check if the package name is "monthly"
                                    const packageName = 'monthly'; // Replace with the actual package name
                                    if (packageName === 'monthly') {
                                        // Check if the current time is between 10 am (10) and 9 pm (21)
                                        if (currentHour >= 1 && currentHour < 24) {
                                            // Display a confirmation prompt
                                            const confirmation = prompt('You have to pay 40%. Please enter your account number and password to proceed:');

                                            // Check if the user entered the correct account number and password
                                            const correctAccountNumber = '12345678'; // Replace with the correct account number
                                            const correctPassword = '1234'; // Replace with the correct password

                                            if (confirmation === `${correctAccountNumber} ${correctPassword}`) {
                                                // Proceed to the Cash on Delivery page
                                                window.location.href = "{{ route('cash-order-package') }}";
                                            } else {
                                                alert('Invalid account number or password. Please try again.');
                                            }
                                        } else {
                                            alert('You can only proceed between 10 am to 9 pm.');
                                        }
                                    } else {
                                        // Proceed to the Cash on Delivery page for other packages
                                        window.location.href = "{{ route('cash-order-package') }}";
                                    }
                                });
                            });
                        </script>



                    </div>
                    <a href="{{route('all-products')}}" class="btn btn-primary">Shop More</a>
                </div>


            </div>
            <div class="card-body">
                <table id="datatablesSimple" id="datatablesSimple" class="custom-table">
                    <thead>
                    <tr>
                        {{--                        <th >SL</th>--}}
                        <th >Customer Name</th>
                        <th>Packege Name</th>
                        <th>Price</th>
                        <th >Quantity</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $totalprice=0; ?>
                    @foreach($cart as $product)

                        <tr>
                            {{--                            <td >{{$loop->iteration}}</td>--}}
                            <td >{{$product->name}}</td>
                            <td>{{$product->p_name}}</td>
                            <td >{{$product->price}}</td>
                            <td>{{$product->quantity}}</td>
                            <td class="d-flex">
                                <div class="btn-group">
                                    {{--                                    <a href="{{route('products.edit',$product->id)}}" class="btn btn-primary">Edit</a>--}}
                                    <form action="{{route('delete-pkg-cart',$product->id)}}" method="post">
                                        @csrf
                                        {{--                                        @method('DELETE')--}}
                                        <input type="submit" onclick="return confirm('Are You Want to Delete This Product?')" value="Remove" class="btn btn-danger" style="background-color: deeppink;color: white;margin-left: 5px;">
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

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        .description {
            width: 80%;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-height: 36px; /* 2 lines of text assuming 18px line height */
            line-height: 18px;
        }
    </style>
@endsection
