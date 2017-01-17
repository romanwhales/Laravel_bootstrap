<!DOCTYPE html>
<html>
<head>
	<title>Welcome to TODOParrot</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<script type="text/javascript" src="/js/jquery.js"></script>
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>
</head>
<body>
	@if(Session::has('message'))
		<div class="alert alert-info">
			{{Session::get('message')}}
		</div>
	@endif
	@yield('content')
	<p>Yo Master Template</p>
	
</body>
</html>