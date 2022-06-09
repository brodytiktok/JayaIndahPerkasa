<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PekerjaController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StatusController;

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
    return view('dashboard.index');
})->name('dashboard')->middleware(['auth']);

require __DIR__.'/auth.php';
/* Resource Barang untuk akses semuanya */
Route::resource('barang', BarangController::class)->middleware(['auth']);
/* Resource Karyawan untuk akses semuanya */
Route::resource('karyawan', KaryawanController::class)->middleware(['auth']);
/* Resource Jabatan untuk akses semuanya */
Route::resource('jabatan', JabatanController::class)->middleware(['auth']);
/* Resource Pekerja untuk akses semuanya */
Route::resource('pekerja', PekerjaController::class)->middleware(['auth']);
/* Resource Order untuk akses semuanya */
Route::resource('order', OrderController::class)->middleware(['auth']);
/* Resource Stat untuk akses semuanya */
Route::resource('status', StatusController::class)->middleware(['auth']);