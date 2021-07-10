@extends('layouts.dark')
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
                      <option value="Proses Pembangunan">Proses Pembangunan</option>
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
                    <input data-type="currency" id="currency-field" type="text" name="pagu" class="form-control" placeholder="Pagu Anggaran">
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
                  <option value="">Pilih Rincian Kegiatan</option>
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
                <select name="rincian_tipe_spaldt" class="form-control">
                  <option value="">Pilih Rincian Kegiatan</option>
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
// Jquery Dependency

$("input[data-type='currency']").on({
    keyup: function() {
      formatCurrency($(this));
    },
    blur: function() { 
      formatCurrency($(this), "blur");
    }
});


function formatNumber(n) {
  // format number 1000000 to 1,234,567
  return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ".")
}


function formatCurrency(input, blur) {
  // appends $ to value, validates decimal side
  // and puts cursor back in right position.
  
  // get input value
  var input_val = input.val();
  
  // don't validate empty input
  if (input_val === "") { return; }
  
  // original length
  var original_len = input_val.length;

  // initial caret position 
  var caret_pos = input.prop("selectionStart");
    
  // check for decimal
  if (input_val.indexOf(",") >= 0) {

    // get position of first decimal
    // this prevents multiple decimals from
    // being entered
    var decimal_pos = input_val.indexOf(".");

    // split number by decimal point
    var left_side = input_val.substring(0, decimal_pos);
    var right_side = input_val.substring(decimal_pos);

    // add commas to left side of number
    left_side = formatNumber(left_side);

    // validate right side
    right_side = formatNumber(right_side);
    
    // On blur make sure 2 numbers after decimal
    if (blur === "blur") {
      right_side += "00";
    }
    
    // Limit decimal to only 2 digits
    right_side = right_side.substring(0, 2);

    // join number by .
    input_val = "Rp" + left_side + "." + right_side;

  } else {
    // no decimal entered
    // add commas to number
    // remove all non-digits
    input_val = formatNumber(input_val);
    input_val = "Rp" + input_val;
    
    // final formatting
    if (blur === "blur") {
      input_val += ",00";
    }
  }
  
  // send updated string to input
  input.val(input_val);

  // put caret back in the right position
  var updated_len = input_val.length;
  caret_pos = updated_len - original_len + caret_pos;
  input[0].setSelectionRange(caret_pos, caret_pos);
}


        
</script>
@endsection

