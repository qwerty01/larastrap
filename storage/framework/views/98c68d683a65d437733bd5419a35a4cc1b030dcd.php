<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo e($app['description']); ?>">
	<meta name="author" content="<?php echo e($app['author']); ?>">

	<title><?php echo e($app['name']); ?> - <?php echo $__env->yieldContent('pagetitle'); ?></title>

	<!-- CSS -->
	<link rel="stylesheet" href="<?php echo e(asset('css/all.css')); ?>" />
	<?php echo $__env->yieldContent('css'); ?>

	<!-- JS -->
	<script src="<?php echo e(asset('js/head.js')); ?>"></script>
	<?php echo $__env->yieldContent('script-load'); ?>
</head>

<body>
	<!-- Navigation -->
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.html"><?php echo e($app['name']); ?></a>
			</div>
			<?php echo $__env->yieldContent('navigation'); ?>
		</div>
		<!-- /.container -->
	</nav>

	<!-- Header Carousel -->
	<header id="myCarousel" class="carousel slide">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				<div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide One');"></div>
				<div class="carousel-caption">
					<h2>Caption 1</h2>
				</div>
			</div>
			<div class="item">
				<div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
				<div class="carousel-caption">
					<h2>Caption 2</h2>
				</div>
			</div>
			<div class="item">
				<div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
				<div class="carousel-caption">
					<h2>Caption 3</h2>
				</div>
			</div>
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="icon-prev"></span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="icon-next"></span>
		</a>
	</header>

	<!-- Page Content -->
	<div class="container">

		<!-- Marketing Icons Section -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					Welcome to Modern Business
				</h1>
			</div>
		</div>
		<!-- /.row -->

		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4><i class="fa fa-fw fa-check"></i> Bootstrap v3.2.0</h4>
					</div>
					<div class="panel-body">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
						<a href="#" class="btn btn-default">Learn More</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4><i class="fa fa-fw fa-gift"></i> Free &amp; Open Source</h4>
					</div>
					<div class="panel-body">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
						<a href="#" class="btn btn-default">Learn More</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4><i class="fa fa-fw fa-compass"></i> Easy to Use</h4>
					</div>
					<div class="panel-body">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
						<a href="#" class="btn btn-default">Learn More</a>
					</div>
				</div>
			</div>
		</div>

		<hr>

		<?php echo $__env->yieldContent('footer'); ?>
	</div>
	<!-- /.container -->

	<!-- Scripts -->
	<script src="<?php echo e(asset('js/load.js')); ?>"></script>

	<?php echo $__env->yieldContent('script-load'); ?>
</body>
</html>