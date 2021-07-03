@extends('layouts.master')
@section('content')
<form action="/spald/insert" method="POST">
  @csrf
<div class="col-md-12">
    <div class="card card-outline card-primary">
      <div class="card-header">
        <h3 class="card-title">Tambah Data SPALD Terbangun</h3>
      </div>
        <div class="card-body">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Tipe</label>
                        <select id="kegiatan" name="tipe" class="form-control">
                          <option value="">Pilih Kegiatan</option>
                          <option value="SPALD-T">SPALD-T</option>
                          <option value="SPALD-S">SPALD-S</option>
                        </select>
                        <div class="text-danger">
                            @error('tipe')
                                {{ $message }}
                            @enderror
                        </div>
                  </div>
                </div>
                <div class="div col-sm-6">
                  <div class="form-group">
                    <label>Nama KSM</label>
                    <input type="text" name="nama_ksm" class="form-control" placeholder="Nama KSM">
                    <div class="text-danger">
                        @error('nama_ksm')
                            {{ $message }}
                        @enderror
                    </div>
                  </div>
                </div>
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
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Kondisi</label>
                    <select name="kondisi" class="form-control">
                      <option value="">Kondisi</option>
                      <option value="Beroperasi">Beroperasi</option>
                      <option value="Rusak">Rusak</option>
                    </select>
                    <div class="text-danger">
                        @error('kondisi')
                            {{ $message }}
                        @enderror
                    </div>
                  </div>
                </div>
                <div class="div col-sm-6">
                  <div class="form-group">
                    <label>Akses Tersedia</label>
                    <input type="number" name="akses_tersedia" class="form-control" placeholder="Jumlah Unit Sambungan Rumah">
                    <div class="text-danger">
                        @error('akses_tersedia')
                            {{ $message }}
                        @enderror
                    </div>
                  </div>
                </div>
                <div class="div col-sm-6">
                  <div class="form-group">
                    <label>Akses Termanfaatkan</label>
                    <input type="number" name="akses_termanfaatkan" class="form-control" placeholder="Jumlah Unit Sambungan Rumah">
                    <div class="text-danger">
                        @error('akses_termanfaatkan')
                            {{ $message }}
                        @enderror
                    </div>
                  </div>
                </div>
              </div>
        </div>
      </div>
</div>
<div id="spalds" class="col-md-12">
  <div class="card card-outline card-primary">
    <div class="card-header">
      <h3 class="card-title">Sistem Pengolahan Air Limbah Domestik Setempat</h3>
    </div>
      <div  class="card-body">
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label>Rincian Kegiatan</label>
                <select name="rincian_tipe" class="form-control">
                  <option value="">Pilih Rincian Kegiatan</option>
                  <option value="Tangki Septik Individual">Tangki Septik Individual</option>
                  <option value="Tangki Septik Komunal">Tangki Septik Komunal</option>
                </select>
                <div class="text-danger">
                    @error('rincian_tipe')
                        {{ $message }}
                    @enderror
                </div>
              </div>
            </div>
            <div class="div col-sm-6">
              <div class="form-group">
                <label>Unit Tangki Septik</label>
                <input value="0" type="number" name="komponen_ts" class="form-control"  placeholder="Jumlah Unit Tangki Septik">
                <div class="text-danger">
                    @error('komponen_ts')
                        {{ $message }}
                    @enderror
                </div>
              </div>
            </div>
          </div>
    </div>
  </div>
</div>
<div id="spaldt" class="col-md-12">
  <div class="card card-outline card-primary">
    <div class="card-header">
      <h3 class="card-title">Sistem Pengolahan Air Limbah Domestik Terpusat</h3>
    </div>
    <div  class="card-body">
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label>Tipe</label>
                <select name="rincian_tipe" class="form-control">
                  <option value="">Pilih Rincian Kegiatan</option>
                  <option value="IPAL Komunal">IPAL Komunal</option>
                  <option value="IPAL Kombinasi MCK">IPAL Kombinasi MCK</option>
                </select>
                <div class="text-danger">
                    @error('rincian_tipe')
                        {{ $message }}
                    @enderror
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>Unit IPAL</label>
                <input type="number" name="komponen_ipal" class="form-control" placeholder="Jumlah Unit IPAL">
                <div class="text-danger">
                    @error('komponen_ipal')
                        {{ $message }}
                    @enderror
                </div>
              </div>
            </div>
            <div class="div col-sm-6">
              <div class="form-group">
                <label>Unit Sambungan Rumah</label>
                <input type="number" name="komponen_sr" class="form-control" placeholder="Jumlah Unit Sambungan Rumah">
                <div class="text-danger">
                    @error('komponen_sr')
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
        jQuery(document).ready(function (){
            jQuery($('#kec2')).on('change',function(){
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
                            jQuery($('#desa')).empty();
                            jQuery.each(data, function(key,value){
                            $($('#desa')).append('<option value="'+ key +'">'+ value +'</option>');
                            });
                        }
                    });
                }
                else
                {
                    $($('#desa')).empty();
                }
            });
        });
        $(document).ready(function(){
          $("#kegiatan").change(function()
            {
              if($(this).val() == "SPALD-S")
            {
                $("#spalds").show();
            }
            else
            {
                $("#spalds").hide();
            }
          });
         $("#spalds").hide();
        });
        $(document).ready(function()
            {
              $("#kegiatan").change(function()
            {
              if($(this).val() == "SPALD-T")
            {
              $("#spaldt").show();
            }
            else
            {
              $("#spaldt").hide();
            }
          });
          $("#spaldt").hide();    
        });
</script>
@endsection

