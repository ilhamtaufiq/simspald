<div class="vertical-menu-main">
   <nav id="main-nav">
      <!-- Sample menu definition-->
      <ul class="sm pixelstrap" id="main-menu">
         <li>
            <div class="text-right mobile-back">Back<i class="fa fa-angle-right pl-2" aria-hidden="true"></i></div>
         </li>
         <li><a href="<?php echo e(route('default')); ?>"><i class="font-primary" data-feather="home"></i> Dashboard</a></li>
         <li>
            <a href="#"><i class="font-primary" data-feather="anchor"></i>Data</a>
            <ul>
               <li>
                  <a href="#">Wilayah</a>
                  <ul>
                     <li><a href="<?php echo e(route('kecamatan')); ?>">Kecamatan - Desa</a></li>
                  </ul>
               </li>
               <li>
                  <a href="<?php echo e(route('spald')); ?>">SPALD</a>
               </li>
            </ul>
         </li>
         
      </ul>
   </nav>
</div><?php /**PATH /Users/ilhamtaufiq/www/abs/resources/views/layouts/vertical/sidebar.blade.php ENDPATH**/ ?>