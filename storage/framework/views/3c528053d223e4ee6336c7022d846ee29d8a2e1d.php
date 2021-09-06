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
               <form action="<?php echo e(route('output.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
               <div class="card-body">
                    
                <div class="mb-2">
                    <div class="col-form-label">Unit SPALD</div>
                    <select id="id_spald" name="id_spald" class="js-example-basic-single col-sm-12" placeholder="SPALD">
                        <option value="">Pilih Unit SPALD</option>
                        <?php $__currentLoopData = $output; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(is_null($item->output)): ?>
                            <option value="<?php echo e($item->id_spald); ?>"><?php echo e($item->ksm->nama_ksm); ?></option>
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
                
                
                <table class="table table-bordered table-striped" id="komponen" name="komponen">
                    <thead>
                    <tr>
                        <th width="35%">Ipal</th>
                        <th width="35%">Sambungan Rumah</th>
                    </tr>
                    </thead>
                    <tbody>
                        <td><input type="number" name="ipal" class="form-control"/></td>
                        <td><input type="number" name="sr" class="form-control"/></td>

                    </tbody>
                </table>
                <table class="table table-bordered table-striped" id="komponen1" name="komponen1">
                    <thead>
                    <tr>
                        <th width="35%">Tangki Septik</th>
                    </tr>
                    </thead>
                    <tbody>
                        <td><input type="number" name="tangki_septik" class="form-control"/></td>
                    </tbody>
                </table>
                 <br>
                 <div class="mb-2">
                    <button class="btn btn-pill btn-primary btn-air-primary" type="submit" title="">Simpan</button>
                    <button onclick="goBack()" class="btn btn-pill btn-warning btn-air-warning" type="button" title="">Batal</button>

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
<script>
    jQuery(document).ready(function (){
                   jQuery($('#id_spald')).on('change',function(){
                       var KegID = jQuery(this).val();
                       if(KegID)
                       {
                           jQuery.ajax({
                               url : '/spald/get/' +KegID,
                               type : "GET",
                               dataType : "json",
                               success:function(data)
                               {
                                    $($('#komponen1')).hide();
                                    $($('#komponen')).hide();
                                    jQuery.each(data, function(key,value){
                                        console.log(value);
                                        if (value == "1")
                                        {
                                            $($('#komponen')).show();
                                        }
                                        else
                                        {
                                            $($('#komponen')).hide();

                                        }
                                        if (value == "2")
                                        {
                                            $($('#komponen1')).show();
                                        }
                                        else
                                        {
                                            $($('#komponen1')).hide();

                                        }
                                    });
                               }
                           });
                       }
                       else
                       {
                            $($('#komponen1')).hide();
                            $($('#komponen')).hide();

                       }
                   });
    });
  </script>
<script src="<?php echo e(route('/')); ?>/assets/js/select2/select2.full.min.js"></script>
<script src="<?php echo e(route('/')); ?>/assets/js/select2/select2-custom.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make($layout, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ilhamtaufiq/www/abs/resources/views/halaman/output/input.blade.php ENDPATH**/ ?>