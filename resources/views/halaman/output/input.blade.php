@extends($layout)
@section('title', 'Tambah output')

@section('css')
<link rel="stylesheet" type="text/css" href="{{route('/')}}/assets/css/select2.css">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
	<h2>{{$title}}</h2>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Data output</li>	
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
                  <h5 class="text-white">Tambah output</h5>
               </div>
               <form action="{{route('output.store')}}" method="POST">
                @csrf
               <div class="card-body">
                    
                <div class="mb-2">
                    <div class="col-form-label">Unit SPALD</div>
                    <select id="id_spald" name="id_spald" class="js-example-basic-single col-sm-12" placeholder="SPALD">
                        <option value="">Pilih Unit SPALD</option>
                        @foreach ($output as $item)
                        @if (is_null($item->output))
                            <option value="{{$item->id_spald}}">{{$item->ksm->nama_ksm}}</option>
                        @endif
                        @endforeach
                    </select>  
                    <div class="text-danger">
                     @error('id_spald')
                         {{ $message }}
                     @enderror
                 </div> 
                 </div>
                {{-- <div id="spalds" class="mb-2">
                    <div class="col-form-label">SPALDS</div>
                    <input value="" name="kuantitas" class="form-control" type="number" placeholder="">
                </div> --}}
                {{-- @for ($i=0; $i <= 2; $i++)
                <div class="row">
                    <div class="mb-2">
                        <label for="">Komponen</label>
                        <input type="text" name="komponen[{{ $i }}][key]" class="form-control" value="{{ old('komponen['.$i.'][key]') }}" placeholder="Nama Komponen">
                    </div>
                    <div class="mb-2">
                        <label for="">Kuantitas</label>
                        <input type="number" name="komponen[{{ $i }}][value]" class="form-control" value="{{ old('properties['.$i.'][value]') }}" placeholder="Jumlah">
                    </div>
                </div>
                @endfor --}}
                <table class="table table-bordered table-striped" id="komponen" name="komponen">
                    <thead>
                    <tr>
                        <th width="35%">Ipal</th>
                        <th width="35%">Sambungan Rumah</th>
                    </tr>
                    </thead>
                    <tbody>
                        <td><input type="number" name="ipal" class="form-control"/></td>
                        <td><input type="number" name="sr" class="form-control"/></td>

                    </tbody>
                </table>
                <table class="table table-bordered table-striped" id="komponen1" name="komponen1">
                    <thead>
                    <tr>
                        <th width="35%">Tangki Septik</th>
                    </tr>
                    </thead>
                    <tbody>
                        <td><input type="number" name="tangki_septik" class="form-control"/></td>
                    </tbody>
                </table>
                 <br>
                 <div class="mb-2">
                    <button class="btn btn-pill btn-primary btn-air-primary" type="submit" title="">Simpan</button>
                    <button class="btn btn-pill btn-warning btn-air-warning" type="button" title="">Batal</button>

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
    jQuery(document).ready(function (){
                   jQuery($('#id_spald')).on('change',function(){
                       var KegID = jQuery(this).val();
                       if(KegID)
                       {
                           jQuery.ajax({
                               url : '/spald/get/' +KegID,
                               type : "GET",
                               dataType : "json",
                               success:function(data)
                               {
                                    $($('#komponen1')).hide();
                                    $($('#komponen')).hide();
                                    jQuery.each(data, function(key,value){
                                        console.log(value);
                                        if (value == "1")
                                        {
                                            $($('#komponen')).show();
                                        }
                                        else
                                        {
                                            $($('#komponen')).hide();

                                        }
                                        if (value == "2")
                                        {
                                            $($('#komponen1')).show();
                                        }
                                        else
                                        {
                                            $($('#komponen1')).hide();

                                        }
                                    });
                               }
                           });
                       }
                       else
                       {
                            $($('#komponen1')).hide();
                            $($('#komponen')).hide();

                       }
                   });
    });
  </script>
<script src="{{route('/')}}/assets/js/select2/select2.full.min.js"></script>
<script src="{{route('/')}}/assets/js/select2/select2-custom.js"></script>
@endsection