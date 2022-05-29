@extends('layout.index')

@section('title', 'Halaman Karyawan')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daftar Karyawan</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
                <a href="{{ url('karyawan/create') }}" class="btn btn-primary"><i class="bi bi-plus-square"></i></a>
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Kode Produk</th>
                        <th>Nama Produk</th>
                        <th>Satuan</th>
                        <th>Harga Jual</th>
                        <th>Stok Awal</th>
                        <th>Stok Akhir</th>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td><a {{-- href="{{ url('prodi/' . $data->id) }}" --}} class="btn btn-sm btn-primary">Tampil</a>
                            <a {{-- href="{{ url('prodi/' . $data->id) . '/edit' }}" --}} class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i></a>
                            <button class="btn btn-sm btn-danger btn-hapus" {{-- data-id="{{ $data->id }}" --}} {{-- data-nama="{{ $data->nama }}" --}}
                                data-toggle="modal" data-target="#deleteModal"><i class="bi bi-x-circle-fill"></i></button>
                        </td>
                    </tr>

                </tbody>

            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    <style>
        .table {
            font-size: 13px;
        }

    </style>

@endsection
