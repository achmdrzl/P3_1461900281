<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataPelanggan = DB::table("transaksi")
        ->join ("pelanggan", "transaksi.id_pelanggan", "=", "pelanggan.id")
        ->join ("barang", "transaksi.id_barang", "=", "barang.id")
        ->select("transaksi.id as no", "pelanggan.nama as nama", "pelanggan.alamat as alamat", "barang.nama as barang", "barang.harga as harga")
        ->get();
        return view('home0281' , ['data' => $dataPelanggan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah0281');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('pelanggan')-> insert([
            'nama' =>$request ->nama,
            'alamat' =>$request ->alamat
        ]);
        DB::table('barang')-> insert([
            'barang' =>$request ->barang,
            'harga' =>$request ->harga
        ]);

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
	        $dataPelanggan = DB::table('pelanggan')->where('id',$id)->get();
            $dataPelanggan = DB::table('barang')->where('id',$id)->get();
	    // passing data pelanggan & barang yang didapat ke view edit.blade.php
	        return view('edit',['data' => $dataPelanggan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('pelanggan')->where('id',$request->id)->update([
                'nama' =>$request ->nama,
                'alamat' =>$request ->alamat
            ]);
        DB::table('barang')->where('id',$request->id)->update([
                'barang' =>$request ->barang,
                'harga' =>$request ->harga
            ]);
        
        return redirect('/home');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        	// menghapus data home berdasarkan id yang dipilih
	        DB::table('pelanggan')->where('id',$id)->delete();
            DB::table('barang')->where('id',$id)->delete();
		
	        // alihkan halaman ke halaman home
	        return redirect('/home');
    }
}
