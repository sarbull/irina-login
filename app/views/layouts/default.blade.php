<!DOCTYPE html>
<html lang="en">
	<head>
		@include('include.head')
	</head>
	<body>
		@include('include.menu')
		<div class="container">
			@yield('content')
		</div>
		@include('include.footer')
		@include('include.javascripts')
		@yield('javascripts')
	</body>
</html>
