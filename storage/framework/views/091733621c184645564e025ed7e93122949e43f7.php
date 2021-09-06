<?php $__env->startSection('title', 'Daftar Desa'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(route('/')); ?>/assets/css/datatables.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/prism.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
	<h2>Daftar Desa di Kecamatan <span><?php echo e($kec->n_kec); ?>  </span></h2>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
    <li class="breadcrumb-item">Kecamatan <?php echo e($kec->n_kec); ?></li>
    <li class="breadcrumb-item active"><?php echo e($title); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
   <div class="row">
      <!-- Zero Configuration  Starts-->
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header">
               <h5><?php echo e($kec->n_kec); ?></h5>
               
            </div>
            <div class="card-body">
               <div class="dt-ext table-responsive">
                  <table class="display" id="export-button">
                     <thead>
                        <tr>
                           <th>ID</th>
                           <th>Desa</th>
                           <th>Luas Wilayah (ha)</th>
                           <th>Jumlah Penduduk</th>
                        </tr>
                     </thead>
                     <tbody>
                         <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <tr>
                            <td><?php echo e($item->id_desa); ?></td>
                            <td><?php echo e($item->n_desa); ?></td>
                            <td><?php echo e(number_format($item->luas,2,",",".")); ?></td>
                            <td><?php echo e(number_format($item->jumlah_penduduk,0,",",".")); ?></td>

                         </tr>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
      <!-- Zero Configuration  Ends-->
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(route('/')); ?>/assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo e(route('/')); ?>/assets/js/datatable/datatable-extension/dataTables.buttons.min.js"></script>
<script src="<?php echo e(route('/')); ?>/assets/js/datatable/datatable-extension/jszip.min.js"></script>
<script src="<?php echo e(route('/')); ?>/assets/js/datatable/datatable-extension/buttons.colVis.min.js"></script>
<script src="<?php echo e(route('/')); ?>/assets/js/datatable/datatable-extension/pdfmake.min.js"></script>
<script src="<?php echo e(route('/')); ?>/assets/js/datatable/datatable-extension/vfs_fonts.js"></script>
<script src="<?php echo e(route('/')); ?>/assets/js/datatable/datatable-extension/dataTables.autoFill.min.js"></script>
<script src="<?php echo e(route('/')); ?>/assets/js/datatable/datatable-extension/dataTables.select.min.js"></script>
<script src="<?php echo e(route('/')); ?>/assets/js/datatable/datatable-extension/buttons.bootstrap4.min.js"></script>
<script src="<?php echo e(route('/')); ?>/assets/js/datatable/datatable-extension/buttons.html5.min.js"></script>
<script src="<?php echo e(route('/')); ?>/assets/js/datatable/datatable-extension/buttons.print.min.js"></script>
<script src="<?php echo e(route('/')); ?>/assets/js/datatable/datatable-extension/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo e(route('/')); ?>/assets/js/datatable/datatable-extension/dataTables.responsive.min.js"></script>
<script src="<?php echo e(route('/')); ?>/assets/js/datatable/datatable-extension/responsive.bootstrap4.min.js"></script>
<script src="<?php echo e(route('/')); ?>/assets/js/datatable/datatable-extension/dataTables.keyTable.min.js"></script>
<script src="<?php echo e(route('/')); ?>/assets/js/datatable/datatable-extension/dataTables.colReorder.min.js"></script>
<script src="<?php echo e(route('/')); ?>/assets/js/datatable/datatable-extension/dataTables.fixedHeader.min.js"></script>
<script src="<?php echo e(route('/')); ?>/assets/js/datatable/datatable-extension/dataTables.rowReorder.min.js"></script>
<script src="<?php echo e(route('/')); ?>/assets/js/datatable/datatable-extension/dataTables.scroller.min.js"></script>
<script src="<?php echo e(route('/')); ?>/assets/js/datatable/datatable-extension/custom.js"></script>
<script src="<?php echo e(asset('assets/js/prism/prism.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/clipboard/clipboard.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/custom-card/custom-card.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/notify/index.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make($layout, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ilhamtaufiq/www/abs/resources/views/halaman/desa/index.blade.php ENDPATH**/ ?>