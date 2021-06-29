@extends('layouts.master')
@section('content')
<div class="col-md-12">
    <div class="card card-outline card-primary">
      <div class="card-header">
        <h3 class="card-title">Data Koordinat</h3>
        <div class="card-tools">
          <a href="/spald/add" type="button" class="btn btn-sm btn-primary btn-flat">
            <i class="fas fa-plus"></i>
            Tambah
          </a>
        </div>
      </div>
      <div class="card-body">
        @if (session('pesan'))
        <div class="alert alert-success alert-dimissable ">
            <button type="button" class="close" data-dimiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i>{{ session('pesan') }}</h5>
        </div>
        @endif
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th width=60px>No</th>
                    <th>Pekerjaan</th>
                    <th>Latitude Longitude</th>
                    <th width=100px class="text-center">Opsi</th>
                </tr>
                <tbody>
                    <?php $no=1; ?>
                    @foreach ($koordinat as $d)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $d->nama_ksm }}</td>
                        <td>{{$d->latlong}}</td>
                        <td class="text-center">
                            <a href="/desa/edit/{{$d->id_koordinat}}"><i class="fa fa-edit"></i></a>
                            <button class="btn btn-sm btn-primary" href="/desa/delete/{{$d->id_koordinat}}" data-toggle="modal" data-target="#delete{{$d->id_koordinat}}"><i class="fa fa-trash "></i></button>
                        </td>
                    </tr>    
                    @endforeach
                </tbody>
            </thead>
        </table>
      </div>
    </div>
</div>
<div class="col-md-12" id="map" style="width: 100%; height: 400px;"></div>

@foreach ($koordinat as $d)
<div class="modal fade" id="delete{{$d->id_koordinat}}">
  <div class="modal-dialog">
    <div class="modal-content bg-danger">
      <div class="modal-header">
        <h4 class="modal-title">{{$d->nama_ksm}}</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Apakah Anda yakin ingin menghapus data ini?</p>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Tidak</button>
        <a href="/spald/delete/{{$d->id_koordinat}}" type="button" class="btn btn-outline-light">Ya</a>
      </div>
    </div>
  </div>
</div>
@endforeach
<script>
var peta1 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11'
	});

var peta2 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/satellite-v9'
	});


var peta3 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
	});

var peta4 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/dark-v10'
	});
  var map = L.map('map', {
    center: [-6.834567727116758,107.13313579559328	],
    zoom: 13,
    layers: [peta1
    ]
    });
    var baseMaps = {
    "Grayscale": peta1,
    "Satellite": peta2,
    "Streets": peta3,
    "Dark": peta4,
    };
    L.control.layers(baseMaps).addTo(map);
   //mengambil koordinat

   @foreach($koordinat as $data)
      L.marker([<?= $data->latlong ?>]).addTo(map);
  @endforeach
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
</script>
@endsection