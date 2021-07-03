@extends('layouts.master')
@section('content')
<form action="/koordinat/insert" method="POST">
    @csrf
<div class="col-md-12">
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
                        <option value="">Pilih SPALD</option>
                        @foreach ($spald as $s)
                            <option value="{{$s->id_spald}}">{{$s->nama_ksm}}</option>
                        @endforeach
                    </select>
                    <div class="text-danger">
                        @error('tipe')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Latitude</label>
                    <input type="number" name="lat_" class="form-control" placeholder="Latitude">
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
                    <input type="number" name="long_" class="form-control" placeholder="Latitude">
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
</div>
</form>
@endsection