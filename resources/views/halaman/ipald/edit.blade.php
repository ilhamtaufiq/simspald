@extends($layout)
@section('title', 'Edit SPALD')

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
            <div class="card">
               <div class="card-header">
                  <h5 class="card-title">Edit Data Sistem Pengelolaan Air Limbah Domestik Terbangun</h5>
               </div>
               <form action="{{route('spald.update', $spald->id_spald)}}" method="POST">
                @csrf
                @method('PUT')
               <div class="card-body">
                  <div class="mb-2">
                     <div class="col-form-label">Kecamatan</div>
                     <select id="kec" name="id_kec" class="js-example-basic-single col-sm-12" placeholder="Kecamatan">
                        {{-- <option value="{{$spald->id_kec}}" {{ $spald->id_kec == $spald->id_kec ? 'selected' : '' }}>{{$spald->kec->n_kec}}</option> --}}
                        @foreach($kecamatan as $key => $value)
                        <option value="{{$key}}" {{ $key == $spald->id_kec ? 'selected' : '' }}>{{$value}}</option>
                        @endforeach
                      </select>
                  </div>
                  <div class="mb-2">
                    <div class="col-form-label">Desa</div>
                    <select value="" name="id_desa" id="id_desa" class="js-example-basic-single col-sm-12" >
                     <option value="{{$spald->id_desa}}" {{ $spald->id_desa == $spald->id_desa ? 'selected' : '' }}>{{$spald->desa->n_desa}}</option>
                  </select>
                 </div>
                 <div class="mb-2">
                    <div class="col-form-label">Kegiatan</div>
                    <select id="kegiatan" name="id_kegiatan" class="js-example-basic-single col-sm-12">
                        @foreach($kegiatan as $key => $value)
                        <option value="{{$key}}" {{ $key == $spald->id_kegiatan ? 'selected' : '' }}>{{$value}}</option>
                        @endforeach
                    </select>
                 </div>
                 <div class="mb-2">
                    <div class="col-form-label">Rincian Kegiatan</div>
                    <select value="" name="id_rincian_kegiatan" id="id_rincian_kegiatan" class="js-example-basic-single col-sm-12" >
                       <option value="{{$spald->id_rincian_kegiatan}}">{{$spald->rincianKegiatan->rincian_kegiatan}}</option>
                    </select>
                 </div>
                 <div class="mb-2">
                    <div class="col-form-label">Sumber Dana</div>
                    <select name="sumber_dana" class="js-example-basic-single col-sm-12">
                       <option value="{{$spald->sumber_dana}}">{{$spald->sumber_dana}}</option>
                       <option value="DAU">DAU</option>
                       <option value="Sanitasi DAK">Sanitasi DAK</option>
                       <option value="Sanimas">Sanimas</option>
                    </select>
                 </div>
                 <div class="mb-2">
                    <div class="col-form-label">Pagu</div>
                    <input value="{{$spald->pagu}}" name="pagu" data-type="currency" id="currency-field" class="form-control" type="text">
                 </div>
                 <div class="mb-2">
                  <div class="col-form-label">Target Outcome</div>
                  <input value="{{$spald->jiwa}}" name="jiwa" class="form-control" type="number" placeholder="Satuan Jiwa">
                 </div>
                 <div id="spalds" class="mb-2">
                  <div class="col-form-label">Tangki Septik</div>
                  <input value="{{$spald->ts}}" name="ts" class="form-control" type="number" placeholder="Jumlah Target Tangki Septik Terbangun" >
                 </div>
                 <div id="spaldt">
                 <div class="mb-2">
                  <div class="col-form-label">IPAL</div>
                  <input value="{{$spald->ipal}}" disabled="" name="ipal" class="form-control" type="number" placeholder="Jumlah Target IPAL Terbangun">
                 </div>
                 <div class="mb-2">
                  <div class="col-form-label">Sambungan Rumah</div>
                  <input value="{{$spald->sr}}" name="sr" class="form-control" type="number" placeholder="Jumlah Target Sambungan Rumah Terbangun">
                 </div>
                 </div>
                 <div class="mb-2">
                    <div class="col-form-label">Tahun Anggaran</div>
                    <select name="tahun_anggaran" class="js-example-basic-single col-sm-12">
                        <option value="{{$spald->tahun_anggaran}}">{{$spald->tahun_anggaran}}</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                    </select>
                 </div>
                 <br>
                 <div class="mb-2">
                    <button class="btn btn-pill btn-primary btn-air-primary" type="submit" title="">Simpan</button>
                    <button onclick="goBack()" class="btn btn-pill btn-warning btn-air-warning" type="button" title="">Batal</button>
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
</script>
<script>
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
                                   $($('#id_desa')).empty();
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