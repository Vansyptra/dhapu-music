<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;
use App\Models\Barang;
use App\Models\Anggota;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nomor = 1;
        $penjualan = Penjualan::all();
        $barang = Barang::all();
        return view('page.penjualan.index', compact('penjualan','nomor','barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = Barang::all();
        $anggota = Anggota::all();
        return view('page.penjualan.form', compact('barang','anggota'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $penjualan = new Penjualan;

        
        $penjualan->tanggal = $request->tanggal;
        $penjualan->anggotas_id = $request->anggota;
        $penjualan->barangs_id = $request->barang;
        $penjualan->qty = $request->qty;
        $penjualan->save();
        
        // dd($penjualan);
        // $penjualans = Penjualan::find();
        return redirect('/penjualan/stock/'.$penjualan->id);
    }
    
    public function stock(Request $request, $id)
    {
        $penjualan = Penjualan::find($id);
        // dd($penjualan->qty);
        $penjualan1 = $penjualan->barangs_id;
        $barang = Barang::where('id', $penjualan1)->first();
        $barang->jumlah = $barang->jumlah-$penjualan->qty;
        $barang->update();
        return redirect('/penjualan');
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
        $penjualan = Penjualan::find($id);
        $barang = Barang::all();
        $anggota = Anggota::all();

        return view('page.penjualan.edit', compact('penjualan','barang','anggota'));
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
        $penjualan = Penjualan::find($id);
        
        $penjualan1 = $penjualan->barangs_id;
        $barang = Barang::where('id', $penjualan1)->first();
        $barang->jumlah = $barang->jumlah+$penjualan->qty;
        $barang->update();

        $penjualan->tanggal = $request->tanggal;
        $penjualan->anggotas_id = $request->anggota;
        $penjualan->barangs_id = $request->barang;
        $penjualan->qty = $request->qty;
        $penjualan->save();

        return redirect('/penjualan/stock1/'.$penjualan->id);
    }
    
    public function stock1(Request $request, $id)
    {
        $penjualan = Penjualan::find($id);
        // dd($penjualan->qty);
        $penjualan1 = $penjualan->barangs_id;
        $barang = Barang::where('id', $penjualan1)->first();
        $barang->jumlah = $barang->jumlah-$penjualan->qty;
        $barang->update();
        return redirect('/penjualan');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penjualan = Penjualan::find($id);
        
        $penjualan->delete();

        return redirect('/penjualan');
    }

    public function cetak()
    {
        $nomor = 1;
        $penjualan = Penjualan::all();
        return view('page.penjualan.laporan', compact('penjualan','nomor'));
    }

    public function cetak_tanggal($tglawal, $tglakhir)
    {
        // dd(["tanggal awal : ".$tglawal, "tglakhir : ".$tglakhir]);
        $penjualan = Penjualan::all()->whereBetween('tanggal',[$tglawal, $tglakhir]);
        return view('page.penjualan.cetak', compact('penjualan'));
    }
}
