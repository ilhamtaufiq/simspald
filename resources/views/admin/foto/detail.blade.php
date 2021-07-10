@extends('layouts.dark')
@section('content')
<div class="col-md-12">
    <div class="card card-outline card-primary">
      <div class="card-header">
        <h3 class="card-title">Data Foto {{$nama->nama_ksm}}</h3>
        <div class="card-tools">
          <a href="/foto/add" type="button" class="btn btn-sm btn-primary btn-flat">
            <i class="fas fa-plus"></i>
            Tambah
          </a>
        </div>
      </div>
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th width=20px>No</th>
                    <th>Deskripsi</th>
                    <th>Foto</th>
                    <th width=100px class="text-center">Opsi</th>
                </tr>
                <tbody>
                    <?php $no=1; ?>
                    @foreach ($ksm as $d)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{$d->deskripsi}}</td>
                        <td><img src="{{asset('foto')}}/{{$d->foto}}" width="70px"></td>

                        <td class="text-center">
                            <a href="/foto/edit/{{$d->id_foto}}"><i class="fa fa-edit"></i></a>
                            <button class="btn btn-sm btn-primary" href="/foto/delete/{{$d->id_foto}}" data-toggle="modal" data-target="#delete{{$d->id_foto}}"><i class="fa fa-trash "></i></button>
                        </td>
                    </tr>    
                    @endforeach
                </tbody>
            </thead>
        </table>
      </div>
    </div>
</div>
<div class="col-md-12" id="map" style="width: 100%; height: 400px;"></div>

@foreach ($ksm as $d)
<div class="modal fade" id="delete{{$d->id_foto}}">
  <div class="modal-dialog">
    <div class="modal-content bg-danger">
      <div class="modal-header">
        <h4 class="modal-title">Foto {{$d->nama_ksm}}</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Apakah Anda yakin ingin menghapus data ini?</p>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Tidak</button>
        <a href="/foto/delete/{{$d->id_foto}}" type="button" class="btn btn-outline-light">Ya</a>
      </div>
    </div>
  </div>
</div>
@endforeach
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
</script>
@endsection