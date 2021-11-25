<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DataPasienController;
use App\Http\Controllers\TambahPasienController;
use App\Http\Controllers\DashboardLayoutController;
use App\Http\Controllers\DataKehamilanController;
use App\Http\Controllers\PemeriksaanController;
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


Route::get('/sign-up', function () {
    return view('sign_up');
})->middleware('guest');
Route::post('/sign-up-process', [UserController::class, 'signUp'])->middleware('guest');


Route::get('/sign-in', function () {
    return view('sign_in');
})->name('login')->middleware('guest');
Route::post('/sign-in-process', [UserController::class, 'signIn'])->middleware('guest');

Route::get('/logout-process', [UserController::class, 'logout'])->middleware('auth');


Route::get('/dashboard', DashboardLayoutController::class)->middleware('auth');

Route::get('/tambah-data-kehamilan', function () {
    return view('tambah_data_kehamilan');
})->middleware('auth');

//PROSES KALKULASI NAIVE BAYES CLASSIFICATION
Route::post('/proses-kalkukasi-pre_eklampsia/{nik_pasien}', [PemeriksaanController::class, 'prosesKalkulasi'])->middleware('auth');

Route::get('/form-pemeriksaan/{nik_pasien}', function ($nik_pasien) {
    return view('form_pemeriksaan', ['nik_pasien' => $nik_pasien]);
})->middleware('auth');

Route::get('/hasil-pemeriksaan', function () {
    return view('hasil_pemeriksaan');
})->middleware('auth');


Route::post('/tambah-pasien/{id_user}', [TambahPasienController::class, 'tambahPasienBaru'])->middleware('auth');


Route::post('/edit-data-pasien/{nik_pasien}', [DataPasienController::class, 'editDataPasien'])->middleware('auth');
Route::get('/hapus-data-pasien/{nik_pasien}', [DataPasienController::class, 'hapusDataPasien'])->middleware('auth');


Route::post('/tambah-data-kehamilan/{nik_pasien}', [DataKehamilanController::class, 'tambahDataKehamilan'])->middleware('auth');
Route::post('/edit-data-kehamilan/{nik_pasien}', [DataKehamilanController::class, 'editDataKehamilan'])->middleware('auth');
Route::get('/hapus-data-kehamilan/{nik_pasien}', [DataKehamilanController::class, 'hapusDataKehamilan'])->middleware('auth');

//ROUTE FOR MODAL AJAX - MENU DATA PASIEN
Route::get('/modal-detail-pasien/{nik_pasien}', [DashboardLayoutController::class, 'modalDetailPasien'])->middleware('auth');
Route::get('/modal-edit-pasien/{nik_pasien}', [DashboardLayoutController::class, 'modalEditPasien'])->middleware('auth');
Route::get('/modal-hapus-pasien/{nik_pasien}', [DashboardLayoutController::class, 'modalHapusPasien'])->middleware('auth');

//ROUTE FOR MODAL AJAX - MENU DATA KEHAMILAN
Route::get('/modal-tambah-data-kehamilan/{nik_pasien}', [DashboardLayoutController::class, 'modalTambahKehamilan'])->middleware('auth');
Route::get('/modal-edit-data-kehamilan/{nik_pasien}', [DashboardLayoutController::class, 'modalEditKehamilan'])->middleware('auth');
Route::get('/modal-hapus-data-kehamilan/{nik_pasien}', [DashboardLayoutController::class, 'modalHapusKehamilan'])->middleware('auth');

//ROUTE FOR MODAL AJAX - MENU DATA PEMERIKSAAN
Route::get('/modal-riwayat-pemeriksaan/{nik_pasien}', [DashboardLayoutController::class, 'modalRiwayatPemeriksaan'])->middleware('auth');
