@extends('layouts.dark')
@section('content')
<div class="col-md-12">
    <div class="card card-outline card-primary">
      <div class="card-header">
        <h3 class="card-title">Data Rumah</h3>
        <div class="card-tools">
          <a href="/rumah/add" type="button" class="btn btn-sm btn-primary btn-flat">
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
                    <th>Kecamatan</th>
                    <th>RT/RW</th>
                    <th>Kepala Keluarga</th>
                    @role('Master')
                    <th>NIK Kepala Keluarga</th>
                    @else
                    <th>NIK Kepala Keluarga</th>
                    @endrole
                    <th width=100px class="text-center">Opsi</th>
                </tr>
                <tbody>
                    <?php $no=1; ?>
                    @foreach ($rumah as $key=>$value)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $value->n_desa }}</td>
                        <td>{{$value->n_kec}}</td>
                        <td>{{$value->rt}}/{{$value->rw}}</td>
                        <td>{{($value->n_kk)}}</td>
                        @role('Master')
                        <td>{{decrypt($value->n_nik)}}</td>
                        @else
                        <td>@php
                              $phone = decrypt($value->n_nik);
                              $result = substr($phone, 0, 2);
                              $result .= '******';
                              $result .= substr($phone, -2);
                              echo $result;                       
                        @endphp</td>
                        @endrole
                        <td class="text-center">
                            <a href="/rumah/edit/{{$value->id_rumah}}"><i class="fa fa-edit"></i></a>
                            <button class="btn btn-sm btn-primary" href="/rumah/delete/{{$value->id_rumah}}" data-toggle="modal" data-target="#delete{{$value->id_rumah}}"><i class="fa fa-trash "></i></button>
                        </td>
                    </tr>    
                    @endforeach
                </tbody>
            </thead>
        </table>
      </div>
    </div>
</div>
@foreach ($rumah as $d)
<div class="modal fade" id="delete{{$d->id_rumah}}">
  <div class="modal-dialog">
    <div class="modal-content bg-danger">
      <div class="modal-header">
        <h4 class="modal-title">{{$d->n_kk}}</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Apakah Anda yakin ingin menghapus data ini?</p>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Tidak</button>
        <a href="/rumah/delete/{{$d->id_rumah}}" type="button" class="btn btn-outline-light">Ya</a>
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