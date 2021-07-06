@extends('layouts.dark')
@section('content')
<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
          <h3 class="card-title">Dapatkan Koordinat</h3>
        </div>
        <div class="card-body">
          <div class="row">
              <div class="col-sm-12">
                <ul id="status" class="progressing">
                    <li>Mencari titik Koordinat akurat… (Izinkan Akses Data Lokasi)</li>
                </ul>
                <div class="col-md-12" id="map" style="width: 100%; height: 400px;"></div>
              </div>
          </div>
        </div>
    </div>
</div>
<div class="col-md-12">
    <form action="/koordinat/update/{{$koordinat->id_koordinat}}" method="POST">
        @csrf
    <div class="card card-outline card-primary">
      <div class="card-header">
        <h3 class="card-title">Data Koordinat</h3>
      </div>
      <div class="card-body">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                <label>Tipe</label>
                    <select id="id_spald" name="id_spald" class="form-control">
                        <option value="{{$koordinat->id_spald}}">{{$koordinat->nama_ksm}}</option>
                        @foreach ($spald as $s)
                            <option value="{{$s->id_spald}}">{{$s->nama_ksm}}</option>
                        @endforeach
                    </select>
                    <div class="text-danger">
                        @error('id_spald')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Latitude</label>
                    <input value="{{$koordinat->lat_}}" type="text" id="lat_" name="lat_" class="form-control" placeholder="Latitude">
                    <div class="text-danger">
                        @error('lat_')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Longitude</label>
                    <input value="{{$koordinat->long_}}" type="text" id="long_" name="long_" class="form-control" placeholder="Latitude">
                    <div class="text-danger">
                        @error('long_')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                <button type="submit" class="btn btn-warning float-right">Batal</button>
            </div>
        </div>
      </div>
    </div>
    </form>
</div>
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
   function onAccuratePositionError (e) {
			addStatus(e.message, 'error');
		}

		function onAccuratePositionProgress (e) {
			var message = 'Mencari… (Akurasi: ' + e.accuracy + ')';
			addStatus(message, 'progressing');
		}

		function onAccuratePositionFound (e) {
			var message = 'Posisi ditemukan (Akurasi: ' + e.accuracy + ')';
			addStatus(message, 'done');
			map.setView(e.latlng, 18);
			L.marker(e.latlng)
            .addTo(map)
            .bindPopup("Latitude : " + e.latlng.lat + " <br /> Longitude :" + e.latlng.lng);
            document.getElementById("lat_").value = e.latlng.lat;
            document.getElementById("long_").value = e.latlng.lng;

		}

		function addStatus (message, className) {
			var ul = document.getElementById('status'),
				li = document.createElement('li');
			li.appendChild(document.createTextNode(message));
			ul.className = className;
			ul.appendChild(li);
		}

		map.on('accuratepositionprogress', onAccuratePositionProgress);
		map.on('accuratepositionfound', onAccuratePositionFound);
		map.on('accuratepositionerror', onAccuratePositionError);

		map.findAccuratePosition({
			maxWait: 10000,
			desiredAccuracy: 20
		});
        var popup = L.popup();

        function onMapClick(e) {
            popup
                .setLatLng(e.latlng)
                .setContent("Latitude : " + e.latlng.lat + " <br /> Longitude :" + e.latlng.lng)
                .openOn(map);
                document.getElementById("lat_").value = e.latlng.lat;
                document.getElementById("long_").value = e.latlng.lng;

        }
        map.on('click', onMapClick);
</script>
@endsection