<?php /* Collect the nav links, forms, and other content for toggling */ ?>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	<ul class="nav navbar-nav navbar-right">
		<?php foreach($navigation as $nav): ?>
			<?php if(array_key_exists('children', $nav)): ?>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo e($nav['name']); ?> <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<?php foreach($nav['children'] as $child): ?>
							<li>
								<a href="<?php echo e(action($child['route'])); ?>"><?php echo e($child['name']); ?></a>
							</li>
						<?php endforeach; ?>
					</ul>
				</li>
			<?php else: ?>
				<li>
					<a href="<?php echo e(action($nav['route'])); ?>"><?php echo e($nav['name']); ?></a>
				</li>
			<?php endif; ?>
		<?php endforeach; ?>
	</ul>
</div>
<?php /* /.navbar-collapse */ ?>