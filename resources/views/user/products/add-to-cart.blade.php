@extends('user.master')
@section('title')
    Cart
@endsection

@section('content')



@section('content')
    <div class="container-fluid px-4">
        <br>
        <br>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Manage Products
                <div class="d-flex justify-content-end" style="margin-top: -25px;"><a href="{{route('products.create')}}" class="btn btn-primary">Add Products</a></div>

            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{$product->title}}</td>
                            <td>{{$product->category}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->quantity}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->discount_price}}</td>
                            <td>
                                <img src="{{$product->image}}" alt="" class="" width="120px" height="120px">
                            </td>
                            <td class="d-flex">
                                {{--                                @if(Auth::user()->id == $user->id)--}}
                                <div class="btn-group">
                                    <a href="{{route('products.edit',$product->id)}}" class="btn btn-primary">Edit</a>
                                    <form action="{{route('products.destroy',$product->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" onclick="return confirm('Are You Want to Delete This Product?')" value="Delete" class="btn btn-danger" style="background-color: deeppink;color: white;margin-left: 5px;">
                                    </form>
                                </div>
                                {{--                                @endif--}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

