<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	@yield('aimeos_header')

	<title>Favr Albay</title>

	<link type="text/css" rel="stylesheet" href='https://fonts.googleapis.com/css?family=Roboto:400,300'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link href="{{ asset('css/aimeos.css') }}" rel="stylesheet">
	<link href="{{ asset('css/demo.css') }}" rel="stylesheet">
	<style>.aimeos.basket-mini, .aimeos.locale-select { clear: none; }</style>

	@yield('aimeos_styles')
</head>
<body>

	<nav class="navbar navbar-expand-md navbar-light" style="margin-bottom: 2em">
		<a class="navbar-brand" href="/">
			<img src="{{ asset('img/logo.png') }}" height="40" width="160" title="Favr Logo">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
			<ul class="navbar-nav">
				@if (Auth::guest())
					<li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
					<li class="nav-item"><a class="nav-link" href="/register">Register</a></li>
				@else
					<li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a class="nav-link" href="{{ route('aimeos_shop_account',['site'=>Route::current()->parameter('site','default'),'locale'=>Route::current()->parameter('locale','en'),'currency'=>Route::current()->parameter('currency','EUR')]) }}" title="Profile">Profile</a></li>
							<li><form id="logout" action="/logout" method="POST">{{csrf_field()}}</form><a class="nav-link" href="javascript: document.getElementById('logout').submit();">Logout</a></li>
						</ul>
					</li>
				@endif
			</ul>
			@yield('aimeos_head')
		</div>
	</nav>

    <div class="container">
		@yield('aimeos_nav')
		@yield('aimeos_stage')
		@yield('aimeos_body')
		@yield('aimeos_aside')
		@yield('content')
	</div>

    <div class="footer-section">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div>
              <h1>Get in touch</h1>
              <ul>
                <li><a href="https://twitter.com/favrxyz">Twitter</a></li>
                <li><a href="https://www.facebook.com/favr.xyz">Facebook</a></li>
                <li><a href="https://instagram.com/favr.xyz">Instagram</a></li>
                <li><a href="mailto:favr.xyz@gmail.com">Gmail</a></li>
                <li><a href="sms:+639175197603">Message: 0917.519.7603</a></li>
                <li><a href="tel:+639175197603">Call: 0917.519.7603</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

	<!-- Scripts -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	@yield('aimeos_scripts')

	</body>
</html>
