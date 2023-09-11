<!DOCTYPE html>
<html>
<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="">
    <title>@yield('title')</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{asset('user-assets')}}/css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="{{asset('user-assets')}}/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{asset('user-assets')}}/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{asset('user-assets')}}/css/responsive.css" rel="stylesheet" />
</head>
<body>
    @if(session()->has('message'))
        <div class="alert alert-success">
            <button data-dismiss="alert" type="button" class="close">&times;</button>
            {{session()->get('message')}}
        </div>
    @endif
<div class="hero_area1">
    <!-- header section strats -->
    @include('user.include.header')
    <!-- end header section -->
{{--    @include('user.include.slider')--}}
{{--    @include('user.include.slider')--}}
</div>
<!-- why section -->
@yield('content')
<!-- end client section -->
<!-- footer start -->
<footer>
    @include('user.include.footer')
</footer>
<!-- footer end -->
<div class="cpy_">
    <p class="mx-auto">© 2023 All Rights Reserved By <a href="">Explore your World</a><br>

        Distributed By <a href="" target="_blank">MAAS</a>

    </p>
</div>
<!-- jQery -->
<script src="{{asset('user-assets')}}/js/jquery-3.4.1.min.js"></script>
<!-- popper js -->
<script src="{{asset('user-assets')}}/js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="{{asset('user-assets')}}/js/bootstrap.js"></script>
<!-- custom js -->
<script src="{{asset('user-assets')}}/js/custom.js"></script>
</body>
</html>
