@extends($layout)
@section('title', 'Tambah')

@section('css')
<link rel="stylesheet" type="text/css" href="{{route('/')}}/assets/css/select2.css">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="crossorigin=""></script>
<!-- Accurate Position Plugin -->
<script src="{{asset('dist')}}/js/getloc.js"></script>
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
	<h2>{{$title}}</h2>
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
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Data</li>	
	<li class="breadcrumb-item active">{{$title}}</li>
@endsection

@section('content')
<div class="container-fluid">
   <div class="select2-drpdwn">
      <div class="row">
         <!-- Default Textbox start-->
         <div class="col-md-12">
            <div class="card card-absolute">
               <div class="card-header bg-primary">
                  <h5 class="text-white">Tambah</h5>
               </div>
               <form action="{{route('map.store')}}" method="POST">
                @csrf
               <div class="card-body">
                    
                <div class="mb-2">
                    <div class="col-form-label">Unit SPALD</div>
                    <select id="id_spald" name="id_spald" class="js-example-basic-single col-sm-12" placeholder="SPALD">
                        <option value="">Pilih Unit SPALD</option>
                        @foreach ($map as $item)
                        @if (is_null($item->map))
                        <option value="{{$item->id_spald}}">{{$item->ksm->nama_ksm}}</option>
                        @endif
                        @endforeach
                    </select>  
                    <div class="text-danger">
                     @error('id_spald')
                         {{ $message }}
                     @enderror
                 </div> 
                 </div>
                 <div class="mb-2">
                    <div class="col-form-label">Latitude</div>
                    <input type="text" id="lat" name="lat" class="form-control" placeholder="Latitude">
                </div>
                <div class="mb-2">
                    <div class="col-form-label">Longitude</div>
                    <input type="text" id="long" name="long" class="form-control" placeholder="Longtitude">
                </div>
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
@endsection

@section('script')
<script src="{{asset('dist')}}/js/map.js"></script>

<script src="{{route('/')}}/assets/js/select2/select2.full.min.js"></script>
<script src="{{route('/')}}/assets/js/select2/select2-custom.js"></script>
@endsection