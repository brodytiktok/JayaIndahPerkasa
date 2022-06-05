@extends('layout.index')

@section('title', 'Halaman Karyawan')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daftar Karyawan</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @if (session()->has('infodelete'))
                <div class="alert alert-success bg-danger">
                    {{ session()->get('infodelete') }}
                </div>
            @endif
            @if (session()->has('infocreate'))
                <div class="alert alert-success">
                    {{ session()->get('infocreate') }}
                </div>
            @endif
            <table id="example1" class="table table-bordered table-hover">
                {{-- <a href="{{ url('karyawan/create') }}" class="btn btn-primary"><i class="bi bi-plus-square"></i></a> --}}
                <thead>
                    <tr class="text-center" style="font-size: 13px">
                        <th style="width: 8rem">Nama Pelanggan</th>
                        <th style="width: 6rem">Nomor Pesanan</th>
                        <th style="width: 5rem">Item</th>
                        <th style="width: 8rem">Total Biaya</th>
                        <th style="width: 8rem">Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>


                            <td class="text-center">
                                <a {{-- href="{{ url('karyawan/' . $data->id) . '/edit' }}" --}} class="btn btn-sm btn-warning"><i
                                        class="bi bi-pencil-square"></i></a>
                                <button class="btn btn-sm btn-danger btn-hapus" {{-- data-id="{{ $data->id }}" --}} {{-- data-nama="{{ $data->nama_lengkap }}" --}}
                                    data-toggle="modal" data-target="#deleteModal"><i
                                        class="bi bi-x-circle-fill"></i></button>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
