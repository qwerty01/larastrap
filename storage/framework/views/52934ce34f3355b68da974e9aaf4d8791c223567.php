
<?php $__env->startSection('title', 'Main'); ?>

<?php $__env->startSection('carousel'); ?>
	<?php echo $__env->make('modern_business.base.carousel', ['slides' => [
		['image' => 'http://placehold.it/1900x1080&text=Slide One', 'caption' => 'Caption 1'],
		['image' => 'http://placehold.it/1900x1080&text=Slide Two', 'caption' => 'Caption 2'],
		['image' => 'http://placehold.it/1900x1080&text=Slide Three', 'caption' => 'Caption 3']]], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('lorem'); ?>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias
		at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startSection('marketing'); ?>
		<?php echo $__env->make('modern_business.base.panel', ['title' => 'Bootstrap v3.2.0', 'content' => 'lorem', 'icon' => 'fa-check', 'link' => '#'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php echo $__env->make('modern_business.base.panel', ['title' => 'Free & Open Source!', 'content' => 'lorem', 'icon' => 'fa-gift', 'link' => '#'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php echo $__env->make('modern_business.base.panel', ['title' => 'Easy to Use', 'content' => 'lorem', 'icon' => 'fa-compass', 'link' => '#'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php $__env->stopSection(); ?>
	<?php echo $__env->make('modern_business.base.row', ['title' => 'Main', 'content' => 'marketing'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php $__env->startSection('portfolio'); ?>
		<?php for($i = 0; $i < 6; $i++): ?>
			<?php echo $__env->make('modern_business.base.portfolio_item', ['url' => action('NavigationController@pfi'), 'image' => 'http://placehold.it/700x450', 'name' => ''], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php endfor; ?>
	<?php $__env->stopSection(); ?>
	<?php echo $__env->make('modern_business.base.row', ['title' => 'Portfolio', 'content' => 'portfolio'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php $__env->startSection('features'); ?>
		<?php echo $__env->make('modern_business.base.features', [
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
			'imgalt' => ''], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php $__env->stopSection(); ?>
	<?php echo $__env->make('modern_business.base.row', ['title' => 'Modern Business Features', 'content' => 'features'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script-load'); ?>
	<?php /* Script to Activate the Carousel */ ?>
	<script>
		$('.carousel').carousel({
			interval: 5000 //changes the speed
		})
	</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('modern_business.base.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>