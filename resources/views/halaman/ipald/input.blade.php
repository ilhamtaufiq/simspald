@extends($layout)
@section('title', 'Tambah SPALD')

@section('css')
<link rel="stylesheet" type="text/css" href="{{route('/')}}/assets/css/select2.css">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
	<h2>{{$title}}</h2>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Data SPALD</li>	
	<li class="breadcrumb-item active">{{$title}}</li>
@endsection

@section('content')
<div class="container-fluid">
   <div class="select2-drpdwn">
      <div class="row">
         <!-- Default Textbox start-->
         <div class="col-md-12">
            <div class="card card-absolute">
               <div class="card-header bg-primary">
                  <h5 class="text-white">Tambah SPALD Terbangun</h5>
               </div>
               <form action="{{route('spald.store')}}" method="POST">
                @csrf
               <div class="card-body">
                  <div class="mb-2">
                     <div class="col-form-label">Kecamatan</div>
                     <select id="kec" name="id_kec" class="js-example-basic-single col-sm-12" placeholder="Kecamatan">
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
                  <div class="mb-2">
                    <div class="col-form-label">Desa</div>
                    <select value="" name="id_desa" id="id_desa" class="js-example-basic-single col-sm-12" ></select>
                 </div>
                 <div class="mb-2">
                    <div class="col-form-label">Kegiatan</div>
                    <select id="kegiatan" name="id_kegiatan" class="js-example-basic-single col-sm-12">
                        <option value="">Pilih Kegiatan</option>
                        @foreach($kegiatan as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                    <div class="text-danger">
                      @error('id_desa')
                          {{ $message }}
                      @enderror
                  </div>
                 </div>
                 <div class="mb-2">
                    <div class="col-form-label">Rincian Kegiatan</div>
                    <select value="" name="id_rincian_kegiatan" id="id_rincian_kegiatan" class="js-example-basic-single col-sm-12" ></select>
                    <div class="text-danger">
                      @error('id_rincian_kegiatan')
                          {{ $message }}
                      @enderror
                  </div>
                 </div>
                 <div class="mb-2">
                    <div class="col-form-label">Program</div>
                    <select name="sumber_dana" class="js-example-basic-single col-sm-12">
                        <option value="Sanitasi DAK">Sanitasi DAK</option>
                       <option value="Sanimas">Sanimas</option>
                       <option value="Citarum Harum">Sanimas Citarum Harum</option>
                    </select>
                    <div class="text-danger">
                      @error('sumber_dana')
                          {{ $message }}
                      @enderror
                  </div>
                 </div>
                 <div class="mb-2">
                    <div class="col-form-label">Pagu</div>
                    <input name="pagu" data-type="currency" id="currency-field" class="form-control" type="text">
                    <div class="text-danger">
                      @error('pagu')
                          {{ $message }}
                      @enderror
                  </div>
                 </div>
                 <div class="mb-2">
                  <div class="col-form-label">Target Outcome</div>
                  <input name="jiwa" class="form-control" type="number" placeholder="Satuan Jiwa">
                  <div class="text-danger">
                    @error('jiwa')
                        {{ $message }}
                    @enderror
                </div>
                 </div>
                 <div id="spalds" class="mb-2">
                  <div class="col-form-label">Tangki Septik</div>
                  <input name="ts" class="form-control" type="number" placeholder="Jumlah Target Tangki Septik Terbangun" >
                  <div class="text-danger">
                    @error('ts')
                        {{ $message }}
                    @enderror
                </div>
                 </div>
                 <div id="spaldt">
                 <div class="mb-2">
                  <div class="col-form-label">IPAL</div>
                  <input name="ipal" class="form-control" type="number" placeholder="Jumlah Target IPAL Terbangun">
                  <div class="text-danger">
                    @error('ipal')
                        {{ $message }}
                    @enderror
                </div>
                 </div>
                 <div class="mb-2">
                  <div class="col-form-label">Sambungan Rumah</div>
                  <input name="sr" class="form-control" type="number" placeholder="Jumlah Target Sambungan Rumah Terbangun">
                  <div class="text-danger">
                    @error('sr')
                        {{ $message }}
                    @enderror
                </div>
                 </div>
                 </div>
                 <div class="mb-2">
                    <div class="col-form-label">Tahun Anggaran</div>
                    <select name="tahun_anggaran" class="js-example-basic-single col-sm-12">
                       <option value="" selected>Pilih Tahun Anggaran</option>   
                       <option value="2017">2017</option>
                       <option value="2018">2018</option>
                       <option value="2019">2019</option>
                       <option value="2020">2020</option>
                       <option value="2021">2021</option>
                    </select>
                    <div class="text-danger">
                      @error('tahun_anggaran')
                          {{ $message }}
                      @enderror
                  </div>
                 </div>
                 <br>
                 <div class="mb-2">
                    <button class="btn btn-pill btn-primary btn-air-primary" type="submit" title="">Simpan</button>
                    <button onclick="goBack()" class="btn btn-pill btn-warning btn-air-warning" type="reset" title="">Batal</button>

                 </div>
                </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@section('script')
<script>
   function goBack() {
  window.history.back();
}
</script>
<script src="{{route('/')}}/assets/js/select2/select2.full.min.js"></script>
<script src="{{route('/')}}/assets/js/select2/select2-custom.js"></script>
<script>
   $(document).ready(function(){
                   $("#kegiatan").change(function()
                     {
                       if($(this).val() == "2")
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
                       if($(this).val() == "1")
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
  <script>
    jQuery(document).ready(function (){
                   jQuery($('#kegiatan')).on('change',function(){
                       var KegID = jQuery(this).val();
                       if(KegID)
                       {
                           jQuery.ajax({
                               url : '/spald/rincian/' +KegID,
                               type : "GET",
                               dataType : "json",
                               success:function(data)
                               {
                                   console.log(data);
                                   jQuery($('#id_rincian_kegiatan')).empty();
                                   jQuery.each(data, function(key,value){
                                   $($('#id_rincian_kegiatan')).append('<option value="'+ key +'">'+ value +'</option>');
                                   });
                               }
                           });
                       }
                       else
                       {
                           $($('#id_rincian_kegiatan')).empty();
                       }
                   });
    });
  </script>
  <script>
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