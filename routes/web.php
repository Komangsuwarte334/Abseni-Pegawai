<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeUserController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ForgetPassword;
use Illuminate\Support\Facades\Auth;



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

route::get('/', function () {
    return view('welcome');
});


route::get('/login', function () {
    return view('pengguna.login');
})->name('login');


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::group(['middleware' => ['auth', 'levelUser',]], function () {
    Route::get('HomeUser', [HomeController::class, 'user'])->name('HomeUser');
    route::post('/simpan-masuk', [PresensiController::class, 'store'])->name('simpan-masuk');
    route::get('/presensi-masuk', [PresensiController::class, 'index'])->name('presensi-masuk');
    route::get('/presensi-keluar', [PresensiController::class, 'keluar'])->name('presensi-keluar');
    route::post('ubah-presensi', [PresensiController::class, 'presensipulang'])->name('ubah-presensi');
});



Route::get('profil', [ProfilController::class, 'index'])->name('profil');
Route::post('/profil/edit-profil/{id}', [ProfilController::class, 'editprofil'])->name('edit-profil');
Route::post('/update-profil/{id}', [ProfilController::class, 'update'])->name('update-profil');


Route::group(['middleware' => ['auth', 'levelAdmin']], function () {
    Route::get('/HomeAdmin', [HomeController::class, 'index'])->name('HomeAdmin');
    Route::get('/data-pegawai', [UserController::class, 'index'])->name('data-pegawai');
    Route::get('/edit-pegawai/{id}', [UserController::class, 'edit'])->name('edit-pegawai');
    Route::post('/update-pegawai/{id}', [UserController::class, 'update'])->name('update-pegawai');
    Route::get('/delete-pegawai/{id}', [UserController::class, 'destroy'])->name('delete-pegawai');
    Route::get('/cetak-pegawai', [UserController::class, 'cetakPegawai'])->name('cetak-pegawai');
    route::get('/data-pegawai/tambahdatapegawai', [UserController::class, 'registrasi'])->name('datapegawai');
    route::post('/simpanregistrasi', [UserController::class, 'simpanregistrasi'])->name('simpanregistrasi');
    Route::get('/laporan', [PresensiController::class, 'halamanrekap'])->name('laporan');
    Route::get('laporan/{tglawal}/{tglakhir}', [PresensiController::class, 'tampildatakeseluruhan'])->name('laporan-keseluruhan');
    Route::get('/cetak-absensi', [PresensiController::class, 'cetakAbsensi'])->name('cetak-absensi');
});
