<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PekerjaController;
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
    return view('dashboard/index');
});
Route::get('/login', function(){
    return view('login/loginform');
});


/* Resource Barang untuk akses semuanya */
Route::resource('barang', BarangController::class);
/* Resource Karyawan untuk akses semuanya */
Route::resource('karyawan', KaryawanController::class);
/* Resource Jabatan untuk akses semuanya */
Route::resource('jabatan', JabatanController::class);
/* Resource Pekerja untuk akses semuanya */
Route::resource('pekerja', PekerjaController::class);