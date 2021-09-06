<?php $__env->startSection('title', 'error-404'); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- error-404 start-->
<div class="error-wrapper">
   <div class="container">
      <img class="img-100" src="<?php echo e(route('/')); ?>/assets/images/other-images/sad.png" alt="">
      <div class="error-heading">
         <h2 class="headline font-danger">404</h2>
      </div>
      <div class="col-md-8 offset-md-2">
         <p class="sub-content">The page you are attempting to reach is currently not available. This may be because the page does not exist or has been moved.</p>
      </div>
      <div><a class="btn btn-danger-gradien btn-lg" href="<?php echo e(route('/')); ?>">BACK TO HOME PAGE</a></div>
   </div>
</div>
<!-- error-404 end      -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ilhamtaufiq/www/abs/resources/views/errors/404.blade.php ENDPATH**/ ?>