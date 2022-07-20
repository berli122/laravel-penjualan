<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan semua data dari model Siswa
        $barang = Barang::all();
        return view('barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $validated = $request->validate([
            'nama_pembeli' => 'required',
            'tgl_pembelian' => 'required',
            'nama_barang' => 'required',
            'harga_satuan' => 'required',
            'tgl_lahir' => 'required',
            'harga_satuan' => 'required',
        ]);

        $barang = new Barang();
        $barang->nama_pembeli = $request->nama_pembeli;
        $barang->tanggal_pembelian = $request->tanggal_pembelian;
        $barang->jenis_kelamin = $request->jenis_kelamin;
        $barang->harga_satuan = $request->harga_satuan;
        $barang->tgl_lahir = $request->tgl_lahir;
        $barang->harga_satuan = $request->harga_satuan;
        $barang->save();
        return redirect()->route('barang.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Barang::findOrFail($id);
        return view('barang.show', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.edit', compact('barang'));

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
        // Validasi
        $validated = $request->validate([
            'nama_pembeli' => 'required',
            'nis' => 'required|max:255',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'tgl_lahir' => 'required',
            'harga_satuan' => 'required',
        ]);

        $barang = Barang::findOrFail($id);
        $barang->nama_pembeli = $request->nama_pembeli;
        $barang->nis = $request->nis;
        $barang->jenis_kelamin = $request->jenis_kelamin;
        $barang->agama = $request->agama;
        $barang->tgl_lahir = $request->tgl_lahir;
        $barang->harga_satuan = $request->harga_satuan;
        $barang->save();
        return redirect()->route('barang.index')
            ->with('success', 'Data berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();
        return redirect()->route('barang.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
