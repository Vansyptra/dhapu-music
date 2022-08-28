<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembelian;
use App\Models\Barang;
use App\Models\Merek;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nomor = 1;
        $pembelian = Pembelian::all();
        return view('page.pembelian.index', compact('pembelian','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = Barang::all();
        return view('page.pembelian.form', compact('barang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pembelian = new Pembelian;

        $pembelian->tanggal = $request->tanggal;
        $pembelian->barangs_id = $request->id_barang;
        $pembelian->qty = $request->qty;
        $pembelian->total_harga = $request->total_harga;
        $pembelian->save();

        return redirect('/pembelian/stock/'.$pembelian->id);
    }

    public function stock(Request $request, $id)
    {
        $pembelian = Pembelian::find($id);
        $pembelian1 = $pembelian->barangs_id;
        $barang = Barang::where('id', $pembelian1)->first();
        $barang->jumlah = $barang->jumlah+$pembelian->qty;
        $barang->update();

        return redirect('/pembelian');
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
        $pembelian = Pembelian::find($id);
        $barang = Barang::all();

        return view('page.pembelian.edit', compact('pembelian','barang'));
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
        $pembelian = Pembelian::find($id);

        $pembelian1 = $pembelian->barangs_id;
        $barang = Barang::where('id', $pembelian1)->first();
        $barang->jumlah = $barang->jumlah+$pembelian->qty;
        $barang->update();

        $pembelian->tanggal = $request->tanggal;
        $pembelian->barangs_id = $request->id_barang;
        $pembelian->qty = $request->qty;
        $pembelian->total_harga = $request->total_harga;
        $pembelian->save();

        return redirect('/pembelian/stock1/'.$pembelian->id);
    }

    public function stock1(Request $request, $id)
    {
        $pembelian = Pembelian::find($id);
        $pembelian1 = $pembelian->barangs_id;
        $barang = Barang::where('id', $pembelian1)->first();
        $barang->jumlah = $barang->jumlah-$pembelian->qty;
        $barang->update();
        return redirect('/pembelian');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pembelian = Pembelian::find($id);
        
        $pembelian->delete();

        return redirect('/pembelian');
    }

    public function cetak()
    {
        $nomor = 1;
        $pembelian = Pembelian::all();
        return view('page.pembelian.laporan', compact('pembelian','nomor'));
    }

    public function cetak_tanggal($tglawal, $tglakhir)
    {
        // dd(["tanggal awal : ".$tglawal, "tglakhir : ".$tglakhir]);
        $pembelian = Pembelian::all()->whereBetween('tanggal',[$tglawal, $tglakhir]);
        return view('page.pembelian.cetak', compact('pembelian'));
    }
}
