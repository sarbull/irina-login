	<nav class="navbar navbar-fixed-top navbar-default" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				{{ HTML::linkRoute('root', 'Irina Login', [], ['class' => 'navbar-brand']) }}
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">

				</ul>
				<ul class="nav navbar-nav pull-right">
					@if (Auth::check())
						<p class="navbar-text">Hello {{ Auth::user()->email }}</p>
						<li>{{ HTML::linkRoute('logout', 'Logout') }}</li>
					@else
						<li>{{ HTML::linkRoute('login', 'Login') }}</li>
					@endif
				</ul>
			</div><!-- /.nav-collapse -->
		</div><!-- /.container -->
	</nav><!-- /.navbar -->
