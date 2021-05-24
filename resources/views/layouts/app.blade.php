<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Apolo monitoring</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="{{asset('/Login_v16/images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('/Login_v16/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('/Login_v16/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('/Login_v16/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('/Login_v16/vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('/Login_v16/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('/Login_v16/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('/Login_v16/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('/Login_v16/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css') }}">
<!--===============================================================================================-->
</head>
<body>
    <div id="app">


            @yield('content')

    </div>

<!--===============================================================================================-->
<script src="{{asset('/Login_v16/vendor/jquery/jquery-3.2.1.min.js') }}') }}"></script>
<!--===============================================================================================-->
	<script src="{{asset('/Login_v16/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{asset('/Login_v16/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{asset('/Login_v16/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{asset('/Login_v16/vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{asset('/Login_v16/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{asset('/Login_v16/vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{asset('/Login_v16/js/main.js') }}"></script>
</body>
</html>
