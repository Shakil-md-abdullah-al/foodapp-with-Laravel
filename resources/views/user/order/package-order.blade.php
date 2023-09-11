@extends('user.master')
@section('title')
    Package Orders
@endsection

@section('content')
    <div class="container-fluid px-4">
        <br>
        <br>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Manage Order
            </div>
            <div class="card-body">
                <table id="datatablesSimple" class="table table-bordered">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Customer Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Platter Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Delivery Status</th>
                        <th>Payment Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$order->name}}</td>
                            <td>{{$order->email}}</td>
                            <td>{{$order->phone}}</td>
                            <td>{{$order->address}}</td>
                            <td>{{$order->p_name}}</td>
                            <td>{{$order->quantity}}</td>
                            <td>{{$order->price}}</td>
                            <td>{{$order->delivery_status}}</td>
                            <td>{{$order->payment_status}}</td>
                            <td class="d-flex">
                                @if($order->delivery_status=='Processing')
                                    <div class="btn-group">
                                        <form action="{{route('cancel-menu-order',$order->id)}}" method="post">
                                            @csrf
                                            {{-- @method('DELETE') --}}
                                            <input type="submit" onclick="return confirm('Are You Want to Cancel it?')" value="Cancel" class="btn btn-danger" style="background-color: deeppink;color: white;margin-left: 5px;">
                                        </form>
                                    </div>
                                @else
                                    <a href="{{route('print_Package_pdf',$order->id)}}" class="btn btn-secondary">Print PDF</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
