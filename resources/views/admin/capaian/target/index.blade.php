@extends('layouts.master')
@section('content')
<div class="col-md-12">
    <div class="card card-outline card-primary">
      <div class="card-header">
        <h3 class="card-title">Target Capaian</h3>
        <div class="card-tools">
          <a href="/target/add" type="button" class="btn btn-sm btn-primary btn-flat">
            <i class="fas fa-plus"></i>
            Tambah
          </a>
        </div>
      </div>
      <div class="card-body">
        @if (session('pesan'))
        <div class="alert alert-success alert-dimissable ">
            <button type="button" class="close" data-dimiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i>{{ session('pesan') }}</h5>
        </div>
        @endif
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th width=60px>No</th>
                    <th>Desa</th>
                    <th>Kecamatan</th>
                    <th>Total Rumah</th>
                    <th width=100px class="text-center">Opsi</th>
                </tr>
                <tbody>
                    <?php $no=1; ?>
                    @foreach ($target as $d)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $d->n_desa }}</td>
                        <td>{{$d->n_kec}}</td>
                        <td>{{$d->total_rumah}}</td>
                        <td class="text-center">
                            <a href="/target/edit/{{$d->id_capaian}}"><i class="fa fa-edit"></i></a>
                            <button class="btn btn-sm btn-primary" href="/tarfet/delete/{{$d->id_capaian}}" data-toggle="modal" data-target="#delete{{$d->id_capaian}}"><i class="fa fa-trash "></i></button>
                        </td>
                    </tr>    
                    @endforeach
                </tbody>
            </thead>
        </table>
      </div>
    </div>
</div>
@foreach ($target as $d)
<div class="modal fade" id="delete{{$d->id_capaian}}">
  <div class="modal-dialog">
    <div class="modal-content bg-danger">
      <div class="modal-header">
        <h4 class="modal-title">Hapus Target Capaian Desa {{$d->n_desa}} Kecamatan {{$d->n_kec}}</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Apakah Anda yakin ingin menghapus data ini?</p>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Tidak</button>
        <a href="/target/delete/{{$d->id_capaian}}" type="button" class="btn btn-outline-light">Ya</a>
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