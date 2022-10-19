@extends('layout.master')
@section('content')

<div class="card card-navy">
<div class="card-header">
<h3 class="card-title">Tambah Data Transaksi</h3>
</div>

<form method="POST" action="/transaksi/store">
	 @csrf
<div class="card-body">
<div class="form-group">
	<label for="">Id Admin</label>
	<input type="text" name="id_admin" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">Tanggal Transaksi</label>
	<input type="date" name="transaksi_tanggal" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">No Nota</label>
	<input type="text" name="transaksi_nonota" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">Transaksi Status</label>
	<input type="text" name="transaksi_status" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">Id Barang</label>
	<select name="id_barang" class="form-control">
		<option>Silahkan Di Pilih</option>
		@foreach ($barang as $row)
		<option value="{{ $row->id_barang }}">{{ $row->barang_nama }}</option>
		@endforeach
	</select>
</div>
<div class="form-group">
	<label for="">Jenis</label>
	<input type="text" name="transaksi_jenis" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">Harga</label>
	<input type="text" name="transaksi_harga" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">Jumlah</label>
	<input type="text" name="transaksi_jumlah" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">Detail Status</label>
	<input type="text" name="transaksi_detail_status" class="form-control" id="" placeholder="">
</div>
<div class="card-footer">
<input type="submit" class="btn btn-success" value="Simpan"></input>
</div>
</form>
</div>
</div>

@endsection