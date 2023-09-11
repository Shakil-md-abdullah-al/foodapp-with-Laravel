@extends('user.master')
@section('title')
    Event Page
@endsection
@section('content')
    <div class="container">
        <div class="row" style="margin-top: 30px;margin-bottom: 30px;background-color: rgba(255,182,40,0.06)">
            <div class="col-md-12 mt-5">
                <h2 style="font-family: Poppins;font-size: 40px;font-weight: 600" class="text-center">Our Corporate Event Management</h2>
                </div>

            <p style="margin-top: 20px;margin-bottom: 20px;line-height: 32px;text-align: justify;font-family: Poppins;font-size: 22px;word-spacing: 2px;padding-left: 20px;padding-right: 20px">Event management is the application of project management to the creation and development of small and/or large-scale personal or corporate events such as festivals, conferences, ceremonies, weddings, formal parties, concerts, or conventions. It involves studying the brand, identifying its target audience, devising the event concept, and coordinating the technical aspects before actually launching the event.[1]

                The events industry now includes events of all sizes from the Olympics down to business breakfast meetings. Many industries, celebrities, charitable organizations, and interest groups hold events in order to market their label, build business relationships, raise money, or celebrate achievement.</p>


                <div style="padding-left: 20px;padding-right: 20px;margin-bottom: 20px">
                    <a style="padding-left: 20px;padding-right: 20px" class="btn btn-primary" href="{{route('book')}}"> Book An Event</a>
                </div>
        </div>

        <div class="row" style="margin-bottom: 30px; background-color: rgba(151,255,53,0.08)">
            @foreach($event as $event)
            <div class="col-md-4">
                <div class="card" style="width: 18rem;margin-bottom: 10px">
                    <img src="{{asset($event->image)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 style="font-size: 25px;text-align: center" class="card-title">{{$event->name}}</h2>
                        <p class="card-text" style="font-size: 22px;line-height: 35px;margin-bottom: 10px;text-align: justify">{{$event->description}}</p>
                        <a href="#" class="btn btn-primary" style="text-align: center">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
@endsection
