<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi_Detail;
use DB;

class DetailTransaksiController extends Controller
{
    public function index($id)
    {
        $detail = DB::table('tbl_transaksi_detail')
        ->join('tbl_barang','tbl_barang.id_barang', '=', 'tbl_transaksi_detail.id_barang')
        ->where('id_transaksi',$id)
        ->get();

        return view('detail.index',compact(['detail']));
    }


}
