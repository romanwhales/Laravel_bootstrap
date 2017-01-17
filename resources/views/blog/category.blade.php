<!DOCTYPE html>
<html>
<head>
	<title>Category With Parameter</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<h1>You passed in this Category {{$category}}</h1>
	<p>Welcome, {{$name or 'California'}} <a href="http://www.wjgilmore.com" class="btn btn-success">W.J. Gilmore, LLC</a></p>
</body>
</html>