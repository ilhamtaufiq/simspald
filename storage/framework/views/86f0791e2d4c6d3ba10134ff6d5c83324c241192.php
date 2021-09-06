<script src="<?php echo e(asset('assets/js/jquery-3.5.1.min.js')); ?>"></script>
<!-- Bootstrap js-->
<script src="<?php echo e(asset('assets/js/bootstrap/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/bootstrap/bootstrap.js')); ?>"></script>
<!-- feather icon js-->
<script src="<?php echo e(asset('assets')); ?>/js/icons/feather-icon/feather.min.js"></script>
<script src="<?php echo e(asset('assets')); ?>/js/icons/feather-icon/feather-icon.js"></script>
<!-- Sidebar jquery-->
<script src="<?php echo e(asset('assets/js/sidebar-menu.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/config.js')); ?>"></script>
<?php echo $__env->yieldContent('script'); ?>  
<!-- Plugins JS start-->
<script src="<?php echo e(asset('assets/js/chat-menu.js')); ?>"></script>
<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="<?php echo e(asset('assets/js/script.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/theme-customizer/customizer.js')); ?>"></script>
<!-- Notif-->
<script src="<?php echo e(asset('assets')); ?>/js/notify/bootstrap-notify.min.js"></script>
<script src="<?php echo e(asset('assets')); ?>/js/notify/notify-script.js"></script>

<script>
  function goBack() {
    window.history.back();
  }
  </script>
<script>
    <?php if(Session::has('pesan')): ?>   
     $.notify({
        message:'<?php echo e(session('pesan')); ?>'
    },
    {
      type:'success',
      allow_dismiss:false,
      newest_on_top:false ,
      mouse_over:false,
      showProgressbar:true,
      spacing:10,
      timer:2000,
      placement:{
        from:'top',
        align:'right'
      },
      offset:{
        x:30,
        y:30
      },
      delay:1000 ,
      z_index:10000,
      animate:{
        enter:'animated bounceInLeft',
        exit:'animated bounceInLeft'
    }
    });
    <?php endif; ?>
   </script>
<script><?php /**PATH /Users/ilhamtaufiq/www/abs/resources/views/layouts/sidebar_fixed/script.blade.php ENDPATH**/ ?>