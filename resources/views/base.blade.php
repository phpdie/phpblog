<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
</head>
<body>
	@section('sidebar')
        我是sidebar的内容
    @show
	<div class="box">
		 这里显示具体内容
		 @yield('content')
	</div>
</body>
</html>