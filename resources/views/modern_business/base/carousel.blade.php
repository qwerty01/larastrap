{{-- Header Carousel --}}
<header id="myCarousel" class="carousel slide">
	{{-- Indicators --}}
	<ol class="carousel-indicators">
	@for($i = 0; $i < count($slides); $i++)
		<li data-target="#myCarousel" data-slide-to="{{ $i }}"{!! $i == 0 ? ' class="active"' : '' !!}></li>
	@endfor
	</ol>

	{{-- Wrapper for slides --}}
	<div class="carousel-inner">
		@foreach($slides as $num => $slide)
		<div class="item{{ $num == 0 ? ' active' : '' }}">
			<div class="fill" style="background-image:url('{!! $slide['image'] !!}');"></div>
			<div class="carousel-caption">
				<h2>{{ $slide['caption'] }}</h2>
			</div>
		</div>
		@endforeach
	</div>

	{{-- Controls --}}
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		<span class="icon-prev"></span>
	</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">
		<span class="icon-next"></span>
	</a>
</header>