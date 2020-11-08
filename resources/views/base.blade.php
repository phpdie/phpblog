<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<script src="{{asset('js/jquery.2.1.1.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
</head>
<body>
	@section('sidebar')
        我是sidebar的内容
    @show
	<div class="box">
		 这里显示具体内容
		 @yield('content')
	</div>

	@include('flash::message')
	<script>
		$(document).ready(function(){
			$('#flash-overlay-modal').modal();
		});
	</script>
</body>
</html>