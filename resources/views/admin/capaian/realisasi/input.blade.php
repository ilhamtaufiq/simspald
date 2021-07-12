@extends('layouts.dark')
@section('content')
<form action="/realisasi/insert" method="POST">
  @csrf
<div class="col-md-12">
    <div class="card card-outline card-primary">
      <div class="card-header">
        <h3 class="card-title">Tambah Data Realisasi Capaian</h3>
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
                      <option value="{{$s->id_spald}}">{{$s->nama_ksm}} Desa {{$s->n_desa}} Kecamatan {{$s->n_kec}}</option>
                      @endforeach
                    </select>
                    <div class="text-danger">
                        @error('id_spald')
                            {{ $message }}
                        @enderror
                    </div>
                  </div>
                </div>
                <div class="div col-sm-6">
                  <div class="form-group">
                    <label>Tanpa Akses</label>
                    <input type="number" name="tanpa_akses" class="form-control" placeholder="Tanpa Akses">
                    <div class="text-danger">
                        @error('tanpa_akses')
                            {{ $message }}
                        @enderror
                    </div>
                  </div>
                </div>
                <div class="div col-sm-6">
                  <div class="form-group">
                    <label>Akses Dasar</label>
                    <input type="number" name="akses_dasar" class="form-control" placeholder="Akses Dasar">
                    <div class="text-danger">
                        @error('akses_dasar')
                            {{ $message }}
                        @enderror
                    </div>
                  </div>
                </div>
                <div class="div col-sm-6">
                    <div class="form-group">
                      <label>Akses Layak</label>
                      <input type="number" name="akses_layak" class="form-control" placeholder="Akses Layak">
                      <div class="text-danger">
                          @error('akses_layak')
                              {{ $message }}
                          @enderror
                      </div>
                    </div>
                  </div>
                <div class="div col-sm-6">
                    <div class="form-group">
                      <label>Akses Aman SPALD-S</label>
                      <input type="number" name="aa_spalds" class="form-control" placeholder="Akses Aman SPALDS">
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
                      <input type="number" name="aa_spaldt" class="form-control" placeholder="Akses Aman SPALDT">
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

