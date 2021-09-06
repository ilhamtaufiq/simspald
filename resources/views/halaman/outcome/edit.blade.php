@extends($layout)
@section('title', 'Tambah Outcome')

@section('css')
<link rel="stylesheet" type="text/css" href="{{route('/')}}/assets/css/select2.css">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
	<h2>{{$title}}</h2>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Data Outcome</li>	
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
                  <h5 class="text-white">Tambah Outcome</h5>
               </div>
               <form class="form theme-form" action="{{ route('outcome.update', $outcome->id) }}" method="POST">
                @csrf
                @method('PUT')

               <div class="card-body">
                    
                <div class="mb-2">
                    <div class="col-form-label">Unit SPALD</div>
                    <select id="id_spald" name="id_spald" class="js-example-basic-single col-sm-12" placeholder="SPALD">
                        <option value="{{$outcome->id_spald}}">{{$outcome->ipald->nama_ksm}}</option>
                        @foreach ($pengelola as $item)
                            <option value="{{$item->id_spald}}">{{$item->ipald->nama_ksm}}</option>
                        @endforeach
                    </select>  
                    <div class="text-danger">
                     @error('id_spald')
                         {{ $message }}
                     @enderror
                 </div> 
                 </div>
                 <div class="mb-2">
                    <div class="col-form-label">Kuantitas</div>
                    <input value="{{$outcome->kuantitas}}" name="kuantitas" class="form-control" type="number">
                </div>
                <div class="mb-2">
                    <div class="col-form-label">Satuan</div>
                    <input value="{{$outcome->satuan}}" name="satuan" class="form-control" type="text" >
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