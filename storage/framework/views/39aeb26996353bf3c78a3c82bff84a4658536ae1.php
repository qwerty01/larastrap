<?php /* Header Carousel */ ?>
<header id="myCarousel" class="carousel slide">
	<?php /* Indicators */ ?>
	<ol class="carousel-indicators">
	<?php for($i = 0; $i < count($slides); $i++): ?>
		<li data-target="#myCarousel" data-slide-to="<?php echo e($i); ?>"<?php echo $i == 0 ? ' class="active"' : ''; ?>></li>
	<?php endfor; ?>
	</ol>

	<?php /* Wrapper for slides */ ?>
	<div class="carousel-inner">
		<?php foreach($slides as $num => $slide): ?>
		<div class="item<?php echo e($num == 0 ? ' active' : ''); ?>">
			<div class="fill" style="background-image:url('<?php echo $slide['image']; ?>');"></div>
			<div class="carousel-caption">
				<h2><?php echo e($slide['caption']); ?></h2>
			</div>
		</div>
		<?php endforeach; ?>
	</div>

	<?php /* Controls */ ?>
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		<span class="icon-prev"></span>
	</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">
		<span class="icon-next"></span>
	</a>
</header>