@extends('user.master')

@section('title')
    Chefs
@endsection

@section('content')
    <section class="chefs" style="margin-top: 30px; margin-bottom: 30px">
        <div class="container">
            @foreach($chefs as $key => $chef)
                <div class="row mb-5">
                @if($key % 2 == 0) <!-- Check if the current index is even -->
                    <div class="col-md-4">
                        <img src="{{$chef->image}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-8" style="padding-left: 150px">
                        <h2 style="font-size: 32px;font-weight: 600; padding-bottom: 10px">{{$chef->name}}</h2>
                        <h5 style="color: green;font-size: 22px;font-weight: 600; padding-bottom: 10px">{{$chef->pos}}</h5>
                        <p style="font-size: 22px;font-weight: 400; padding-bottom: 10px; line-height: 35px">{{$chef->description}}</p>
                        <blockquote style="font-size: 18px;color:blue;font-weight: 600; padding-bottom: 10px">{{$chef->cq}}</blockquote>
                    </div>
                @else <!-- Odd index -->
                    <div class="col-md-8" style="padding-left: 150px">
                        <h2 style="font-size: 32px;font-weight: 600; padding-bottom: 10px">{{$chef->name}}</h2>
                        <h5 style="color: green;font-size: 22px;font-weight: 600; padding-bottom: 10px">{{$chef->pos}}</h5>
                        <p style="font-size: 22px;font-weight: 400; padding-bottom: 10px; line-height: 35px">{{$chef->description}}</p>
                        <blockquote style="font-size: 18px;color:blue;font-weight: 600; padding-bottom: 10px">{{$chef->cq}}</blockquote>
                    </div>
                    <div class="col-md-4">
                        <img src="{{$chef->image}}" class="img-fluid" alt="">
                    </div>
                    @endif
                </div>
            @endforeach
        </div>
    </section>
@endsection
