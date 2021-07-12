@extends('layouts.dark')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Manajemen Users</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('users.create') }}">Tambah</a>
        </div>
    </div>
</div>
<table class="table table-bordered">
 <tr>
   <th>No</th>
   <th>Nama</th>
   <th>Email</th>
   <th>Roles</th>
   <th width="280px">Opsi</th>
 </tr>

 @foreach ($data as $key => $user)
  <tr>
    <td>{{ ++$i }}</td>
    <td style="text-align: center;"><img src="{{$user->foto}}" style="border-radius: 50%; height: auto; width: 30%" alt="User Image"><br/>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>
      @if(!empty($user->getRoleNames()))
        @foreach($user->getRoleNames() as $v)
           <label class="badge badge-success">{{ $v }}</label>
        @endforeach
      @endif
    </td>
    <td>
       <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
       <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </td>
  </tr>
 @endforeach
</table>
{!! $data->render() !!}
@endsection