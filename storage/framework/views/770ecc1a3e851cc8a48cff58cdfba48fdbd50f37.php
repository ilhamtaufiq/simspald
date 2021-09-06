<?php $__env->startSection('title', 'Tambah Pengelola'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(route('/')); ?>/assets/css/select2.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
	<h2><?php echo e($title); ?></h2>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
    <li class="breadcrumb-item">Data Pengelola</li>	
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
                  <h5 class="text-white">Ubah Pengelola SPALD Terbangun</h5>
               </div>
               <form action="<?php echo e(route('pengelola.update', $pengelola->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
               <div class="card-body">
                  <div class="mb-2">
                     <div class="col-form-label">SPALD</div>
                     <select name="id_spald" class="js-example-basic-single col-sm-12" placeholder="">
                        <option value="<?php echo e($pengelola->id_spald); ?>">Pilih SPALD</option>
                        <?php $__currentLoopData = $spald; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                        <?php if(is_null($s->ksm)): ?>
                        <option value="<?php echo e($s->id_spald); ?>"><?php echo e($s->kegiatan->kegiatan); ?> <?php echo e($s->rincianKegiatan->rincian_kegiatan); ?> <?php echo e($s->desa->n_desa); ?> <?php echo e($s->kec->n_kec); ?></option>
                         <?php endif; ?> 
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

                    <div class="mb-2">
                        <div class="col-form-label">Nama KSM</div>
                        <input value="<?php echo e($pengelola->nama_ksm); ?>" type="text" name="nama_ksm" class="form-control" placeholder="Nama KSM">
                    </div>
                    <div class="mb-2">
                        <div class="col-form-label">
                            <input value="<?php echo e($pengelola->nama_ketua); ?>" type="text" name="nama_ketua" class="form-control" placeholder="Nama Ketua KSM">
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="col-form-label">
                            <input value="<?php echo e($pengelola->nik_ketua); ?>" type="text" name="nik_ketua" class="form-control" placeholder="NIK Ketua KSM">
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="col-form-label">
                            <input value="<?php echo e($pengelola->npwp); ?>" type="text" name="npwp" class="form-control" placeholder="NPWP KSM">
                        </div>
                    </div>
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
<?php echo $__env->make($layout, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ilhamtaufiq/www/abs/resources/views/halaman/pengelola/edit.blade.php ENDPATH**/ ?>