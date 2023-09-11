@extends('admin.master')
@section('title')
    Package Order
@endsection

@section('content')
    <div class="container-fluid px-4">
        <br>
        <br>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Manage Order
                {{--                <div class="d-flex justify-content-end" style="margin-top: -25px;"><a href="{{route('products.create')}}" class="btn btn-primary">Add Food</a></div>--}}

            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Customer Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Package Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Delivery Status</th>
                        <th>Payment Status</th>
                        <th>Action</th>
                        <th>Print</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $product)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->email}}</td>
                            <td>{{$product->phone}}</td>
                            <td>{{$product->address}}</td>
                            <td>{{$product->p_name}}</td>
                            {{--                            <td>{{$product->description}}</td>--}}
                            <td>{{$product->quantity}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->delivery_status}}</td>
                            <td>{{$product->payment_status}}</td>
                            <td class="d-flex">
                                @if($product->delivery_status=='Processing')
                                    {{--                                @if(Auth::user()->id == $user->id)--}}
                                    <div class="btn-group">
                                        <a href="{{route('deliver-Package',$product->id)}}" onclick="return confirm('Are You Sure to Deliver it??')" class="btn btn-primary">Delivered</a>
                                        {{--                                    <form action="{{route('products.destroy',$product->id)}}" method="post">--}}
                                        {{--                                        @csrf--}}
                                        {{--                                        @method('DELETE')--}}
                                        {{--                                        <input type="submit" onclick="return confirm('Are You Want to Delete This Product?')" value="Delete" class="btn btn-danger" style="background-color: deeppink;color: white;margin-left: 5px;">--}}
                                        {{--                                    </form>--}}
                                    </div>
                                @else
                                    <p style="color: green">Delivered</p>
                                @endif

                                {{--                                @endif--}}
                            </td>
                            <td><a href="{{route('print_Package_pdf',$product->id)}}" class="btn btn-secondary">Print PDF</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
