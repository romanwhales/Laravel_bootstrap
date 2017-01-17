<!DOCTYPE html>
<html>
<head>
	<title>Array Looping</title>
</head>
<body>
	<!--<ul>
		@foreach ($lists as $list)
			<li>{{{$list}}}</li>
		@endforeach
	</ul>-->
	@extends('layouts.master')

	@section('content')
	<ul>
		@if (count($lists) >0)
			@foreach($lists as $list)
				<li>{{$list}}</li>
			@endforeach
		@else
			<li>You dont't have any lists saved.</li>
		@endif
	</ul>
	<img src="/images/Cover.jpg" alt="Cover Page">
</body>
</html>