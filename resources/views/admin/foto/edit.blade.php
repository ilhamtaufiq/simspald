@extends('layouts.dark')
@section('content')
<div class="col-md-12">
    <form action="/foto/update/{{$foto->id_foto}}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="card card-outline card-primary">
      <div class="card-header">
        <h3 class="card-title">Ubah Data Foto</h3>
      </div>
      <div class="card-body">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                <label>Tipe</label>
                    <select id="id_spald" class="form-control select2bs4" name="id_spald" class="form-control">
                        <option value="{{$foto->id_spald}}">{{$foto->nama_ksm}}</option>
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
                    <label>Deskripsi</label>
                      <input value="{{$foto->deskripsi}}" type="text" name="deskripsi" class="form-control"> 
                    <div>
                        <img src="{{asset('foto')}}/{{$foto->deskripsi}}" width="70px" alt="">
                    </div>
                      <div class="text-danger">
                        @error('deskripsi')
                            {{ $message }}
                        @enderror
                    </div>
                    <!-- /.input group -->
                  </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Foto</label>
                      <input type="file" name="foto" class="form-control" accept="image/png"> 
                    <div>
                        <img src="{{asset('foto')}}/{{$foto->foto}}" width="70px" alt="">
                    </div>
                    <div class="text-danger">
                        @error('foto')
                            {{ $message }}
                        @enderror
                    </div>
                    <!-- /.input group -->
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