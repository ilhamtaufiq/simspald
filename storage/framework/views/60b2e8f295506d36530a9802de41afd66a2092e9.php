<?php $__env->startSection('title', 'Tambah'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(route('/')); ?>/assets/css/select2.css">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="crossorigin=""></script>
<!-- Accurate Position Plugin -->
<script src="<?php echo e(asset('dist')); ?>/js/getloc.js"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
	<h2><?php echo e($title); ?></h2>
    <button id="clickMe" class="btn btn-primary" type="button" data-toggle="modal" data-target=".bd-example-modal-lg">Tampilkan Lokasi</button>
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-lg">
          <div class="modal-content">
             <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Tampilkan Titik Koordinat</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
             </div>
             <div class="modal-body">
                <ul id="status" class="progressing">
                    <li>Mencari titik Koordinat akurat… (Izinkan Akses Data Lokasi)</li>
                </ul>
                <div id="map" style="width: 100%; height: 400px;"></div>
             </div>
          </div>
       </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
    <li class="breadcrumb-item">Data</li>	
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
                  <h5 class="text-white">Edit</h5>
               </div>
               <form action="<?php echo e(route('map.update',$map->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>

               <div class="card-body">
                    
                <div class="mb-2">
                    <div class="col-form-label">Unit SPALD</div>
                    <select id="id_spald" name="id_spald" class="js-example-basic-single col-sm-12" placeholder="SPALD">
                        <option value="<?php echo e($map->id_spald); ?>"><?php echo e($map->ipald->nama_ksm); ?></option>
                        <?php $__currentLoopData = $ksm; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                 <div class="mb-2">
                    <div class="col-form-label">Latitude</div>
                    <input value="<?php echo e($map->lat); ?>" type="text" id="lat" name="lat" class="form-control" placeholder="Latitude">
                </div>
                <div class="mb-2">
                    <div class="col-form-label">Longitude</div>
                    <input value="<?php echo e($map->long); ?>" type="text" id="long" name="long" class="form-control" placeholder="Longtitude">
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
<script src="<?php echo e(asset('dist')); ?>/js/map.js"></script>

<script src="<?php echo e(route('/')); ?>/assets/js/select2/select2.full.min.js"></script>
<script src="<?php echo e(route('/')); ?>/assets/js/select2/select2-custom.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make($layout, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ilhamtaufiq/www/abs/resources/views/halaman/map/edit.blade.php ENDPATH**/ ?>