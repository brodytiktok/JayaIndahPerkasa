<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
class BarangController extends Controller
{
    //
    function index(){
        
        $barangs = Barang::all();
        //dump($mahasiswas);
        return view('barang.index')
        
        ->with('barangs', $barangs);

    }
}
