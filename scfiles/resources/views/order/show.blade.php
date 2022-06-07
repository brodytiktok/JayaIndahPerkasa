@extends('layout.index')

@section('title', 'Halaman Order')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daftar Order</h3>
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
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Address 2</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                    </div>
                    <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                    </div>
                </div>
            </form>
                    @foreach ($orders as $data)
                        <tr>
                            <td>{{ $data->nama_pelanggan }}</td>
                            <td>{{ $data->no_order }}</td>
                            <td>{{ $data->tanggal_pemesanan }}</td>
                            <td>{{ $data->tanggal_terima }}</td>
                            <td>{{ $data->items }}</td>
                            <td>{{ $data->metode }}</td>
                            <td>{{ $data->biaya }}</td>
                            <td>{{ $data->statuse_id }}</td>

                        </tr>
                    @endforeach
              
        </div>
        <!-- /.card-body -->
    </div>
@endsection
