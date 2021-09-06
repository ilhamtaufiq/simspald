@extends($layout)
@section('title', 'Tambah Pengelola')

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
                  <h5 class="text-white">Tambah Pengelola SPALD Terbangun</h5>
               </div>
               <form action="{{route('pengelola.store')}}" method="POST">
                @csrf
               <div class="card-body">
                  <div class="mb-2">
                     <div class="col-form-label">SPALD</div>
                     <select name="id_spald" class="js-example-basic-single col-sm-12" placeholder="">
                        <option value="">Pilih SPALD</option>
                        @foreach($spald as $s)
                        {{-- @if (is_null($s->id_pengelola)) --}}
                        @if (is_null($s->ksm))
                        <option value="{{$s->id_spald}}">{{$s->kegiatan->kegiatan}} {{$s->rincianKegiatan->rincian_kegiatan}} {{$s->desa->n_desa}} {{$s->kec->n_kec}}</option>
                         @endif 
                        @endforeach
                      </select>
                      <div class="text-danger">
                         @error('id_spald')
                             {{$message}}
                         @enderror
                      </div>
                  </div>

                    <div class="mb-2">
                        <div class="col-form-label">Nama KSM</div>
                        <input type="text" name="nama_ksm" class="form-control" placeholder="Nama KSM">
                    </div>
                    <div class="mb-2">
                        <div class="col-form-label">
                            <input type="text" name="nama_ketua" class="form-control" placeholder="Nama Ketua KSM">
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="col-form-label">
                            <input type="text" name="nik_ketua" class="form-control" placeholder="NIK Ketua KSM">
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="col-form-label">
                            <input type="text" name="npwp" class="form-control" placeholder="NPWP KSM">
                        </div>
                    </div>
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
<script src="{{route('/')}}/assets/js/select2/select2.full.min.js"></script>
<script src="{{route('/')}}/assets/js/select2/select2-custom.js"></script>
@endsection