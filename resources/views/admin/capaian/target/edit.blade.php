@extends('layouts.master')
@section('content')
<form action="/target/update/{{$target->id_capaian}}" method="POST">
  @csrf
<div class="col-md-12">
    <div class="card card-outline card-primary">
      <div class="card-header">
        <h3 class="card-title">Ubah Data Target Capaian</h3>
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
                    <label>Total Rumah</label>
                    <input value="{{$target->total_rumah}}" type="number" name="total_rumah" class="form-control" placeholder="Total Rumah">
                    <div class="text-danger">
                        @error('total_rumah')
                            {{ $message }}
                        @enderror
                    </div>
                  </div>
                </div>
                <div class="div col-sm-6">
                  <div class="form-group">
                    <label>Akses Dasar</label>
                    <input value="{{$target->akses_dasar}}" type="number" name="akses_dasar" class="form-control" placeholder="Akses Dasar">
                    <div class="text-danger">
                        @error('akses_dasar')
                            {{ $message }}
                        @enderror
                    </div>
                  </div>
                </div>
                <div class="div col-sm-6">
                    <div class="form-group">
                      <label>Akses Aman SPALD-S</label>
                      <input value="{{$target->aa_spalds}}" type="number" name="aa_spalds" class="form-control" placeholder="Akses Aman SPALDS">
                      <div class="text-danger">
                          @error('aa_spalds')
                              {{ $message }}
                          @enderror
                      </div>
                    </div>
                </div>
                <div class="div col-sm-6">
                    <div class="form-group">
                      <label>Akses Aman SPALD-T</label>
                      <input value="{{$target->aa_spaldt}}" type="number" name="aa_spaldt" class="form-control" placeholder="Akses Aman SPALDT">
                      <div class="text-danger">
                          @error('aa_spaldt')
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

