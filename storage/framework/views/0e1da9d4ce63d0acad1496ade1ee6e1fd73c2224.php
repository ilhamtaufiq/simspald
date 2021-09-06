<div class="iconsidebar-menu">
   <div class="sidebar">
      <ul class="iconMenu-bar custom-scrollbar">
         <li>
            <a class="bar-icons" href="#"><i class="pe-7s-home"></i><span>Home    </span></a>
            <ul class="iconbar-mainmenu custom-scrollbar">
               <li class="iconbar-header">Dashboard</li>
               <li><a href="<?php echo e(route('default')); ?>">Ringkasan</a></li>
               
            </ul>
         </li>
         <li>
            <a class="bar-icons" href="#"><i class="pe-7s-edit"></i><span>Data</span></a>
            <ul class="iconbar-mainmenu custom-scrollbar">
               <li class="iconbar-header sub-header">Wilayah</li>
               <li><a href="<?php echo e(route('kecamatan')); ?>">Kecamatan</a></li>
               <li class="iconbar-header sub-header">SPALD</li>
               <li><a href="<?php echo e(route('spald.index')); ?>">Daftar SPALD</a></li>
               <li><a href="<?php echo e(route('pengelola.index')); ?>">Daftar Pengelola</a></li>
               <?php if(Route::is('spald.create') ): ?>
               <li><a href="<?php echo e(route('spald.create')); ?>" >Input SPALD</a></li>
               <?php endif; ?> 
               <?php if(Route::is('spald.edit') ): ?>
               <li><a href="">Edit SPALD</a></li>
               <?php endif; ?>
               <?php if(Route::is('pengelola.create') ): ?>
               <li><a href="<?php echo e(route('pengelola.create')); ?>" >Input Pengelola</a></li>
               <?php endif; ?> 
               <?php if(Route::is('pengelola.edit') ): ?>
               <li><a href="">Edit Pengelola</a></li>
               <?php endif; ?>
               <li class="iconbar-header sub-header">Data Rumah</li>
               <li><a href="<?php echo e(route('rumah.index')); ?>">Daftar Rumah</a></li>
               <?php if(Route::is('rumah.create') ): ?>
               <li><a href="<?php echo e(route('rumah.create')); ?>" >Input Data Rumah</a></li>
               <?php endif; ?> 
               <?php if(Route::is('rumah.edit') ): ?>
               <li><a href="">Edit Data Rumah</a></li>
               <?php endif; ?>                                            
               
            </ul>
         </li>
         <li>
            <a class="bar-icons" href="#"><i class="pe-7s-display1"></i><span>Laporan SPM</span></a>
            <ul class="iconbar-mainmenu custom-scrollbar">
               <li class="iconbar-header">Realisasi</li>
               <li><a href="<?php echo e(route('outcome.index')); ?>">Outcome</a></li>
               <?php if(Route::is('outcome.create') ): ?>
               <li><a href="<?php echo e(route('outcome.create')); ?>" >Tambah Outcome</a></li>
               <?php endif; ?> 
               <?php if(Route::is('outcome.edit') ): ?>
               <li><a href="">Edit Data Outcome</a></li>
               <?php endif; ?>  
               <li><a href="<?php echo e(route('output.index')); ?>">Output</a></li>
               <?php if(Route::is('output.create') ): ?>
               <li><a href="<?php echo e(route('output.create')); ?>" >Tambah Output</a></li>
               <?php endif; ?> 
               <?php if(Route::is('output.edit') ): ?>
               <li><a href="">Edit Data Output</a></li>
               <?php endif; ?>  
               <li><a href="<?php echo e(route('spm')); ?>">SPM</a></li>
            </ul>
         </li>
         <li>
            <a class="bar-icons" href="#"><i class="pe-7s-map"></i><span>Map</span></a>
            <ul class="iconbar-mainmenu custom-scrollbar">
               <li class="iconbar-header">Map</li>
               <li><a href="<?php echo e(route('map.index')); ?>">Titik Koordinat</a></li>
               <?php if(Route::is('map.create') ): ?>
               <li><a href="<?php echo e(route('map.create')); ?>" >Tambah Koordinat</a></li>
               <?php endif; ?> 
               <?php if(Route::is('map.edit') ): ?>
               <li><a href="" >Edit Koordinat</a></li>
               <?php endif; ?> 
               
            </ul>
         </li>
      </ul>
   </div>
</div><?php /**PATH /Users/ilhamtaufiq/www/abs/resources/views/layouts/sidebar_fixed/sidebar.blade.php ENDPATH**/ ?>