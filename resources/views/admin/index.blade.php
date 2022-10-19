@extends('layout.master')

@section('content')
<div class="card-header">
    <h3 class="card-title">Data Admin</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <a href="/admin/create"><button class="btn btn-primary btn-sm"><i class="fa fa-user-plus"> Tambah Data</i></button></a> 
    <hr>
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr >
        <th>Id Admin</th>
        <th>Username</th>
        <th>Paasword</th>
        <th>Level</th>
        <th>Nama</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
   @foreach ($admin as $row)
    <tr>
        <td>{{ $row->id_admin }}</td>
        <td>{{ $row->username }}</td>
        <td>{{ $row->password }}</td>
        <td>{{ $row->admin_level }}</td>
        <td>{{ $row->admin_nama }}</td>
        <td>{{ $row->admin_status }}</td>
        <td>
            <a href="admin/edit/{{ $row->id }}"><button class="btn btn-warning btn-sm"><i class="fa fa-pen"></i></button></a> 
            <a href="admin/destroy/{{ $row->id }}"><button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></a> 
          </td>
    </tr>
    @endforeach
    </tbody>
    </table>
  </div> 
  @endsection
