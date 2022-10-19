@extends('layout.master')

@section('content')
<div class="card-header">
    <h3 class="card-title">Data Transaksi</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <a href="/transaksi/create"><button class="btn btn-primary btn-sm"><i class="fa fa-user-plus"> Tambah Data</i></button></a> 
    <hr>
   <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr >
        <th>Id Transaksi</th>
        <th>Id Admin</th>
        <th>Tanggal Transaksi</th>
        <th>No Nota</th>
        <th>Status</th>
        <th colspan="2">Aksi</th>
    </tr >
  </thead>
  <tbody>
    @foreach ($transaksi as $row)
    <tr >
        <td>{{ $row->id_transaksi }}</td>
        <td>{{ $row->id_admin }}</td>
        <td>{{ $row->transaksi_tanggal }}</td>
        <td>{{ $row->transaksi_nonota }}</td>
        <td>{{ $row->transaksi_status }}</td>
        <td>
            <a href="detail/{{ $row->id_transaksi }}"><button class="btn btn-dark btn-sm"><i class="fa fa-feather"> Detail</i></button></a>  
            <a href="transaksi/edit/{{ $row->id }}"><button class="btn btn-warning btn-sm"><i class="fa fa-pen"></i></button></a>  
            <a href="transaksi/destroy/{{ $row->id }}"><button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></a> 
          </td>
    </tr>
    @endforeach
      </tbody>
    </table>
  </div> 
  @endsection