@extends('layouts.dark')
@section('content')
<form action="/rumah/insert" method="POST">
    @csrf
<div class="col-md-12">
    <div class="card card-outline card-primary">
      <div class="card-header">
        <h3 class="card-title">Tambah Data Rumah</h3>
      </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Komponen Spald</label>
                        <input hidden type="number" id="id_desa" name="id_desa" class="form-control" placeholder="Tanpa Akses">
  
                        <input hidden type="number" id="id_kec" name="id_kec" class="form-control" placeholder="Tanpa Akses">
  
                      <select id="id_spald" name="id_spald" class="form-control select2bs4" data-dropdown-css-class="select2-danger" style="width: 100%;">
                        <option value="">SPALD</option>
                        @foreach($spald as $s)
                        <option value="{{$s->id_spald}}">{{$s->nama_ksm}}</option>
                        @endforeach
                      </select>
                      <div class="text-danger">
                          @error('id_spald')
                              {{ $message }}
                          @enderror
                      </div>
                    </div>
                <div class="div col-sm-6">
                    <div class="form-group">
                        <label>RW</label>
                            <input type="number" name="rw" class="form-control" placeholder="RW">
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
                        <input type="number" name="rt" class="form-control" placeholder="RT">
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
                        <input type="text" name="n_kk" class="form-control" placeholder="Nama Kepala Keluarga">
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
                        <input type="number" name="n_nik" class="form-control" placeholder="Nomor NIK">
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
                        <input type="number" name="j_anggota" class="form-control" placeholder="Jumlah Anggota Keluarga">
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
                        <input type="text" name="klasifikasi" class="form-control" placeholder="Klasifikasi">
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
                        <input type="number" name="risiko_sanitasi" class="form-control" placeholder="risiko_sanitasi">
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
                        <input type="number" name="mbr" class="form-control" placeholder="MBR">
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
                        <input type="number" name="non_mbr" class="form-control" placeholder="Non MBR">
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
                        <input type="number" name="babs" class="form-control" placeholder="BABS">
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
                        <input type="number" name="cubluk_perkotaan" class="form-control" placeholder="Cubluk Perkotaan">
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
                        <input type="number" name="cubluk_perdesaan" class="form-control" placeholder="Cubluk Perdesaan">
                        <div class="text-danger">
                        @error('cubluk_perdesaan')
                            {{ $message }}
                        @enderror
                        </div>
                    </div>
                </div>
                <div class="div col-sm-6">
                    <div class="form-group">
                        <label>Akses Layak Tangki Septik Individual</label>
                        <input type="number" name="al_ts_individual" class="form-control" placeholder="Akses Layak Tangki Septik Individual">
                        <div class="text-danger">
                        @error('al_ts_individual')
                            {{ $message }}
                        @enderror
                        </div>
                    </div>
                </div>
                <div class="div col-sm-6">
                    <div class="form-group">
                        <label>Akses Layak Tangki Septik Komunal</label>
                        <input type="number" name="al_ts_komunal" class="form-control" placeholder="Akses Layak Tangki Septik Komunal">
                        <div class="text-danger">
                        @error('al_ts_komunal')
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
            jQuery($('#id_spald')).on('change',function(){
                var id = jQuery(this).val();
                if(id)
                {
                    jQuery.ajax({
                        url : '/spald/kec/' +id,
                        type : "GET",
                        dataType : "json",
                        success:function(data)
                        {
                            console.log(data);
                            document.getElementById("id_desa").value = data[0].id_desa;
                            document.getElementById("id_kec").value = data[0].id_kec;
                        }
                    });
                }
                else
                {
                    $($('#id_desa')).empty();
                    $($('#id_kec')).empty();

                }
            });
        });
</script>
@endsection

