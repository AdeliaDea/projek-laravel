<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::all();

        return view('barang.index', compact('barang'));
    }
    public function create()
    {
        return view('barang.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|string|max:10',
            'nama_barang'=> 'required|string|max:255',
            'harga'=> 'required|numeric|min:1',
        ]);
        
        //proses penyimpanan data
        Barang::create([
            'kode' => $request->kode,
            'nama_barang'=>  $request->nama_barang,
            'harga'=>  $request->harga,
        ]);

        alert()->success('Berhasil','Data Anda berhasil disimpan.');
        return redirect()->route('barang.index');
    }
    public function edit($id)
    {
        $barang = Barang::find($id);

       return view('barang.edit', compact('barang'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode' => 'required|string|max:10',
            'nama_barang'=> 'required|string|max:255',
            'harga'=> 'required|numeric|min:1',
        ]);
        
        Barang::find($id)->update([
            'kode' => 'required|string|max:10',
            'nama_barang'=> 'required|string|max:255',
            'harga'=> 'required|numeric|min:1',

        ]);

        alert()->success('Berhasil','Data barang berhasil diupdate.');
        return redirect()->route('barang.index');
    }
    public function destroy($id)
    {
        Barang::find($id)->delete();

        return redirect()->route('barang.index');
    }
}
