<div class="col-md-4">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4><i class="fa fa-fw {{ $icon }}"></i> {{ $title }}</h4>
		</div>
		<div class="panel-body">
			@yield($content)
			<a href="{!! $link !!}" class="btn btn-default">Learn More</a>
		</div>
	</div>
</div>
