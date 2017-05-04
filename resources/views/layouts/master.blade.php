<!--**************************
Created by: Anh Pham
Date: 23/02/2017
Version: 01
***************************-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>@yield('meta-title', 'VietMarket') - VietMarketPlace</title>
	<link rel="stylesheet" href="{{asset('public/libs/bootstrap/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('public/libs/font-awesome/css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('public/css/client/mystyle.css')}}"/>
	<link rel="stylesheet" href="{{asset('public/css/client/homepage.css')}}"/>
	<link rel="stylesheet" href="{{asset('public/css/client/map.css')}}"/>
	<style>
		#map {
        height: 100%;
      }
	</style>
	@yield('css')
</head>
<body>
	@include('layouts.header')
	<div role="main" class="main main-page">
		@yield('top-information')

		@yield('content')

	</div>

	@include('layouts.footer')
	<script type="text/javascript" async="" defer="" src="{{url('https://maps.googleapis.com/maps/api/js?key=AIzaSyA9WOBv_HjdT4h03JtNFLoPHxdaMrP1Dyk&libraries=places')}}"></script>
	{{--<script src="{{asset('public/libs/jquery/starscripts.js')}}"></script>--}}
	<script src="{{asset('public/libs/tether/tether.min.js')}}"></script>
	<script src="{{asset('public/libs/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('public/libs/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/js/client/myscripts.js')}}"></script>
	@yield('scripts')
</body>
</html>