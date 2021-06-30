@extends('layouts.master')
@section('content')
<div class="col-md-12">
    <div class="card card-outline card-primary">
      <div class="card-header">
        <h3 class="card-title">Tambah Data SPALD Terbangun</h3>
        <!-- /.card-tools -->
      </div>
      <!-- /.card-header -->
      <form action="/spald/insert" method="POST">
        @csrf
      <div class="card-body">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Tipe</label>
                  <select name="tipe" class="form-control">
                    <option value="">Pilih Tipe</option>
                    <option value="spaldt">SPALD-T</option>
                    <option value="spalds">SPALD-S</option>
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
                  <select name="id_kec" class="form-control select2bs4" data-dropdown-css-class="select2-danger" style="width: 100%;">
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
                  <label>Komponen IPAL</label>
                  <input type="number" name="komponen_ipal" class="form-control" placeholder="Komponen IPAL">
                  <div class="text-danger">
                      @error('komponen_ipal')
                          {{ $message }}
                      @enderror
                  </div>
                </div>
              </div>
              <div class="div col-sm-6">
                <div class="form-group">
                  <label>SR</label>
                  <input type="number" name="komponen_sr" class="form-control" placeholder="Tahun Anggaran">
                  <div class="text-danger">
                      @error('komponen_sr')
                          {{ $message }}
                      @enderror
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
              <button type="submit" class="btn btn-warning float-right">Batal</button>
            </div>
        </form>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
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
jQuery(document).ready(function (){
            jQuery($('.select2bs4')).on('change',function(){
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

