<header class="header_section">
    <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="{{route('home')}}">
{{--                <img width="250" src="{{asset('user-assets')}}/images/lb2.png"style="width: 64px" width="64px"height="71px" alt="#" />--}}
                <span style="font-size: 28px; font-weight: 600;color: #0b5ed7">Lunch </span> <span style="font-size: 32px;font-weight: 600;color: red">B</span> <span style="color: #28a745;font-size: 28px;font-weight: 700">ox</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Pages <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('cheff')}}">chef</a></li>
{{--                            <li><a href="testimonial.html">Testimonial</a></li>--}}
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('all-products')}}">Foods</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('event.create')}}">Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">Contact</a>
                    </li>
                    @if(Route::has('login'))
                        @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="cartDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Cart
                                </a>
                                <div class="dropdown-menu" aria-labelledby="cartDropdown">
                                    <a class="dropdown-item" href="{{ route('show-cart') }}">Regular Cart</a>
                                    <a class="dropdown-item" href="{{ route('show-menu-cart') }}">Menu Cart</a>
                                    @if (Auth::user() && Auth::user()->usertype == 2)
                                        <a class="dropdown-item" href="{{ route('show-pkg-cart') }}">Package Cart</a>
                                    @endif
                                </div>

                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="orderDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Order
                                </a>
                                <div class="dropdown-menu" aria-labelledby="orderDropdown">
                                    <a class="dropdown-item" href="{{ route('show-order') }}">Regular Orders</a>
                                    <a class="dropdown-item" href="{{ route('show-menu-order') }}">Menu Order</a>
                                    @if (Auth::user() && Auth::user()->usertype == 2)
                                        <a class="dropdown-item" href="{{route('show-package-order')}}">Package Order</a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('mycustom-order-show') }}">Custom Order</a>
                                    <a class="dropdown-item" href="{{ route('myevent-show') }}">Events</a>
                                </div>

                            </li>
{{--                            @if(Auth::user()->usertype == 2)--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="">Office</a>--}}
{{--                                </li>--}}
{{--                            @endif--}}
                        @endauth
                    @endif
                    <form class="form-inline">
                        <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </form>

                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item" style="margin-right: 10px;margin-left: 10px;">
                                <x-app-layout>

                                </x-app-layout>
                            </li>

                      @else

                    <li class="nav-item" style="margin-right: 10px;margin-left: 10px;">
                        <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
                    </li>
{{--                    <li class="nav-item">--}}
{{--                        <a class="btn btn-success" href="{{ route('register') }}">Register</a>--}}
{{--                    </li>--}}
                            <li>
                                <a href="{{route('join')}}" class="btn btn-success">Join</a>
                            </li>
                        @endauth

                     @endif

                </ul>
            </div>
        </nav>
    </div>
</header>
