<?php

use App\Http\Controllers\PasienController;
use App\Http\Controllers\OdontogramController;
use App\Http\Controllers\WebcamController;
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

// Route::get('/', function () {
//     return view('pages/pasien/data_pasien');
// });

Route::get('/', [PasienController::class, 'index'])->name('data-pasien');
Route::get('/data-pasien', [PasienController::class, 'index'])->name('data-pasien');
Route::get('/tambah-pasien', [PasienController::class, 'create'])->name('tambah-pasien');
Route::post('/simpan-pasien', [PasienController::class, 'store'])->name('simpan-pasien');
Route::get('/edit-pasien/{id}', [PasienController::class, 'edit'])->name('edit-pasien');
Route::post('/update-pasien/{id}', [PasienController::class, 'update'])->name('update-pasien');
Route::get('/delete-pasien/{id}', [PasienController::class, 'destroy'])->name('delete-pasien');


Route::get('/pemeriksaan-odontogram/{id}', [OdontogramController::class, 'create'])->name('pemeriksaan-odontogram');
Route::get('/show-odontogram/{id}', [OdontogramController::class, 'show'])->name('show-odontogram');
Route::post('/simpan-odontogram', [OdontogramController::class, 'store'])->name('simpan-odontogram');
Route::post('/update-odontogram', [OdontogramController::class, 'update'])->name('update-odontogram');
Route::post('/update-kunjungan', [OdontogramController::class, 'update_kunjungan'])->name('update-kunjungan');

// Route::get('/add_rekam_medis_pasien', function () {
//     return view('pages/add_rekam_medis_pasien');
// });

// Route::get('/data_pasien', function () {
//     return view('pages/data_pasien');
// });

// Route::get('/data_odontogram', function () {
//     return view('pages/data_odontogram');
// });

// Route::get('/pasien', function () {
//     return view('pages/demo_lihat_pasien');
// });

// Route::get('/update_perawatan', function () {
//     return view('pages/demo_update');
// });

// Route::get('/demo_hapus_pasien', function () {
//     return view('pages/demo_hapus_pasien');
// });

// Route::get('/login', function () {
//     return view('pages/login');
// });

// Route::get('/register', function () {
//     return view('pages/register');
// });

// Route::get('/add_pasien', function () {
//     return view('pages/add_pasien');
// });

Route::post('/webcam', [WebcamController::class, 'store'])->name('webcam.capture');
Route::post('/classify', [WebcamController::class, 'classify'])->name('webcam.classify');

