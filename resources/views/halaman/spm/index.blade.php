@extends('layouts.sidebar_fixed.master')
@section('title', 'Capaian SPM')

@section('css')
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{route('/')}}/assets/css/date-picker.css">
<link rel="stylesheet" type="text/css" href="{{route('/')}}/assets/css/owlcarousel.css">
<link rel="stylesheet" type="text/css" href="{{route('/')}}/assets/css/prism.css">
<link rel="stylesheet" type="text/css" href="{{route('/')}}/assets/css/whether-icon.css">
<link rel="stylesheet" type="text/css" href="{{route('/')}}/assets/css/ionic-icon.css">
<link rel="stylesheet" type="text/css" href="{{route('/')}}/assets/css/datatables.css">
<!-- Plugins css Ends-->
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
  <h2>Capaian<span>SPM </span></h2>
@endsection

@section('breadcrumb-items')
  <li class="breadcrumb-item active">Relisasi</li>
  <li class="breadcrumb-item">Capaian SPM</li>
@endsection

@section('content')
<div class="container-fluid general-widget">
  <div class="row">
    <div class="col-xl-12 xl-100 box-col-12">
      <div class="card">
        <div class="card-header">
            <h5>Realisasi Capain SPM</h5>
        </div>
        <div class="card-body">
          <div id="basic-bar"></div>
          <h3>Target</h3>
          <p>Total Rumah: {{number_format($total_rumah,0,",",".")}} Unit</p>  
          <p>Total Penduduk: {{number_format($jumlah_penduduk,0,",",".")}} Jiwa</p>  

          <p>Akses Dasar SPALD-S: @php
            $ad_spalds = $akses_dasar_spalds/$total_rumah*100;
            echo number_format($ad_spalds,2)."%";
          @endphp {{$akses_dasar_spalds}} Unit Rumah</p>
          <p>Akses Aman SPALD-T: @php
          $ad_spaldt = $akses_aman_spaldt/$total_rumah*100;
          echo number_format($ad_spaldt,2)."%";
          @endphp {{$akses_aman_spaldt}} Unit Rumah</p>
          
        <br/>
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
                @php
                    $i = 1;
                @endphp
                @foreach ($desa as $item)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$item->n_kec}}</td>
                  <td>{{number_format($item->outcome,0,",",".")}}</td>
                  <td>{{number_format($item->jumlah_penduduk,0,",",".")}}</td>
                  <td>@php
                      $persentase = $item->outcome/$item->jumlah_penduduk*100;
                      echo number_format($persentase,2)."%";
                  @endphp</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          {{-- <p>Akses Dasar SPALDS: @php
              $ad_spalds = $akses_dasar_spalds/$total_rumah*100;
              echo number_format($ad_spalds,2)."%";
          @endphp</p> <br/>
          <p>Akses Aman SPALDT: @php
            $ad_spaldt = $akses_aman_spaldt/$total_rumah*100;
            echo number_format($ad_spaldt,2)."%";
        @endphp</p> <br/>
          <p>Akses Dasar: {{$akses_dasar}}</p> <br/>
          <p>Akses Layak: {{$akses_dasar+$tanpa_akses}}</p> <br>
          <p>Total Rumah: {{number_format($total_rumah,0,",",".")}}</p>         --}}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('script')
<script src="{{route('/')}}/assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/dataTables.buttons.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/jszip.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/buttons.colVis.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/pdfmake.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/vfs_fonts.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/dataTables.autoFill.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/dataTables.select.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/buttons.bootstrap4.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/buttons.html5.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/buttons.print.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/dataTables.bootstrap4.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/dataTables.responsive.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/responsive.bootstrap4.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/dataTables.keyTable.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/dataTables.colReorder.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/dataTables.fixedHeader.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/dataTables.rowReorder.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/dataTables.scroller.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/custom.js"></script>
<script src="{{route('/')}}/assets/js/owlcarousel/owl.carousel.js"></script>
<script src="{{route('/')}}/assets/js/prism/prism.min.js"></script>
<script src="{{route('/')}}/assets/js/clipboard/clipboard.min.js"></script>
<script src="{{route('/')}}/assets/js/counter/jquery.waypoints.min.js"></script>
<script src="{{route('/')}}/assets/js/counter/jquery.counterup.min.js"></script>
<script src="{{route('/')}}/assets/js/counter/counter-custom.js"></script>
<script src="{{route('/')}}/assets/js/custom-card/custom-card.js"></script>
<script src="{{route('/')}}/assets/js/datepicker/date-picker/datepicker.js"></script>
<script src="{{route('/')}}/assets/js/datepicker/date-picker/datepicker.en.js"></script>
<script src="{{route('/')}}/assets/js/datepicker/date-picker/datepicker.custom.js"></script>
<script src="{{route('/')}}/assets/js/general-widget.js"></script>
<script src="{{route('/')}}/assets/js/height-equal.js"></script>
<script src="{{asset('assets')}}/js/chart/apex-chart/apex-chart.js"></script>

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
        data: [{{$tanpa_akses}}, {{$akses_dasar}}, {{$akses_layak}}, {{$akses_aman_spalds}}, {{$aa_ipald}}]
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

@endsection

