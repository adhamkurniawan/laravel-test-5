<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Laravel Test Version 5</title>
	{!! Html::style('assets/css/bootstrap.min.css') !!}
</head>
<body>
	@yield('content')

	{!! HTML::script('assets/js/jquery.min.js') !!}
	{!! HTML::script('assets/js/bootstrap.min.js') !!}
</body>
</html>