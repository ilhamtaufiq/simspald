@extends($layout)
@section('title', $title)

@section('css')
<link rel="stylesheet" type="text/css" href="{{route('/')}}/assets/css/datatables.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/prism.css')}}">

@endsection

@section('style')
@endsection

@section('breadcrumb-title')
	<h2>Data Pengelola <span>{{$title}}  </span></h2>
   <button onclick="location.href='{{route('pengelola.create')}}'" class="btn btn-pill btn-primary btn-air-primary" type="submit" title="">Tambah</button>

@endsection

@section('breadcrumb-items')
	<li class="breadcrumb-item">Data Pengelola</li>
    <li class="breadcrumb-item active">{{$title}}</li>
@endsection

@section('content')
<div class="container-fluid">
   <div class="row">
      <!-- Zero Configuration  Starts-->
      <div class="col-sm-12">
         <div class="card card-absolute">
            <div class="card-header bg-primary">
               <h5 class="text-white">KPP</h5>
            </div>
            <div class="card-body">
               <div class="dt-ext table-responsive">
                  <table class="display" id="export-button">
                     <thead>
                        <tr>
                           <th>No</th>
                           <th>Nama KSM</th>
                           {{-- <th>Nama Ketua</th> --}}
                           <th>Rincian Kegiatan</th>
                           <th>Tahun Pembangunan</th>
                           <th class="noExport">Opsi</th>
                        </tr>
                     </thead>
                     <tbody>
                         @php
                             $i = 1;
                         @endphp
                         @foreach ($pengelola as $item)
                         <tr>
                             <td>{{$i++}}</td>
                            <td>{{$item->nama_ksm}}</td>
                            {{-- <td>{{$item->nama_ketua}}</td> --}}
                            <td>{{$item->ipald->rincian_kegiatan}} {{$item->ipald->n_desa}} {{$item->ipald->n_kec}}</td>
                            <td>{{$item->ipald->tahun_anggaran}}</td>
                            <td>
                                 <a href="{{ route('pengelola.edit', $item->id) }}">
                                     <button class="btn btn-primary" type="button">
                                        <i class="icon-settings"></i>       
                                     </button>
                                 </a>
                                 <button class="btn btn-primary" type="button" data-toggle="modal" data-original-title="test" data-target="#exampleModal{{$item->id}}"><i class="icon-trash"></i></button>
                            </td>
                         </tr>
                         @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
      <!-- Zero Configuration  Ends-->
      @foreach ($pengelola as $d)
      <div class="modal fade" id="exampleModal{{$d->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                 <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                 </div>
                 <div class="modal-body">Apakah Anda yakin akan menghapus data Pengelola {{$d->nama_ksm}}?</div>
                 <div class="modal-footer">
                    <button class="btn btn-primary" type="button" data-dismiss="modal">Batal</button>
                    <form action="{{ route('pengelola.destroy', $d->id)}}" method="post">
                     @method('DELETE')
                     @csrf
                     <input class="btn btn-danger" type="submit" value="Hapus" />
                  </form>            
                 </div>
              </div>
           </div>
        </div>
      @endforeach
   </div>
</div>
@endsection

@section('script')
<script src="{{route('/')}}/assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/dataTables.buttons.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/jszip.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/buttons.colVis.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/pdfmake.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/vfs_fonts.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/dataTables.autoFill.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/dataTables.select.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/buttons.bootstrap4.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/buttons.html5.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/buttons.print.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/dataTables.bootstrap4.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/dataTables.responsive.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/responsive.bootstrap4.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/dataTables.keyTable.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/dataTables.colReorder.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/dataTables.fixedHeader.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/dataTables.rowReorder.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/dataTables.scroller.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/custom.js"></script>
<script src="{{asset('assets/js/prism/prism.min.js')}}"></script>
<script src="{{asset('assets/js/clipboard/clipboard.min.js')}}"></script>
<script src="{{asset('assets/js/custom-card/custom-card.js')}}"></script>
@endsection