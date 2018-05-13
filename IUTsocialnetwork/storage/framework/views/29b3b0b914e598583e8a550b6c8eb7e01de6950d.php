<?php $__env->startSection('content'); ?>

    <div class="row justify-content-md-center" >
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
					<span>
                        Article by IUT
                    </span> 
                    <span class="pull-right">
                        <?php echo e($article->created_at->diffForHumans()); ?>


                    </span>
                </div>

                <div class="panel-body">
                	
                    <?php echo e($article->content); ?>


                </div>
                    
            </div>
        </div>
        
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>