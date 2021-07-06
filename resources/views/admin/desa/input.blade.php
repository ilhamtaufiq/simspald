@extends('layouts.dark')
@section('content')
<div class="col-md-12">
    <form action="/desa/insert" method="POST">
        @csrf
    <div class="card card-outline card-primary">
      <div class="card-header">
        <h3 class="card-title">Tambah Desa</h3>
      </div>
      <div class="card-body">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Kecamatan</label>
                    <input value="{{$kec}}" type="text" id="id_kec" name="id_kec" class="form-control" placeholder="Kecamatan">
                    <div class="text-danger">
                        @error('id_kec')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Desa</label>
                    <input type="text" id="n_desa" name="n_desa" class="form-control" placeholder="Desa">
                    <div class="text-danger">
                        @error('n_desa')
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
$(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
})
</script>
@endsection