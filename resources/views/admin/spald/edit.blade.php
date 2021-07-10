@extends('layouts.dark')
@section('content')
<form action="/spald/update/{{$spald->id_spald}}" method="POST">
  @csrf
<div class="col-md-12">
    <div class="card card-outline card-primary">
      <div class="card-header">
        <h3 class="card-title">{{$spald->tipe}} - {{$spald->rincian_tipe_spalds}} {{$spald->rincian_tipe_spaldt}} {{$spald->nama_ksm}} <br /> Desa {{$spald->n_desa}} Kecamatan {{$spald->n_kec}}</h3>
      </div>
        <div class="card-body">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Tipe</label>
                        <select id="kegiatan" name="tipe" class="form-control">
                          <option value="{{$spald->tipe}}">Pilih Kegiatan</option>
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
                    <input value="{{$spald->nama_ksm}}" type="text" name="nama_ksm" class="form-control" placeholder="Nama KSM">
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
                      <option value="{{$spald->n_kec}}">Pilih Kecamatan</option>
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
                      <option value="{{$spald->kondisi}}">Kondisi</option>
                      <option value="Beroperasi">Beroperasi</option>
                      <option value="Rusak">Rusak</option>
                      <option value="Proses Pembangunan">Proses Pembangunan</option>
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
                    <label>Akses Tersedia</label>
                    <input value="{{$spald->akses_tersedia}}" type="number" name="akses_tersedia" class="form-control" placeholder="Jumlah Unit Sambungan Rumah">
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
                    <input value="{{$spald->akses_termanfaatkan}}" type="number" name="akses_termanfaatkan" class="form-control" placeholder="Jumlah Unit Sambungan Rumah">
                    <div class="text-danger">
                        @error('akses_termanfaatkan')
                            {{ $message }}
                        @enderror
                    </div>
                  </div>
                </div>
                <div class="div col-sm-6">
                  <div class="form-group">
                    <label>Tahun</label>
                    <select name="tahun" class="form-control">
                      <option value="">Pilih Tahun</option>
                      <option value="2020">2020</option>
                      <option value="2021">2021</option>
                      <option value="2022">2022</option>
                      <option value="2023">2023</option>
                    </select>                    
                    <div class="text-danger">
                        @error('tahun')
                            {{ $message }}
                        @enderror
                    </div>
                  </div>
                </div>
                <div class="div col-sm-6">
                  <div class="form-group">
                    <label>Pagu Anggaran</label>
                    <input value="{{$spald->pagu}}" data-type="currency" id="currency-field" type="text" name="pagu" class="form-control" placeholder="Pagu Anggaran">
                    <div class="text-danger">
                        @error('pagu')
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
                <select name="rincian_tipe_spalds" class="form-control">
                  <option value="{{$spald->rincian_tipe_spalds}}">{{$spald->rincian_tipe_spalds}}</option>
                  <option value="Tangki Septik Individual">Tangki Septik Individual</option>
                  <option value="Tangki Septik Komunal">Tangki Septik Komunal</option>
                </select>
                <div class="text-danger">
                    @error('rincian_tipe_spalds')
                        {{ $message }}
                    @enderror
                </div>
              </div>
            </div>
            <div class="div col-sm-6">
              <div class="form-group">
                <label>Unit Tangki Septik</label>
                <input value="{{$spald->komponen_ts}}" type="number" name="komponen_ts" class="form-control"  placeholder="Jumlah Unit Tangki Septik">
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
                <select name="rincian_tipe_spaldt" class="form-control">
                  <option value="{{$spald->rincian_tipe_spaldt}}">{{$spald->rincian_tipe_spaldt}}</option>
                  <option value="IPAL Komunal">IPAL Komunal</option>
                  <option value="IPAL Kombinasi MCK">IPAL Kombinasi MCK</option>
                </select>
                <div class="text-danger">
                    @error('rincian_tipe_spaldt')
                        {{ $message }}
                    @enderror
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>Unit IPAL</label>
                <input value="{{$spald->komponen_ipal}}" type="number" name="komponen_ipal" class="form-control" placeholder="Jumlah Unit IPAL">
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
                <input value="{{$spald->komponen_sr}}" type="number" name="komponen_sr" class="form-control" placeholder="Jumlah Unit Sambungan Rumah">
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
                            $("#id_desa").empty();
                            $("#id_desa").append('<option>Pilih Desa</option>');
                            jQuery.each(data, function(key,value){
                            $($('#id_desa')).append('<option value="'+ key +'">'+ value +'</option>');
                            });
                        }
                    });
                }
                else
                {
                  $("#id_desa").empty();
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

