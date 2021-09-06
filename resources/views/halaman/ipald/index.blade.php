@extends($layout)
@section('title', $title)

@section('css')
<link rel="stylesheet" type="text/css" href="{{route('/')}}/assets/css/datatables.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/prism.css')}}">

@endsection

@section('style')
@endsection

@section('breadcrumb-title')
	<h2>Data <span>{{$title}}  </span></h2> <br>
   <button onclick="location.href='{{route('spald.create')}}'" class="btn btn-pill btn-primary btn-air-primary" type="submit" title="">Tambah</button>
   @endsection

@section('breadcrumb-items')
	<li class="breadcrumb-item">SPALD</li>
    <li class="breadcrumb-item active">{{$title}}</li>
@endsection

@section('content')
<div class="container-fluid">
   <div class="row">
      <!-- Zero Configuration  Starts-->
      <div class="col-sm-12">
         <div class="card card-absolute">
            <div class="card-header bg-primary">
               <h5 class="text-white">Daftar SPALD Terbangun</h5>
            </div>
            <div class="card-body">
               <div class="dt-ext table-responsive">
                  <table class="display" id="export-button">
                     <thead>
                        <tr>
                           <th>No</th>
                           <th>Rincian Kegiatan</th>
                           <th>Pagu</th>
                           <th>Sumber Dana</th>
                           <th>Tahun Anggaran</th>
                           <th class="noExport">Opsi</th>
                        </tr>
                     </thead>
                     <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($data as $item)
                        <tr>
                           <td>{{$i++}}</td>
                           <td>{{$item->rincianKegiatan->rincian_kegiatan}} {{$item->desa->n_desa}} {{$item->kec->n_kec}}</td>
                           <td>{{$item->pagu}}</td>
                           <td>{{$item->sumber_dana}}</td>
                           <td>{{$item->tahun_anggaran}}</td>
                           <td>
                                 <a href="{{ route('spald.edit', $item->id_spald) }}">
                                 <button class="btn btn-primary" type="button">
                                    <i class="icon-settings"></i>         
                                 </button>
                                 </a>
                                 <button class="btn btn-primary" type="button" data-toggle="modal" data-original-title="test" data-target="#exampleModal{{$item->id_spald}}"><i class="icon-trash"></i></button>
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
      @foreach ($data as $d)
      <div class="modal fade" id="exampleModal{{$d->id_spald}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                 <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                 </div>
                 <div class="modal-body">Apakah Anda yakin akan menghapus data {{$d->rincianKegiatan->rincian_kegiatan}} {{$d->desa->n_desa}} {{$d->kec->n_kec}}?</div>
                 <div class="modal-footer">
                    <button class="btn btn-primary" type="button" data-dismiss="modal">Batal</button>
                    <form action="{{ route('spald.destroy', $d->id_spald)}}" method="post">
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