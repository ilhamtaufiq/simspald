<?php $__env->startSection('title', 'Daftar Kecamatan'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(route('/')); ?>/assets/css/datatables.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/prism.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
	<h2>Data Wilayah <span><?php echo e($title); ?>  </span></h2>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
	<li class="breadcrumb-item">Data Wilayah</li>
    <li class="breadcrumb-item active"><?php echo e($title); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
   <div class="row">
      <!-- Zero Configuration  Starts-->
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header">
               <h5>Daftar 32 Kecamatan di Kabupaten Cianjur</h5>
               
            </div>
            <div class="card-body">
               <div class="dt-ext table-responsive">
                  <table class="display" id="export-button">
                     <thead>
                        <tr>
                           <th>ID</th>
                           <th>Kecamatan</th>
                        </tr>
                     </thead>
                     <tbody>
                         <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <tr>
                            <td><?php echo e($item->id); ?></td>
                            <td>
                              <a href="/desa/<?php echo e($item->id); ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Klik untuk melihat daftar desa"><?php echo e($item->n_kec); ?></a>
                            </td>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make($layout, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ilhamtaufiq/www/abs/resources/views/halaman/kecamatan/index.blade.php ENDPATH**/ ?>