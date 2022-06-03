@extends('layout.index')

@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid">

        <div class="card card-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header text-white" style="background: url('../dist/img/photo1.png') center center;">
                <h3 class="widget-user-username text-right">{{ Auth::user()->name }}</h3>
                <h5 class="widget-user-desc text-right">Web Designer</h5>
            </div>
            <div class="widget-user-image">
                <img class="img-circle" src="../dist/img/user3-128x128.jpg" alt="User Avatar">
            </div>
            <div class="card-footer">
                <div class="row">
                    {{-- Followers --}}
                    <div class="col-sm-4 border-right">
                        <div class="description-block">
                            <h5 class="description-header">3,200</h5>
                            <span class="description-text">FOLLOWERS</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 border-right">
                        <div class="description-block">
                            <h5 class="description-header">13,000 IDR</h5>
                            <span class="description-text">INCOMING</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4">
                        <div class="description-block">
                            <h5 class="description-header">35</h5>
                            <span class="description-text">PRODUCTS SOLD</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
        </div>
        <!-- /.widget-user -->
    </div>
    <h5 class="mb-2">Card with Image Overlay</h5>
    <div class="card card-success">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 col-lg-6 col-xl-4">
                    <div class="card mb-2 bg-gradient-dark">
                        <img class="card-img-top" src="../dist/img/photo1.png" alt="Dist Photo 1">
                        <div class="card-img-overlay d-flex flex-column justify-content-center">
                            <div class="d-flex justify-content-center bg-transparent">
                                <div class="mt-3 pt-2">
                                    <h5 class="card-title text-white">
                                        <i class="bi bi-person-badge" style="font-size: 3rem;"></i>
                                    </h5>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <p class="card-text pb-2 pt-1 text-white">
                                    Jumlah Karyawan <br>
                                </p>
                            </div>
                            <div class="d-flex justify-content-center">
                                <p class="card-text pb-2 pt-1 text-white">
                                    @php
                                        echo App\Http\Controllers\KaryawanController::select();
                                    @endphp <br>
                                </p>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a href="{{ url('karyawan') }}" class="text-white">Lihat Daftar Karyawan</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 col-xl-4">
                    <div class="card mb-2">
                        <img class="card-img-top" src="../dist/img/photo2.png" alt="Dist Photo 2">
                        <div class="card-img-overlay d-flex flex-column justify-content-center">
                            <div class="d-flex justify-content-center bg-transparent">
                                <div class="mt-3 pt-2">
                                    <h5 class="card-title text-white">
                                        <i class="bi bi-box-seam heading" style="font-size: 3rem;"></i>
                                    </h5>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <p class="card-text pb-2 pt-1 text-white">
                                    Produk Tersedia <br>
                                </p>
                            </div>
                            <div class="d-flex justify-content-center">
                                <p class="card-text pb-2 pt-1 text-white">
                                    @php
                                        echo App\Http\Controllers\BarangController::select();
                                    @endphp <br>
                                </p>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a href="{{ url('barang') }}" class="text-white">Lihat Daftar Produk</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 col-xl-4">
                    <div class="card mb-2 bg-gradient-dark">
                        <img class="card-img-top" src="../dist/img/photo1.png" alt="Dist Photo 1">
                        <div class="card-img-overlay d-flex flex-column justify-content-center">
                            <div class="d-flex justify-content-center bg-transparent">
                                <div class="mt-3 pt-2">
                                    <h5 class="card-title text-white">
                                        <i class="bi bi-basket" style="font-size: 3rem;"></i>
                                    </h5>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <p class="card-text pb-2 pt-1 text-white">
                                    Jumlah Pesanan <br>
                                </p>
                            </div>
                            <div class="d-flex justify-content-center">
                                <p class="card-text pb-2 pt-1 text-white">
                                    1 <br>
                                </p>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a href="" class="text-white">Lihat Daftar Pesanan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
