<div class="col-md-6">
	<p>{{ $intro }}</p>
	<ul>
		@foreach($features as $feature)
			@if(array_key_exists('important', $feature) && $feature['important'] == true)
				<li><strong>{{ $feature['name'] }}</strong></li>
			@else
				<li>{{ $feature['name'] }}</li>
			@endif
		@endforeach
	</ul>
	@yield($content)
</div>
<div class="col-md-6">
	<img class="img-responsive" src="{{ $image }}" alt="{{ $imgalt or '' }}">
</div>
