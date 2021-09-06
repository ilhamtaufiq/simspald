<?php $__env->startSection('title', 'Tambah output'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(route('/')); ?>/assets/css/select2.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
	<h2><?php echo e($title); ?></h2>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
    <li class="breadcrumb-item">Data output</li>	
	<li class="breadcrumb-item active"><?php echo e($title); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
   <div class="select2-drpdwn">
      <div class="row">
         <!-- Default Textbox start-->
         <div class="col-md-12">
            <div class="card card-absolute">
               <div class="card-header bg-primary">
                  <h5 class="text-white">Tambah output</h5>
               </div>
               <form class="form theme-form" action="<?php echo e(route('output.update', $output->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>

               <div class="card-body">
                    
                <div class="mb-2">
                    <div class="col-form-label">Unit SPALD</div>
                    <select id="id_spald" name="id_spald" class="js-example-basic-single col-sm-12" placeholder="SPALD">
                        <option value="<?php echo e($output->id_spald); ?>"><?php echo e($output->ipald->nama_ksm); ?></option>
                        <?php $__currentLoopData = $pengelola; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item->id_spald); ?>"><?php echo e($item->ipald->nama_ksm); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>  
                    <div class="text-danger">
                     <?php $__errorArgs = ['id_spald'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                         <?php echo e($message); ?>

                     <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                 </div> 
                 </div>
                 
                
                <table class="table table-bordered table-striped">
                  <thead>
                  <tr>
                      <th width="35%">Ipal</th>
                      <th width="35%">Sambungan Rumah</th>
                      <th width="35%">Tangki Septik</th>
                  </tr>
                  </thead>
                  <tbody>
                      <td><input type="number" value="<?php echo e($output->ipal); ?>" name="ipal" class="form-control"/></td>
                      <td><input type="number" value="<?php echo e($output->sr); ?>" name="sr" class="form-control"/></td>
                      <td><input type="number" value="<?php echo e($output->tangki_septik); ?>" name="tangki_septik" class="form-control"/></td>
                  </tbody>
              </table>
                 <br>
                 <div class="mb-2">
                    <button class="btn btn-pill btn-primary btn-air-primary" type="submit" title="">Simpan</button>
                    <button class="btn btn-pill btn-warning btn-air-warning" type="button" title="">Batal</button>

                 </div>
                </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<script src="<?php echo e(route('/')); ?>/assets/js/select2/select2.full.min.js"></script>
<script src="<?php echo e(route('/')); ?>/assets/js/select2/select2-custom.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make($layout, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ilhamtaufiq/www/abs/resources/views/halaman/output/edit.blade.php ENDPATH**/ ?>