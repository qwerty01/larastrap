<div class="col-md-6">
	<p><?php echo e($intro); ?></p>
	<ul>
		<?php foreach($features as $feature): ?>
			<?php if(array_key_exists('important', $feature) && $feature['important'] == true): ?>
				<li><strong><?php echo e($feature['name']); ?></strong></li>
			<?php else: ?>
				<li><?php echo e($feature['name']); ?></li>
			<?php endif; ?>
		<?php endforeach; ?>
	</ul>
	<?php echo $__env->yieldContent($content); ?>
</div>
<div class="col-md-6">
	<img class="img-responsive" src="<?php echo e($image); ?>" alt="<?php echo e(isset($imgalt) ? $imgalt : ''); ?>">
</div>
