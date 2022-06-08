@extends('layout.index')

@section('title', 'Halaman Order')

@section('content')
    <div class="card">
        <div class="m-2 p-2">
            <a href="{{ url('order') }}" class="btn btn-sm btn-primary"><i class="bi bi-arrow-left-square"></i></a>
        </div>

        <div class="card-header">
            <h3 class="card-title">Informasi <span class="text-bold"
                    style="text-decoration: underline;">
            </h3>
        </div>
       
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead>
                    @foreach ($orders as $data)
                    <tr>
                        <th>Nama Pelanggan</th>
                        <td>{{ $data->nama_pelanggan }}</td>
                    </tr>
                    <tr>
                        <th>Nomor Pesanan</th>
                        <td>{{ $data->no_order }}</td>
                    </tr>
                    <tr>
                        <th>Tanggal Pesanan</th>
                        <td>{{ $data->tanggal_pemesanan }}</td>
                    </tr>
                    <tr>
                        <th>Tanggal Sampai</th>
                        <td>{{ $data->tanggal_terima }}</td>
                    </tr>
                    <tr>
                        <th>Item</th>
                        <td>{{ $data->items }}</td>
                    </tr>
                    <tr>
                        <th>Metode Pembayaran</th>
                        <td>{{ $data->metode }}</td>
                    </tr>
                    <tr>
                        <th>Total Biaya</th>
                        <td>{{ $data->biaya }}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>{{ $data->status }}</td>
                    </tr>
                    @endforeach  
                </thead>
            </table>
        <!-- /.card-body -->
        </div>
    </div>
<style>
    table{
        border: 1px;
        border-style: groove;
    }
    th{
        text-align: center;
        font-size: 20px;
    }
    td{
        font-size: 20px;
    }
    tr{
        
    }
</style>
@endsection
