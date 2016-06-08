{{-- Collect the nav links, forms, and other content for toggling --}}
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	<ul class="nav navbar-nav navbar-right">
		@foreach($navigation as $nav)
			@if (array_key_exists('children', $nav))
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ $nav['name'] }} <b class="caret"></b></a>
					<ul class="dropdown-menu">
						@foreach($nav['children'] as $child)
							<li>
								<a href="{{ action($child['route']) }}">{{ $child['name'] }}</a>
							</li>
						@endforeach
					</ul>
				</li>
			@else
				<li>
					<a href="{{ action($nav['route']) }}">{{ $nav['name'] }}</a>
				</li>
			@endif
		@endforeach
	</ul>
</div>
{{-- /.navbar-collapse --}}