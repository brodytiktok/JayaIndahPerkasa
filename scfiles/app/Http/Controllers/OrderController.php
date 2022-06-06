<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Status;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $orders = Order::all();
        return view('order.index')->with('orders',$orders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $status = Status::all();
        return view('order.create')->with('status',$status);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validateData = $request->validate([
            'nama_pelanggan' => 'required',
            'tanggal_pemesanan' => 'required',
            'tanggal_terima' => 'required',
            'items' => 'required',
            'metode' => 'required',
            'statuse_id' => 'required',
            'biaya' => 'required'
        ]);
        // validasi data

        $order = new Order();
        $order->nama_pelanggan = $validateData['nama_pelanggan'];
        $order->tanggal_pemesanan = $validateData['tanggal_pemesanan'];
        $order->tanggal_terima = $validateData['tanggal_terima'];
        $order->items = $validateData['items'];
        $order->metode = $validateData['metode'];
        $order->statuse_id = $validateData['statuse_id'];
        $order->biaya = $validateData['biaya'];
        //save
        $order->save();
        return redirect()->route('order.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(order $order)
    {
        //
    }
}
