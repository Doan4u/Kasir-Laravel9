@extends('layout.master')

@section('content')
<div class="card-header">
    <h3 class="card-title">Data Barang</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <a href="/barang/create"><button class="btn btn-primary btn-sm"><i class="fa fa-user-plus"> Tambah Data</i></button></a> 
    <hr>
    <table id="example1" class="table table-bordered table-striped">
      <thead>
    <tr >
        <th>Id Barang</th>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Id Jenis</th>
        <th>Id Supplier</th>
        <th>Harga Jual</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr >
</thead>
<tbody>
    @foreach ($barang as $row)
    <tr >
        <td>{{ $row->id_barang }}</td>
        <td>{{ $row->barang_kode }}</td>
        <td>{{ $row->barang_nama }}</td>
        <td>{{ $row->jenis_nama }}</td>
        <td>{{ $row->supplier_nama }}</td>
        <td>{{ $row->harga_jual }}</td>
        <td>{{ $row->barang_status }}</td>
        <td>
            <a href="barang/edit/{{ $row->id }}"><button class="btn btn-warning btn-sm"><i class="fa fa-pen"></i></button></a> 
            <a href="barang/destroy/{{ $row->id }}"><button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></a> 
          </td>  
    </tr>
    @endforeach
    </tbody>
    </table>
  </div> 
  @endsection