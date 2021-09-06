@extends($layout)
@section('title', $title)

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/prism.css')}}">
<!-- Leaflet -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="crossorigin=""></script>
<!-- Accurate Position Plugin -->
<script src="{{asset('dist')}}/js/getloc.js"></script>
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
	<h2><span>{{$title}}  </span></h2>
    <button onclick="location.href='{{route('map.create')}}'" class="btn btn-pill btn-primary btn-air-primary" type="submit" title="">Tambah</button>

@endsection

@section('breadcrumb-items')
	<li class="breadcrumb-item">Map</li>
    <li class="breadcrumb-item active">{{$title}}</li>
@endsection

@section('content')
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
@endsection

@section('script')
<script src="{{asset('dist')}}/js/map.js"></script>
    <script>       
     @foreach($map as $data)
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
            <td>{{$data->ipald->nama_ksm}}</td>
        </tr>
        <tr>
            <td>Kegiatan</td>
            <td>DAK Sanitasi</td>
        </tr>
        <tr>
            <td>Tipe SPALD</td>
            <td>{{$data->spald->rincian_kegiatan}}</td>
        </tr>
        <tr>
            <td>Tahun Anggaran</td>
            <td>{{$data->spald->tahun_anggaran}}</td>
        </tr>
        <tr>
            <td colspan="2"class="text-center"><a text-color="white" href="" class="btn btn-primary">Detail</a></td>
        </tr>
        </tbody>
        </table>
    `  
        L.marker([{{$data->lat}}, {{$data->long}}])
        .addTo(map)
        .bindPopup(informasi);
      @endforeach
    </script>
<script src="{{asset('assets/js/prism/prism.min.js')}}"></script>
<script src="{{asset('assets/js/clipboard/clipboard.min.js')}}"></script>
<script src="{{asset('assets/js/custom-card/custom-card.js')}}"></script>
@endsection