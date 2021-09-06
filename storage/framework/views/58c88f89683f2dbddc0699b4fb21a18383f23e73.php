<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Poco admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Poco admin template, dashboard template, flat admin template, responsive admin template, web app (Laravel 8)">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="<?php echo e(asset('assets/images/favicon.png')); ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo e(asset('assets/images/favicon.png')); ?>" type="image/x-icon">
    <title>Poco - <?php echo $__env->yieldContent('title'); ?></title>
    <?php echo $__env->make('layouts.light.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('style'); ?>
  </head>
  <body class="light-only">
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="typewriter">
        <h1>New Era Admin Loading..</h1>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper">
      <!-- Page Header Start-->
      <?php echo $__env->make('layouts.light.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- Page Header Ends -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <?php echo $__env->make('layouts.light.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Page Sidebar Ends-->
        <!-- Right sidebar Start-->
        <?php echo $__env->make('layouts.light.chat_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Right sidebar Ends-->
        <div class="page-body">
            <div class="container-fluid">
              <div class="page-header">
                 <div class="row">
                    <div class="col-lg-6 main-header">
                        <?php echo $__env->yieldContent('breadcrumb-title'); ?>
                        <h6 class="mb-0"></h6>
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
            <?php echo $__env->yieldContent('content'); ?>
            <div class="welcome-popup modal fade" id="loadModal" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                 <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <div class="modal-body">
                       <div class="modal-header"></div>
                       <div class="contain p-30">
                          <div class="text-center">
                             <h3>Welcome to creative admin</h3>
                             <p>start your project with developer friendly admin </p>
                             <button class="btn btn-primary btn-lg txt-white" type="button" data-dismiss="modal" aria-label="Close">Get Started</button>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
            </div>
        </div>
        <!-- footer start-->
        <?php echo $__env->make('layouts.light.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
    </div>
    <?php echo $__env->make('layouts.light.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  
  </body>
</html><?php /**PATH /Users/ilhamtaufiq/www/abs/resources/views/layouts/light/master.blade.php ENDPATH**/ ?>