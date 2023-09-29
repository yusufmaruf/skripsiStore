<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\AdminCabangController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BahanBakuController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.login');
})->name('master');

Route::prefix('admin')
    ->middleware('auth')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('adminDashboard');
        Route::resource('cabang', AdminCabangController::class);
        Route::resource('admin', AdminController::class);
        Route::resource('pegawai', PegawaiController::class);
        Route::resource('kategori', KategoriController::class);
        Route::resource('produk', ProdukController::class);
        Route::resource('bahanbaku', BahanBakuController::class);
    });



Auth::routes();
