<?php $__env->startSection('title', 'Capaian SPM'); ?>

<?php $__env->startSection('css'); ?>
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="<?php echo e(route('/')); ?>/assets/css/date-picker.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(route('/')); ?>/assets/css/owlcarousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(route('/')); ?>/assets/css/prism.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(route('/')); ?>/assets/css/whether-icon.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(route('/')); ?>/assets/css/ionic-icon.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(route('/')); ?>/assets/css/datatables.css">
<!-- Plugins css Ends-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
  <h2>Capaian<span>SPM </span></h2>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
  <li class="breadcrumb-item active">Relisasi</li>
  <li class="breadcrumb-item">Capaian SPM</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid general-widget">
  <div class="row">
    <div class="col-xl-12 xl-100 box-col-12">
      <div class="card">
        <div class="card-header">
            <h5>Realisasi Capain SPM</h5>
        </div>
        <div class="card-body">
          
          <h3>Standar Pelayanan Minimal (SPM) <br/>
            Sub Urusan Air Limbah Domestik Kab. Cianjur (2020-2021)</h3>
          <div class="dt-ext table-responsive">
            <table class="display" id="export-button">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kecamatan</th>
                  <th>Akses Aman</th>
                  <th>Jumlah Penduduk</th>
                  <th>Ketersediaan</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    $i = 1;
                ?>
                <?php $__currentLoopData = $desa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($i++); ?></td>
                  <td><?php echo e($item->n_kec); ?></td>
                  <td><?php echo e(number_format($item->outcome)); ?></td>
                  <td><?php echo e(number_format($item->jumlah_penduduk)); ?></td>
                  <td><?php
                      $persentase = $item->outcome/$item->jumlah_penduduk*100;
                      echo number_format($persentase,2)."%";
                  ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
          
        </div>
      </div>
    </div>
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
<script src="<?php echo e(route('/')); ?>/assets/js/owlcarousel/owl.carousel.js"></script>
<script src="<?php echo e(route('/')); ?>/assets/js/prism/prism.min.js"></script>
<script src="<?php echo e(route('/')); ?>/assets/js/clipboard/clipboard.min.js"></script>
<script src="<?php echo e(route('/')); ?>/assets/js/counter/jquery.waypoints.min.js"></script>
<script src="<?php echo e(route('/')); ?>/assets/js/counter/jquery.counterup.min.js"></script>
<script src="<?php echo e(route('/')); ?>/assets/js/counter/counter-custom.js"></script>
<script src="<?php echo e(route('/')); ?>/assets/js/custom-card/custom-card.js"></script>
<script src="<?php echo e(route('/')); ?>/assets/js/datepicker/date-picker/datepicker.js"></script>
<script src="<?php echo e(route('/')); ?>/assets/js/datepicker/date-picker/datepicker.en.js"></script>
<script src="<?php echo e(route('/')); ?>/assets/js/datepicker/date-picker/datepicker.custom.js"></script>
<script src="<?php echo e(route('/')); ?>/assets/js/general-widget.js"></script>
<script src="<?php echo e(route('/')); ?>/assets/js/height-equal.js"></script>
<script src="<?php echo e(asset('assets')); ?>/js/chart/apex-chart/apex-chart.js"></script>

<script>
  // basic bar chart
var options2 = {
    chart: {
        height: 350,
        type: 'bar',
    },
    plotOptions: {
        bar: {
            horizontal: true,
        }
    },
    dataLabels: {
        enabled: false
    },
    series: [{
        data: [<?php echo e($tanpa_akses); ?>, <?php echo e($akses_dasar); ?>, <?php echo e($akses_layak); ?>, <?php echo e($akses_aman_spalds); ?>, <?php echo e($akses_aman_spaldt); ?>]
    }],
    xaxis: {
        categories: ['Tanpa Akses', 'Akses Dasar', 'Akses Layak', 'Aman SPALD-S', 'Aman SPALD-T'],
    },
    colors:['#7e37d8']
}

var chart2 = new ApexCharts(
    document.querySelector("#basic-bar"),
    options2
);

chart2.render();

</script>

<!-- Plugins JS Ends-->

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.sidebar_fixed.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ilhamtaufiq/www/abs/resources/views/halaman/spm/index.blade.php ENDPATH**/ ?>