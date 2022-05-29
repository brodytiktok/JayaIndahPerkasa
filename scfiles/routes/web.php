<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KaryawanController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layout/index');
});
Route::get('/login', function(){
    return view('login/loginform');
});

Route::get('/barang', [BarangController::class, 'index']);
Route::get('/brgcreate', [BarangController::class, 'create']);
/* Resource Barang untuk akses semuanya */
Route::resource('barang', BarangController::class);
/* Resource Karyawan untuk akses semuanya */
Route::resource('karyawan', KaryawanController::class);