@extends('layouts.master')
@section('content')
<div class="col-md-6 col-md-offset-3">
	<ul>
		@foreach($errors->all() as $error)
			<li>{{$error}}</li>
		@endforeach
	</ul>
	{!! Form::open(array('route' => 'product_store', 'class' => 'form', 'novalidate' => 'novalidate', 'files' => true)) !!}
		<div class="form-group">
		    {!! Form::label('Product Name') !!}
		    {!! Form::text('name', null, array('placeholder'=>'Chess Board')) !!}
		</div>

		<div class="form-group">
		    {!! Form::label('Product SKU') !!}
		    {!! Form::text('sku', null, array('placeholder'=>'1234')) !!}
		</div>

		<div class="form-group">
		    {!! Form::label('Product Image') !!}
		    {!! Form::file('image', null) !!}
		</div>

		<div class="form-group">
		    {!! Form::submit('Create Product!') !!}
		</div>
	{!! Form::close() !!}
</div>
@endsection
