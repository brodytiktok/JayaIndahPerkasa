<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    //
    /* function index(){
        
        $barangs = Barang::all();
        //dump($mahasiswas);
        return view('barang.index')
        
        ->with('barangs', $barangs);

    } */
    public function index()
    {
        $barangs = Barang::all();
        return view('barang.index')->with('barangs',$barangs);
    }
    public function create()
    {
        $barangs = Barang::all();
        return view('barang.create')->with('barangs',$barangs);
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_barang' => 'required'
        ]);
        // 2. simpan

        $barang = new Barang();
        $barang->nama_barang = $validateData['nama_barang'];

        $barang->save();
        return redirect()->route('barang.index');
    }
}
