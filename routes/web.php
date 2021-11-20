<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DashboardLayoutController;
use App\Http\Controllers\TambahDataKehamilanController;

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
    return view('index');
});

Route::get('/sign_up', function () {
    return view('sign_up');
});

Route::get('/sign_in', function () {
    return view('sign_in');
});

Route::get('/form-pemeriksaan', function () {
    return view('form_pemeriksaan');
});

Route::get('/hasil-pemeriksaan', function () {
    return view('hasil_pemeriksaan');
});

Route::get('/dashboard', DashboardLayoutController::class);

Route::get('/tambah-data-kehamilan', function () {
    return view('tambah_data_kehamilan');
});

Route::post('/tambah-pasien', [PasienController::class, 'tambahPasienBaru']);

Route::post('/proses-tambah-data-kehamilan', [TambahDataKehamilanController::class, 'tambahDataKehamilan']);
