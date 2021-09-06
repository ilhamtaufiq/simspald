<?php $__env->startSection('title', $title); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(route('/')); ?>/assets/css/datatables.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/prism.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
	<h2><span><?php echo e($title); ?>  </span></h2> <br>
   <button onclick="location.href='<?php echo e(route('outcome.create')); ?>'" class="btn btn-pill btn-primary btn-air-primary" type="submit" title="">Tambah</button>
   <?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
	<li class="breadcrumb-item">SPM</li>
    <li class="breadcrumb-item active"><?php echo e($title); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
   <div class="row">
      <!-- Zero Configuration  Starts-->
      <div class="col-sm-12">
         <div class="card card-absolute">
            <div class="card-header bg-primary">
               <h5 class="text-white">Outcome</h5>
            </div>
            <div class="card-body">
               <div class="dt-ext table-responsive">
                  <table class="display" id="export-button">
                     <thead>
                        <tr>
                           <th>No</th>
                           <th>Unit SPALD</th>
                           <th>Kuantitas</th>
                           <th>Satuan</th>
                           <th class="noExport">Opsi</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                            $i = 1;
                        ?>
                        <?php $__currentLoopData = $outcome; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                        <tr>
                           <td><?php echo e($i++); ?></td>
                           <td><?php echo e($item->ipald->nama_ksm); ?></td>
                           <td><?php echo e($item->kuantitas); ?></td>
                           <td><?php echo e($item->satuan); ?></td>      
                           <td>
                              <a href="<?php echo e(route('outcome.edit', $item->id)); ?>">
                                 <button class="btn btn-primary" type="button" >
                                   <i class="icon-settings"></i>  
                                 </button>       
                              </a>
                              <button class="btn btn-primary" type="button" data-toggle="modal" data-original-title="test" data-target="#exampleModal<?php echo e($item->id); ?>"><i class="icon-trash"></i></button>
                           </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
      <!-- Modal Hapus-->
      <?php $__currentLoopData = $outcome; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="modal fade" id="exampleModal<?php echo e($d->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                 <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                 </div>
                 <div class="modal-body">Apakah Anda yakin akan menghapus data outcome <?php echo e($d->ipald->nama_ksm); ?>?</div>
                 <div class="modal-footer">
                    <button class="btn btn-primary" type="button" data-dismiss="modal">Batal</button>
                    <form action="<?php echo e(route('outcome.destroy', $d->id)); ?>" method="post">
                     <?php echo method_field('DELETE'); ?>
                     <?php echo csrf_field(); ?>
                     <input class="btn btn-danger" type="submit" value="Hapus" />
                  </form>            
                 </div>
              </div>
           </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php echo $__env->make($layout, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ilhamtaufiq/www/abs/resources/views/halaman/outcome/index.blade.php ENDPATH**/ ?>