<?php

namespace App\Http\Controllers;
use App\Models\Transaksi;
use App\Models\Transaksi_detail;
use App\Models\Barang;
use DB;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksi = DB::table('tbl_transaksi')->get();
        return view('transaksi.index',compact(['transaksi']));
    }

    public function create()
    {
        $barang = DB::table('tbl_barang')->get();
        return view('transaksi.create',compact(['barang']));
    }

    public function store(Request $request)
    {
        $store = Transaksi::create([

            'id_admin' => $request->id_admin,
            'transaksi_tanggal' => $request->transaksi_tanggal,
            'transaksi_nonota' => $request->transaksi_nonota,
            'transaksi_status' => $request->transaksi_status,
        ]);
        echo $store->id_transaksi;

        $store = Transaksi_Detail::create([

            'id_transaksi' => $store->id_transaksi,
            'id_barang' => $request->id_barang,
            'transaksi_jenis' => $request->transaksi_jenis,
            'transaksi_harga' => $request->transaksi_harga,
            'transaksi_jumlah' => $request->transaksi_jumlah,
            'transaksi_detail_status' => $request->transaksi_detail_status,
        ]);
        echo $store->id_transaksi_detail;

        return redirect('/transaksi');
    }

    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        $transaksi = Transaksi::find($id);
        return view('transaksi.edit',compact(['transaksi']));
    }
  
    public function update($id, Request $request)
    {
        $transaksi = Transaksi::find($id);
        $transaksi->update($request->except(['_token','submit']));
        return redirect('/transaksi');
    }

    public function destroy($id)
    {
        $destroy = Transaksi::find($id);
        $destroy->delete();
        return redirect('/transaksi');
    }

}
