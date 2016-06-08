@extends('modern_business.base.base')
@section('title', 'Main')

@section('carousel')
	@include('modern_business.base.carousel', ['slides' => [
		['image' => 'http://placehold.it/1900x1080&text=Slide One', 'caption' => 'Caption 1'],
		['image' => 'http://placehold.it/1900x1080&text=Slide Two', 'caption' => 'Caption 2'],
		['image' => 'http://placehold.it/1900x1080&text=Slide Three', 'caption' => 'Caption 3']]])
@endsection

@section('lorem')
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias
		at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
@endsection

@section('content')
	@section('marketing')
		@include('modern_business.base.panel', ['title' => 'Bootstrap v3.2.0', 'content' => 'lorem', 'icon' => 'fa-check', 'link' => '#'])
		@include('modern_business.base.panel', ['title' => 'Free & Open Source!', 'content' => 'lorem', 'icon' => 'fa-gift', 'link' => '#'])
		@include('modern_business.base.panel', ['title' => 'Easy to Use', 'content' => 'lorem', 'icon' => 'fa-compass', 'link' => '#'])
	@endsection
	@include('modern_business.base.row', ['title' => 'Main', 'content' => 'marketing'])
	@section('portfolio')
		@for($i = 0; $i < 6; $i++)
			@include('modern_business.base.portfolio_item', ['url' => action('NavigationController@pfi'), 'image' => 'http://placehold.it/700x450', 'name' => ''])
		@endfor
	@endsection
	@include('modern_business.base.row', ['title' => 'Portfolio', 'content' => 'portfolio'])
	@section('features')
		@include('modern_business.base.features', [
			'title' => 'Modern Business Features',
			'intro' => 'The Modern Business template by Start Bootstrap includes:',
			'features' => [
				['name' => 'Bootstrap v3.2.0', 'important' => true],
				['name' => 'jQuery v1.11.0'],
				['name' => 'Font Awesome v4.1.0'],
				['name' => 'Working PHP contact form with validation'],
				['name' => 'Unstyled page elements for easy customization'],
				['name' => '17 HTML pages']],
			'content' => 'lorem',
			'image' => 'http://placehold.it/700x450',
			'imgalt' => ''])
	@endsection
	@include('modern_business.base.row', ['title' => 'Modern Business Features', 'content' => 'features'])
@endsection

@section('script-load')
	{{-- Script to Activate the Carousel --}}
	<script>
		$('.carousel').carousel({
			interval: 5000 //changes the speed
		})
	</script>
@endsection
