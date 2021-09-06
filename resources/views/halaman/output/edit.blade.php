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
               <form class="form theme-form" action="{{ route('output.update', $output->id) }}" method="POST">
                @csrf
                @method('PUT')

               <div class="card-body">
                    
                <div class="mb-2">
                    <div class="col-form-label">Unit SPALD</div>
                    <select id="id_spald" name="id_spald" class="js-example-basic-single col-sm-12" placeholder="SPALD">
                        <option value="{{$output->id_spald}}">{{$output->ipald->nama_ksm}}</option>
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
                 {{-- <div class="mb-2">
                    <div class="col-form-label">Kuantitas</div>
                    <input value="{{$output->kuantitas}}" name="kuantitas" class="form-control" type="number">
                </div> --}}
                {{-- <div class="mb-2">
                    <div class="col-form-label">Komponen</div>
                    <input value="{{$output->komponen}}" name="komponen" class="form-control" type="text" >
                </div> --}}
                <table class="table table-bordered table-striped">
                  <thead>
                  <tr>
                      <th width="35%">Ipal</th>
                      <th width="35%">Sambungan Rumah</th>
                      <th width="35%">Tangki Septik</th>
                  </tr>
                  </thead>
                  <tbody>
                      <td><input type="number" value="{{$output->ipal}}" name="ipal" class="form-control"/></td>
                      <td><input type="number" value="{{$output->sr}}" name="sr" class="form-control"/></td>
                      <td><input type="number" value="{{$output->tangki_septik}}" name="tangki_septik" class="form-control"/></td>
                  </tbody>
              </table>
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
@endsection