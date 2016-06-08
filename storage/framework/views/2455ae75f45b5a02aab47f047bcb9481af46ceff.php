<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo e($app['description']); ?>">
	<meta name="author" content="<?php echo e($app['author']); ?>">

	<title><?php echo e($app['name']); ?> - <?php echo $__env->yieldContent('title'); ?></title>

	<?php /* CSS */ ?>
	<link rel="stylesheet" href="<?php echo e(asset('css/all.css')); ?>" />
	<?php echo $__env->yieldContent('css'); ?>

	<?php /* JS */ ?>
	<script src="<?php echo e(asset('js/head.js')); ?>"></script>
	<?php echo $__env->yieldContent('script-load'); ?>
</head>

<body>
	<?php /* Navigation */ ?>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<?php /* Brand and toggle get grouped for better mobile display */ ?>
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
						data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo e(url('/')); ?>"><?php echo e($app['name']); ?></a>
			</div>
			<?php echo $__env->make('modern_business.base.navigation', ['navigation' => $navigation], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</div>
		<?php /* /.container */ ?>
	</nav>

	<?php echo $__env->yieldContent('carousel'); ?>

	<?php /* Page Content */ ?>
	<div class="container">
		<?php echo $__env->yieldContent('content'); ?>
		<hr>
		<?php /* Footer */ ?>
		<footer>
			<div class="row">
			<?php $__env->startSection('footer'); ?>
				<p>Copyright &copy; <?php echo e($app['name']); ?> <?php echo e(Carbon\Carbon::now()->format('Y')); ?></p>
			<?php echo $__env->yieldSection(); ?>
			</div>
		</footer>
		<?php /* /.footer */ ?>
	</div>
	<?php /* /.container */ ?>

	<?php /* Scripts */ ?>
	<script src="<?php echo e(asset('js/load.js')); ?>"></script>
	<?php echo $__env->yieldContent('script-load'); ?>
</body>
</html>