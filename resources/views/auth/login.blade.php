<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
{{--    <link rel="icon" type="image/png" href="{{asset('loginsss')}}/images/icons/favicon.ico"/>--}}
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('loginsss')}}/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('loginsss')}}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('loginsss')}}/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('loginsss')}}/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('loginsss')}}/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('loginsss')}}/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('loginsss')}}/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('loginsss')}}/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('loginsss')}}/css/util.css">
    <link rel="stylesheet" type="text/css" href="{{asset('loginsss')}}/css/main.css">
    <!--===============================================================================================-->
</head>
<body style="background-color: #666666;">

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
                @csrf
                <span class="login100-form-title mb-3" style="margin-top: -113px">
						<span style="font-size: 28px; font-weight: 600;color: #0b5ed7">Lunch </span> <span style="font-size: 32px;font-weight: 600;color: red">B</span> <span style="color: #28a745;font-size: 28px;font-weight: 700">ox</span></a>
					</span>
					<span class="login100-form-title mb-4">
						Login to continue
					</span>


                <label for="Email">Enter Your Email</label>
                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input class="input100" type="email" name="email">
                </div>
                <label for="Email">Enter Your Password</label>
                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="password">
                </div>



{{--                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">--}}
{{--                    <input class="input100" type="email" name="email">--}}
{{--                    <span class="focus-input100"></span>--}}
{{--                    <span class="label-input100">Email</span>--}}
{{--                </div>--}}


{{--                <div class="wrap-input100 validate-input" data-validate="Password is required">--}}
{{--                    <input class="input100" type="password" name="password">--}}
{{--                    <span class="focus-input100"></span>--}}
{{--                    <span class="label-input100">Password</span>--}}
{{--                </div>--}}

                <div class="flex-sb-m w-full p-t-3 p-b-32">
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember">
                        <label class="label-checkbox100" for="ckb1">
                            Remember me
                        </label>
                    </div>

                    <div>
                        <a href="{{ route('password.request') }}" class="txt1">
                            Forgot Password?
                        </a>
                    </div>
                </div>


                <div class="mt-4 mb-0">
                    <input type="submit" class="btn btn-primary text-center" style="width: 100%" value="Login">
                </div>

                <div class="text-center p-t-46 p-b-20">
						<span class="txt2">
                            <a href="{{ route('join') }}">or Join With Us</a>
						</span>
                </div>

                <div class="login100-form-social flex-c-m">
                    <a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
                        <i class="fa fa-facebook-f" aria-hidden="true"></i>
                    </a>

                    <a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                </div>
            </form>

            <div class="login100-more" style="background-image: url('{{asset('loginsss')}}/images/food.jpg');">
            </div>
        </div>
    </div>
</div>





<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

</body>
</html>
