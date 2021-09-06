<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Aplikasi Monitoring dan Evaluasi Pelayanan Air Limbah Domestik.">
      <meta name="keywords" content="sanitasi, air limbah domestik, simspald">
      <meta name="author" content="simspald">
      <link rel="icon" href="<?php echo e(asset('assets/images/favicon.png')); ?>" type="image/x-icon">
      <link rel="shortcut icon" href="<?php echo e(asset('assets/images/favicon.png')); ?>" type="image/x-icon">
      <title>Simspald - <?php echo $__env->yieldContent('title'); ?></title>
      <?php echo $__env->make('layouts.vertical.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->yieldContent('style'); ?>
   </head>
   <body>
      <!-- Loader starts-->
      <div class="loader-wrapper">
         <div class="typewriter">
            <h1>loading..</h1>
         </div>
      </div>
      <!-- Loader ends-->
      <!-- page-wrapper Start-->
      <div class="page-wrapper vertical">
         <!-- Page Header Start-->
         <?php echo $__env->make('layouts.vertical.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <!-- Page Header Ends   -->
         <!-- vertical menu start-->
         <?php echo $__env->make('layouts.vertical.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <!-- vertical menu ends-->
         <!-- Page Body Start-->
         <div class="page-body-wrapper">
            <!-- Right sidebar Start-->
            <?php echo $__env->make('layouts.vertical.chat_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Right sidebar Ends-->
            <div class="page-body vertical-menu-mt">
               <div class="container-fluid">
                  <div class="page-header">
                     <div class="row">
                        <div class="col-lg-6 main-header">
                           <?php echo $__env->yieldContent('breadcrumb-title'); ?>
                           <h6 class="mb-0">simspald - Cianjur</h6>
                        </div>
                        <div class="col-lg-6 breadcrumb-right">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="<?php echo e(route('/')); ?>"><i class="pe-7s-home"></i></a></li>
                              <?php echo $__env->yieldContent('breadcrumb-items'); ?>
                           </ol>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Container-fluid starts-->
               <?php echo $__env->yieldContent('content'); ?>
               <!-- Container-fluid Ends-->
            </div>
         </div>
      </div>
      <?php echo $__env->make('layouts.vertical.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
   </body>
</html><?php /**PATH /Users/ilhamtaufiq/www/abs/resources/views/layouts/vertical/master.blade.php ENDPATH**/ ?>