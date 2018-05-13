<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-defaul">
			<div class="panel-body text-center">
				//<img src="c:\xprojects\IUTsocialnetwork\resources\views\user\menu.png">
				<img src="menu.png">
				<h1><?php echo e($user->name); ?></h1>
				<h5><?php echo e($user->email); ?></h5>
				<h5><?php echo e($user->dob); ?> (<?php echo e($user->created_at->age); ?> years old)</h5>
				<button class="btn bnt-success">Follow</button>
				
			</div>
			
		</div>
		
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>