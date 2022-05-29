@extends('layout.index')

@section('title', 'Halaman Barang')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daftar Karyawan</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
                <a href="{{ url('barang/create') }}" class="btn btn-primary"><i class="bi bi-plus-square"></i></a>
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Kode Produk</th>
                        <th>Nama Produk</th>
                        <th>Satuan</th>
                        <th>Harga Jual (RP)</th>
                        <th>Stok Awal</th>
                        <th>Stok Akhir</th>
                        <th></th>

                    </tr>
                </thead>
                @foreach ($barangs as $items)
                    <tbody>
                        <tr>
                            <td>{{ $items->tanggal }}</td>
                            <td>{{ $items->kode_barang }}</td>
                            <td>{{ $items->nama_barang }}</td>
                            <td>{{ $items->satuan }}</td>
                            <td>{{ $items->harga_jual }}</td>
                            <td>{{ $items->stok_awal }}</td>
                            <td>{{ $items->stok_akhir }}</td>
                            <td><a {{-- href="{{ url('prodi/' . $data->id) }}" --}} class="btn btn-sm btn-primary">Tampil</a>
                                <a {{-- href="{{ url('prodi/' . $data->id) . '/edit' }}" --}} class="btn btn-sm btn-warning"><i
                                        class="bi bi-pencil-square"></i></a>
                                <button class="btn btn-sm btn-danger btn-hapus" {{-- data-id="{{ $data->id }}" --}} {{-- data-nama="{{ $data->nama }}" --}}
                                    data-toggle="modal" data-target="#deleteModal"><i
                                        class="bi bi-x-circle-fill"></i></button>
                            </td>

                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@endsection
