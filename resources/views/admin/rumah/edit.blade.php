@extends('layouts.dark')
@section('content')
<form action="/rumah/insert" method="POST">
    @csrf
<div class="col-md-12">
    <div class="card card-outline card-primary">
      <div class="card-header">
        <h3 class="card-title">Edit Data Rumah - {{$rumah->n_kk}}</h3>
      </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Kecamatan</label>
                            <select id="kec" name="id_kec" class="form-control select2bs4" data-dropdown-css-class="select2-danger" style="width: 100%;">
                            <option value="">Pilih Kecamatan</option>
                            @foreach($kecamatan as $key => $value)
                            <option value="{{$key}}">{{$value}}</option>
                            @endforeach
                            </select>
                            <div class="text-danger">
                                @error('id_kec')
                                    {{ $message }}
                                @enderror
                            </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="id_desa">Desa</label>
                            <select value="" name="id_desa" id="id_desa" class="form-control select2bs4" ></select>
                    </div>
                </div>
                <div class="div col-sm-6">
                    <div class="form-group">
                        <label>RW</label>
                            <input value="{{$rumah->rw}}" type="number" name="rw" class="form-control" placeholder="RW">
                        <div class="text-danger">
                            @error('rw')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="div col-sm-6">
                    <div class="form-group">
                        <label>RT</label>
                        <input value="{{$rumah->rt}}" type="number" name="rt" class="form-control" placeholder="RT">
                    <div class="text-danger">
                        @error('rt')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                </div>
                <div class="div col-sm-6">
                    <div class="form-group">
                        <label>Nama Kepala Keluarga</label>
                        <input value="{{$rumah->n_kk}}" type="text" name="n_kk" class="form-control" placeholder="Nama Kepala Keluarga">
                        <div class="text-danger">
                        @error('n_kk')
                            {{ $message }}
                        @enderror
                        </div>
                    </div>
                </div>
                <div class="div col-sm-6">
                    <div class="form-group">
                        <label>NIK</label>
                        <input value="{{$rumah->n_nik}}" type="number" name="n_nik" class="form-control" placeholder="Nomor NIK">
                        <div class="text-danger">
                        @error('n_nik')
                            {{ $message }}
                        @enderror
                        </div>
                    </div>
                </div>
                <div class="div col-sm-6">
                    <div class="form-group">
                        <label>Jumlah Anggota Keluarga</label>
                        <input value="{{$rumah->j_anggota}}" type="number" name="j_anggota" class="form-control" placeholder="Jumlah Anggota Keluarga">
                        <div class="text-danger">
                        @error('j_anggota')
                            {{ $message }}
                        @enderror
                        </div>
                    </div>
                </div>
                <div class="div col-sm-6">
                    <div class="form-group">
                        <label>Klasifikasi</label>
                        <input value="{{$rumah->klasifikasi}}" type="text" name="klasifikasi" class="form-control" placeholder="Klasifikasi">
                        <div class="text-danger">
                        @error('klasifikasi')
                            {{ $message }}
                        @enderror
                        </div>
                    </div>
                </div>
                <div class="div col-sm-6">
                    <div class="form-group">
                        <label>Risiko sanitasi</label>
                        <input value="{{$rumah->risiko_sanitasi}}" type="number" name="risiko_sanitasi" class="form-control" placeholder="risiko_sanitasi">
                        <div class="text-danger">
                        @error('risiko_sanitasi')
                            {{ $message }}
                        @enderror
                        </div>
                    </div>
                </div>
                <div class="div col-sm-6">
                    <div class="form-group">
                        <label>MBR</label>
                        <input value="{{$rumah->mbr}}" type="number" name="mbr" class="form-control" placeholder="MBR">
                        <div class="text-danger">
                        @error('mbr')
                            {{ $message }}
                        @enderror
                        </div>
                    </div>
                </div>
                <div class="div col-sm-6">
                    <div class="form-group">
                        <label>Non MBR</label>
                        <input value="{{$rumah->non_mbr}}" type="number" name="non_mbr" class="form-control" placeholder="Non MBR">
                        <div class="text-danger">
                        @error('non_mbr')
                            {{ $message }}
                        @enderror
                        </div>
                    </div>
                </div>
                <div class="div col-sm-6">
                    <div class="form-group">
                        <label>BABS</label>
                        <input value="{{$rumah->babs}}" type="number" name="babs" class="form-control" placeholder="BABS">
                        <div class="text-danger">
                        @error('babs')
                            {{ $message }}
                        @enderror
                        </div>
                    </div>
                </div>
                <div class="div col-sm-6">
                    <div class="form-group">
                        <label>Cubluk Perkotaan</label>
                        <input value="{{$rumah->cubluk_perkotaan}}"t type="number" name="cubluk_perkotaan" class="form-control" placeholder="Cubluk Perkotaan">
                        <div class="text-danger">
                        @error('cubluk_perkotaan')
                            {{ $message }}
                        @enderror
                        </div>
                    </div>
                </div>
                <div class="div col-sm-6">
                    <div class="form-group">
                        <label>Cubluk Perdesaan</label>
                        <input value="{{$rumah->cubluk_perdesaan}}" type="number" name="cubluk_perdesaan" class="form-control" placeholder="Cubluk Perdesaan">
                        <div class="text-danger">
                        @error('cubluk_perdesaan')
                            {{ $message }}
                        @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12">
  <div class="card card-outline card-primary">
    <div class="card-header">
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-sm-12">
          <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
          <button type="submit" class="btn btn-warning float-right">Batal</button>
        </div>
      </div>
    </div>
  </div>
</div>
</form>

<script>
$(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
})
jQuery(document).ready(function (){
            jQuery($('#kec')).on('change',function(){
                var KecID = jQuery(this).val();
                if(KecID)
                {
                    jQuery.ajax({
                        url : '/spald/desa/' +KecID,
                        type : "GET",
                        dataType : "json",
                        success:function(data)
                        {
                            console.log(data);
                            jQuery($('#id_desa')).empty();
                            jQuery.each(data, function(key,value){
                            $($('#id_desa')).append('<option value="'+ key +'">'+ value +'</option>');
                            });
                        }
                    });
                }
                else
                {
                    $($('#id_desa')).empty();
                }
            });
});
</script>
@endsection

