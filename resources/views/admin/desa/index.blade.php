@extends('layouts.dark')
@section('content')
<div class="col-md-12">
    <div class="card card-outline card-primary">
      <div class="card-header">
        <h3 class="card-title">Daftar Desa</h3>
        <div class="card-tools">
          <a href="/desa/add" type="button" class="btn btn-sm btn-primary btn-flat">
            <i class="fas fa-plus"></i>
            Tambah
          </a>
        </div>
      </div>
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th width=60px>No</th>
                    <th>Desa</th>
                    <th>Luas Wilayah</th>
                    <th>Jumlah Penduduk</th>
                    <th>Kepadatan Penduduk</th>
                    <th width=100px class="text-center">Opsi</th>
                </tr>
                <tbody>
                    <?php $no=1; ?>
                    @foreach ($desa as $d)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $d->n_desa }}</td>
                        <td>{{$d->luas}}</td>
                        <td>{{$d->jumlah_penduduk}}</td>
                        <td>{{number_format($d->jumlah_penduduk/$d->luas,2)}}"</td>
                        <td class="text-center">
                            <a href="/desa/edit/{{$d->id_desa}}"><i class="fa fa-edit"></i></a>
                            <button class="btn btn-sm btn-primary" href="/desa/delete/{{$d->id_desa}}" data-toggle="modal" data-target="#delete{{$d->id_desa}}"><i class="fa fa-trash "></i></button>
                        </td>
                    </tr>    
                    @endforeach
                </tbody>
            </thead>
        </table>
      </div>
    </div>
</div>
@foreach ($desa as $d)
<div class="modal fade" id="delete{{$d->id_desa}}">
  <div class="modal-dialog">
    <div class="modal-content bg-danger">
      <div class="modal-header">
        <h4 class="modal-title">{{$d->n_desa}}</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Apakah Anda yakin ingin menghapus data ini?</p>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Tidak</button>
        <a href="/desa/delete/{{$d->id_desa}}" type="button" class="btn btn-outline-light">Ya</a>
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