<div class="vertical-menu-main">
   <nav id="main-nav">
      <!-- Sample menu definition-->
      <ul class="sm pixelstrap" id="main-menu">
         <li>
            <div class="text-right mobile-back">Back<i class="fa fa-angle-right pl-2" aria-hidden="true"></i></div>
         </li>
         <li><a href="<?php echo e(route('default')); ?>"><i class="font-primary" data-feather="home"></i> Dashboard</a></li>
         <li>
            <a href="#"><i class="font-primary" data-feather="anchor"></i> Starter Kit</a>
            <ul>
               <li>
                  <a href="#">Color Version</a>
                  <ul>
                     <li><a href="<?php echo e(route('layout-light')); ?>">Layout light</a></li>
                     <li><a href="<?php echo e(route('layout-dark')); ?>">Layout Dark</a></li>
                  </ul>
               </li>
               <li>
                  <a href="#">Sidebar</a>
                  <ul>
                     <li><a href="<?php echo e(route('sidebar-fixed')); ?>">Sidebar fixed</a></li>
                     <li><a class="disabled" href="javascript:;">Disable</a></li>
                  </ul>
               </li>
               <li>
                  <a href="#">Page Layout</a>
                  <ul>
                     <li><a href="<?php echo e(route('boxed')); ?>">Boxed</a></li>
                     <li><a href="<?php echo e(route('layout-rtl')); ?>">RTL</a></li>
                  </ul>
               </li>
               <li class="active">
                  <a href="#">Menu Options</a>
                  <ul>
                     <li><a class="current" href="vertical.html">Vertical Menu</a></li>
                     <li><a href="<?php echo e(route('mega-menu')); ?>">Mega Menu</a></li>
                  </ul>
               </li>
            </ul>
         </li>
      </ul>
   </nav>
</div><?php /**PATH /home/ekta/Documents/GitHub/poco_starter_kit/resources/views/layouts/vertical/sidebar.blade.php ENDPATH**/ ?>