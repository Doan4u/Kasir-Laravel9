@extends('layout.master')

@section('content')
<div class="card-header">
    <h3 class="card-title">Transaksi Detail</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
   <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr >
        <th>Id Transaksi Detail</th>
        <th>Id Barang</th>
        <th>Jenis</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr >
</thead>
<tbody>
    @foreach ($detail as $row)
    <tr >
        <td>{{ $row->id_transaksi_detail }}</td>
        <td>{{ $row->barang_nama }}</td>
        <td>{{ $row->transaksi_jenis }}</td>
        <td>{{ $row->transaksi_harga }}</td>
        <td>{{ $row->transaksi_jumlah }}</td>
        <td>{{ $row->transaksi_detail_status }}</td>
        <td>    
            <a href="detail/destroy/{{ $row->id }}"><button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></a> 
        </td>
    </tr>
    @endforeach
      </tbody>
    </table>
  </div> 
  @endsection