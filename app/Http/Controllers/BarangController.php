<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use Yajra\DataTables\DataTables;


class BarangController extends Controller
{
    public function index(){
        return view('formBarang');
    }

    public function viewBarang(){
        return view('viewBarang');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'kode_barang' =>'required',
            'nama_barang' => 'required',
            'satuan'=> 'required',
            'harga_satuan'=> 'required',
            'stok'=> 'required',
            'kode_tenan'=> 'required',
        ]);
        $barang = Barang::create([
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $validatedData['nama_barang'],
            'satuan' => $validatedData['satuan'],
            'harga_satuan' => $validatedData['harga_satuan'],
            'stok' => $validatedData['stok'],
            'kode_tenan' => $validatedData['kode_tenan'],
        ]);
        return redirect()->route('formBarang')->with('status', 'data telah berhasil disimpan di database');
    }

    public function getDataBarang(){
        $dataBarang = Barang::all();
        return DataTables::of($dataBarang)
        ->addColumn('action', function ($barang) {
            // Tambahkan tombol aksi sesuai kebutuhan Anda
            return '<a href="" class="btn btn-success">Edit</a><a class="hapusData btn btn-danger" data-id="" data-url="">Hapus</a>';
        })
        ->make(true);
    }
}
