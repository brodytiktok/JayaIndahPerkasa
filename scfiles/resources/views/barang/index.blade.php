@extends('layout.index')

@section('title', 'Halaman Barang')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">DataTable with default features</h3>
        </div>
        <!-- /.card-header -->
        @foreach ($barangs as $items)
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nama Barang</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td>{{ $items->id }}</td>
                            <td>{{ $items->nama_barang }}</td>

                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        @endforeach
    </div>
    <!-- /.card -->
@endsection
