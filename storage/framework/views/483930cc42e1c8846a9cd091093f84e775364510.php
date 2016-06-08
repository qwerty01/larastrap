<div class="col-md-4">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4><i class="fa fa-fw <?php echo e($icon); ?>"></i> <?php echo e($title); ?></h4>
		</div>
		<div class="panel-body">
			<?php echo $__env->yieldContent($content); ?>
			<a href="<?php echo $link; ?>" class="btn btn-default">Learn More</a>
		</div>
	</div>
</div>
