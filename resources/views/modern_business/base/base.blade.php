<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="{{ $app['description'] }}">
	<meta name="author" content="{{ $app['author'] }}">

	<title>{{ $app['name'] }} - @yield('title')</title>

	{{-- CSS --}}
	<link rel="stylesheet" href="{{ asset('css/all.css') }}" />
	@yield('css')

	{{-- JS --}}
	<script src="{{ asset('js/head.js') }}"></script>
	@yield('script-load')
</head>

<body>
	{{-- Navigation --}}
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			{{-- Brand and toggle get grouped for better mobile display --}}
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
						data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ url('/') }}">{{ $app['name'] }}</a>
			</div>
			@include('modern_business.base.navigation', ['navigation' => $navigation])
		</div>
		{{-- /.container --}}
	</nav>

	@yield('carousel')

	{{-- Page Content --}}
	<div class="container">
		@yield('content')
		<hr>
		{{-- Footer --}}
		<footer>
			<div class="row">
			@section('footer')
				<p>Copyright &copy; {{ $app['name'] }} {{ Carbon\Carbon::now()->format('Y') }}</p>
			@show
			</div>
		</footer>
		{{-- /.footer --}}
	</div>
	{{-- /.container --}}

	{{-- Scripts --}}
	<script src="{{ asset('js/load.js') }}"></script>
	@yield('script-load')
</body>
</html>