@extends('layouts.master')
@section('content')
	<div class="col-md-6 col-md-offset-3">
		{!! Form::model($list,array('method'=>'put','route'=>['lists.update',$list->id],'class'=>'form'))!!}
		<div class="form-group">
			{!! Form::label('List name') !!}
			{!! Form::text('name',null,array('required','class'=>'form-control','placeholder'=>'San Juan Vacation')) !!}
		</div>
		<div class="form-group">
			{!! Form::label('List Description') !!}
			{!! Form::textarea('description',null,array('required','class'=>'form-control','placeholder'=>'Things to do before leaving for vacation')) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Update List',array('class' => 'btn btn-primary'))!!}
		</div>
		{!! Form::close()!!}
	</div>
@stop