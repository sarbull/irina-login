@extends('layouts.simple')

@section('head')
<link href="/logins/login.css" rel="stylesheet">
@stop

@section('content')
	{{ Form::open(['url' => 'login', 'method' => 'post', 'class' => 'form-signin']) }}
		<h2 class="form-signin-heading">Please sign in</h2>
		@include('include.errors')
		<div class="form-group">
			{{ Form::label('email', 'Email') }}
			{{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email', 'autofocus', 'required' => 'required']) }}
		</div>
		<div class="form-group">
			{{ Form::label('password','Password') }}
			{{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password', 'required']) }}
		</div>
		{{ HTML::linkRoute('register', 'Register', [], ['class' => 'btn btn-lg btn-success col-md-5']) }}
		{{ Form::submit('Sign in', ['class' => 'btn btn-lg btn-primary col-md-5 pull-right']) }}
	{{ Form::close() }}
@stop
