@extends('layouts.default')
@section('content')
<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<h2>Register</h2>
		@include('include.errors')
		{{ Form::open(['route' => ['register'], 'method' => 'post']) }}
		<div class="form-group">
			{{ Form::label('email','Email')}}
			{{ Form::text('email', null, ['class' => 'form-control', 'required' => 'required']) }}
		</div>
		<div class="form-group">
			{{ Form::label('password','Password')}}
			{{ Form::password('password', ['class' => 'form-control', 'required' => 'required']) }}
		</div>
		<div class="form-group">
			{{ Form::label('password_confirmation','Password Confirm')}}
			{{ Form::password('password_confirmation', ['class' => 'form-control', 'required' => 'required']) }}
		</div>
		{{ Form::submit('Register', ['class' => 'btn btn-primary']) }} or
		{{ HTML::linkRoute('login', 'Login', [], ['class' => 'btn btn-success']) }}
		{{ Form::close() }}
	</div>
</div>
@stop
