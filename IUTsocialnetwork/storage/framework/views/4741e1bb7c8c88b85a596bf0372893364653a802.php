<php>


<?php $__env->startSection('content'); ?>

    <div class="row " >

        <?php $__empty_1 = true; $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default ">
                    <div class="panel-heading">
                    <span>Mavluda</span>
                    <span class="pull-right">
                        <?php echo e($article->created_at->diffForHumans()); ?>

                    </span>
                    </div>

                    <div class="panel-body">
                    
                    <?php echo e($article->shortContent); ?>

                    <a href="/articles/<?php echo e($article->id); ?>">Read more</a>

                    </div>

                    <div class="panel-footer clearfix" style="background-color: white">

                        <i class="fa fa-heart pull-right"></i>
                        

                    </div>
                    
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        No articles.
        <?php endif; ?>



        
        
    </div>

<div class="row justify-content-md-center">
    <div class="col-md-4 col-md-offset-4">
        <?php echo e($articles->links()); ?>

        
    </div>
        


</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>