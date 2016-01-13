@extends('layouts.main')
@section('content')
{{ var_dump($errors) }}
	{!! Form::open( array('route' => 'todos.store') ) !!}
		{!! Form::label('title', 'List Title') !!}
		{!! Form::text('title') !!}
		{!! $errors->first('title', '<small>:message</small>') !!}
		{!! Form::submit('Submit', array('class' => 'button')) !!}
	{!! Form::close() !!}


	<!--
	<form method="POST" action="http://laravel.dev:8000/todos" accept-charset="UFT-8">
			<label for="title">List Title</label>
			<input name="title" type="text" id="title">
			<input class="button" type="submit" value="Submit">
			<input type="hidden" name="_token" value="{!! csrf_token() !!}">
		</form>
	-->
@stop