<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [LoginController::class, 'gate'])->name('login.gate');
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'post'])->name('login.post');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout.index');
Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('/tentang', [HomeController::class, 'tentang'])->name('home.tentang');
Route::get('/informasi', [HomeController::class, 'informasi'])->name('home.informasi');
Route::get('/video', [HomeController::class, 'video'])->name('home.video');
Route::get('/jadwal', [HomeController::class, 'jadwal'])->name('home.jadwal');
Route::group(['middleware' => ['auth']], function () {
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::prefix('admin')->group(function () {
    Route::name('admin.')->group(function () {
        Route::get('/informasi-kegiatan', [AdminController::class, 'informasiKegiatan'])->name('informasi-kegiatan.index');
        Route::post('/informasi-kegiatan', [AdminController::class, 'createInformasiKegiatan'])->name('informasi-kegiatan.store');
        Route::patch('/informasi-kegiatan/{id}', [AdminController::class, 'editInformasiKegiatan'])->name('informasi-kegiatan.edit');
        Route::delete('/informasi-kegiatan/{id}', [AdminController::class, 'deleteInformasiKegiatan'])->name('informasi-kegiatan.delete');
        Route::get('/jadwal-kegiatan', [AdminController::class, 'jadwalKegiatan'])->name('jadwal-kegiatan.index');
        Route::post('/jadwal-kegiatan', [AdminController::class, 'createJadwalKegiatan'])->name('jadwal-kegiatan.store');
        Route::patch('/jadwal-kegiatan/{id}', [AdminController::class, 'editJadwalKegiatan'])->name('jadwal-kegiatan.edit');
        Route::delete('/jadwal-kegiatan/{id}', [AdminController::class, 'deleteJadwalKegiatan'])->name('jadwal-kegiatan.delete');

  });
    });
});