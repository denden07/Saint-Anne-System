<!DOCTYPE html>
<html lang="en">
<head>
    <title>Saint Anne Academy | Teacher</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('logins/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('logins/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('logins/fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('logins/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('logins/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('logins/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('logins/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('logins/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('logins/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('logins/css/main.css')}}">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100" style="background-image: url('{{URL::to('assets/img/logo/background.jpg')}}');">
        <div class="wrap-login100">

            <form class="login100-form validate-form" role="form" method="POST" action="{{ route('teacher.login.submit') }}">
                {{ csrf_field() }}

                <img  width="200"  height="100" class="main-logo" style="margin-left: 25%" src="{{URL::to('assets/img/logo/saa.png')}}" alt="" />

                <span class="login100-form-title p-b-34 p-t-27">
						Welcome!
					</span>
                <div class="container">
                <div class="row">
                    <div class="col">
                        <a  href="{{url('/log-in')}}"><img style=" -webkit-filter: drop-shadow(12px 12px 25px rgba(0,0,0,0.5))" class="role-icon" height="100px" src="{{URL::to('home/Admin.jpg')}}" ></a>
                        <a href="{{url('/log-in')}}"><p style="color: white;text-align: center;font-size: 1.5em">Admin</p></a>
                    </div>
                    <div class="col">
                        <a href="{{url('teacher/login')}}"> <img style=" -webkit-filter: drop-shadow(12px 12px 25px rgba(0,0,0,0.5))" class="role-icon" height="100px" src="{{URL::to('home/teacher.png')}}" ></a>
                        <a href="{{url('teacher/login')}}"><p style="color: white;text-align: center;font-size: 1.5em">Teacher</p></a>
                    </div>
                    <div class="col">
                        <img class="role-icon" style=" -webkit-filter: drop-shadow(12px 12px 25px rgba(0,0,0,0.5))" height="100px" src="{{URL::to('home/student.png')}}" alt="">
                        <a href="{{url('/log-in')}}"><p style="color: white;text-align: center;font-size: 1.5em">Student</p></a>
                    </div>
                </div>
        </div>

            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="{{asset('logins/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('logins/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('logins/vendor/bootstrap/js/popper.js')}}"></script>
<script src="{{asset('logins/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('logins/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('logins/vendor/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('logins/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('logins/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('logins/js/main.js')}}"></script>

</body>
</html>