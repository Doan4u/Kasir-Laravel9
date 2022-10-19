@extends('layout.master')

@section('content')
<div class="card-header">
    <h3 class="card-title">Data Transaksi</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <a href="/supplier/create"><button class="btn btn-primary btn-sm"><i class="fa fa-user-plus"> Tambah Data</i></button></a> 
    <hr>
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr >
        <th>Id Supplier</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Phone</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr >
</thead>
<tbody>
    @foreach ($supplier as $row)
    <tr >
        <td>{{ $row->id_supplier }}</td>
        <td>{{ $row->supplier_nama }}</td>
        <td>{{ $row->supplier_alamat }}</td>
        <td>{{ $row->supplier_phone }}</td>
        <td>{{ $row->supplier_status }}</td>
        <td>
            <a href="supplier/edit/{{ $row->id }}"><button class="btn btn-warning btn-sm"><i class="fa fa-pen"></i></button></a> 
            <a href="supplier/destroy/{{ $row->id }}"><button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></a> 
        </td>
    </tr>
    @endforeach
      </tbody>
    </table>
  </div> 
  @endsection