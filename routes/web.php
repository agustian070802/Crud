<?php

use App\Http\Controllers\CrudSiswaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HistoriPembayaranController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SppController;
use App\Http\Controllers\TransaksiPembayaranController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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


route::get('/login', [LoginController::class, 'index'])->name('login');
route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//route untuk admin
Route::group(['middleware' => ['auth', 'ceklevel:admin']], function(){
    //route dashboard
    route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    //route siswa
    route::get('/crud-siswa', [CrudSiswaController::class, 'index'])->name('crud-siswa');
    route::get('/crud-siswa/search', [CrudSiswaController::class, 'search'])->name('crud-siswa-search');
    route::get('/create-siswa', [CrudSiswaController::class, 'create'])->name('create-siswa');
    route::post('/simpan-siswa', [CrudSiswaController::class, 'store'])->name('simpan-siswa');
    route::get('/edit-siswa/{id}', [CrudSiswaController::class, 'edit'])->name('edit-siswa');
    route::post('/update-siswa/{id}', [CrudSiswaController::class, 'update'])->name('update-siswa');
    route::get('/destroy-siswa/{id}', [CrudSiswaController::class, 'destroy'])->name('destroy-siswa');

    //route petugas
    route::get('/crud-petugas', [UserController::class, 'index'])->name('crud-petugas');
    route::get('/crud-petugas/search', [UserController::class, 'search'])->name('crud-petugas-search');
    route::get('/create-petugas', [UserController::class, 'create'])->name('create-petugas');
    route::post('/simpan-petugas', [UserController::class, 'store'])->name('simpan-petugas');
    route::get('/edit-petugas/{id}', [UserController::class, 'edit'])->name('edit-petugas');
    route::post('/update-petugas/{id}', [UserController::class, 'update'])->name('update-petugas');
    route::get('/destroy-petugas/{id}', [UserController::class, 'destroy'])->name('destroy-petugas');

    //route kelas
    route::get('/crud-kelas', [KelasController::class, 'index'])->name('crud-kelas');
    route::get('/crud-kelas/search', [KelasController::class, 'search'])->name('crud-kelas-search');
    route::get('/create-kelas', [KelasController::class, 'create'])->name('create-kelas');
    route::post('/simpan-kelas', [KelasController::class, 'store'])->name('simpan-kelas');
    route::get('/edit-kelas/{id}', [KelasController::class, 'edit'])->name('edit-kelas');
    route::post('/update-kelas/{id}', [KelasController::class, 'update'])->name('update-kelas');
    route::get('/destroy-kelas/{id}', [KelasController::class, 'destroy'])->name('destroy-kelas');

    //route kelas
    route::get('/crud-spp', [SppController::class, 'index'])->name('crud-spp');
    route::get('/crud-spp/search', [SppController::class, 'search'])->name('crud-spp-search');
    route::get('/create-spp', [SppController::class, 'create'])->name('create-spp');
    route::post('/simpan-spp', [SppController::class, 'store'])->name('simpan-spp');
    route::get('/edit-spp/{id}', [SppController::class, 'edit'])->name('edit-spp');
    route::post('/update-spp/{id}', [SppController::class, 'update'])->name('update-spp');
    route::get('/destroy-spp/{id}', [SppController::class, 'destroy'])->name('destroy-spp'); 
    
    //route laporan pembayaran
    route::get('/laporan', [LaporanController::class, 'index'])->name('laporan');
    route::get('/laporan-pdf', [LaporanController::class, 'laporanpdf'])->name('laporan-pdf');
    
    
});

Route::group(['middleware' => ['auth', 'ceklevel:admin,petugas']], function(){
    //route dashboard
    route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //route entri transaksi pembayaran
    route::get('/crud-transaksi-pembayaran', [TransaksiPembayaranController::class, 'index'])->name('crud-transaksi-pembayaran');
    route::get('/crud-transaksi-pembayaran/search', [TransaksiPembayaranController::class, 'search'])->name('crud-transaksi-pembayaran-search');
    route::get('/create-transaksi-pembayaran', [TransaksiPembayaranController::class, 'create'])->name('create-transaksi-pembayaran');
    route::post('/simpan-transaksi-pembayaran', [TransaksiPembayaranController::class, 'store'])->name('simpan-transaksi-pembayaran');
    route::get('/edit-transaksi-pembayaran/{id}', [TransaksiPembayaranController::class, 'edit'])->name('edit-transaksi-pembayaran');
    route::post('/update-transaksi-pembayaran/{id}', [TransaksiPembayaranController::class, 'update'])->name('update-transaksi-pembayaran');
    route::get('/destroy-transaksi-pembayaran/{id}', [TransaksiPembayaranController::class, 'destroy'])->name('destroy-transaksi-pembayaran');
    
    //route history pembayaran
    route::get('/history-pembayaran', [HistoriPembayaranController::class, 'index'])->name('histori-pembayaran');
    route::get('/histori-pembayaran/search', [HistoriPembayaranController::class, 'search'])->name('histori-pembayaran-search');
    

});
