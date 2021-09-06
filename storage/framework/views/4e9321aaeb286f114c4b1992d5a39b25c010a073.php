<?php $__env->startSection('title', $title); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/prism.css')); ?>">
<!-- Leaflet -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="crossorigin=""></script>
<!-- Accurate Position Plugin -->
<script src="<?php echo e(asset('dist')); ?>/js/getloc.js"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
	<h2><span><?php echo e($title); ?>  </span></h2>
    <button onclick="location.href='<?php echo e(route('map.create')); ?>'" class="btn btn-pill btn-primary btn-air-primary" type="submit" title="">Tambah</button>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
	<li class="breadcrumb-item">Map</li>
    <li class="breadcrumb-item active"><?php echo e($title); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
   <div class="row">
      <!-- Zero Configuration  Starts-->
      <div class="col-sm-12">
         <div class="col-sm-12 col-xl-12">
            <div class="card card-absolute">
               <div class="card-header bg-primary">
                  <h5 class="text-white">Map</h5>
               </div>
               <div class="card-body">
                  <div id="map" style="width: 100%; height: 400px;"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- Zero Configuration  Ends-->
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('dist')); ?>/js/map.js"></script>
    <script>       
     <?php $__currentLoopData = $map; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     var informasi = `
        <table class="display">
        <thead>
        <tr>
            <th colspan="2" class="text-center"><img width=150px src=""></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Nama KSM</td>
            <td><?php echo e($data->ipald->nama_ksm); ?></td>
        </tr>
        <tr>
            <td>Kegiatan</td>
            <td>DAK Sanitasi</td>
        </tr>
        <tr>
            <td>Tipe SPALD</td>
            <td><?php echo e($data->spald->rincian_kegiatan); ?></td>
        </tr>
        <tr>
            <td>Tahun Anggaran</td>
            <td><?php echo e($data->spald->tahun_anggaran); ?></td>
        </tr>
        <tr>
            <td colspan="2"class="text-center"><a text-color="white" href="" class="btn btn-primary">Detail</a></td>
        </tr>
        </tbody>
        </table>
    `  
        L.marker([<?php echo e($data->lat); ?>, <?php echo e($data->long); ?>])
        .addTo(map)
        .bindPopup(informasi);
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </script>
<script src="<?php echo e(asset('assets/js/prism/prism.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/clipboard/clipboard.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/custom-card/custom-card.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make($layout, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ilhamtaufiq/www/abs/resources/views/halaman/map/index.blade.php ENDPATH**/ ?>