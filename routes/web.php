<?php

use App\Http\Controllers\AkunController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\Kategori_bpjsController;
use App\Http\Controllers\KonsumenController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Program_bpjsController;
use App\Http\Controllers\KasbonController;
use App\Http\Controllers\TatacaraController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\Jenis_bpjstkController;
use Illuminate\Support\Facades\Route;

/*
|-----------------------------------------------------------

---------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

@include_once('admin_web.php');



Route::view('sample-page', 'admin.pages.sample-page')->name('sample-page');

Route::prefix('dashboard')->group(function () {
    Route::view('/', 'admin.dashboard.default')->name('index');
    Route::view('default', 'admin.dashboard.default')->name('dashboard.index');
});

Route::view('default-layout', 'multiple.default-layout')->name('default-layout');
Route::view('compact-layout', 'multiple.compact-layout')->name('compact-layout');
Route::view('modern-layout', 'multiple.modern-layout')->name('modern-layout');

Auth::routes();

Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::prefix('home')->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
});

Route::resource('user', UserController::class);
Route::resource('program_bpjs', Program_bpjsController::class);
Route::resource('kategori_bpjs', Kategori_bpjsController::class);
Route::resource('konsumen', KonsumenController::class);
Route::prefix('vendor')->group(function () {
    Route::get('/', [App\Http\Controllers\VendorController::class, 'index'])->name('vendor.index');
    Route::get('/lainnya', [App\Http\Controllers\VendorController::class, 'lainnya'])->name('vendor.lainnya');
    Route::get('/create', [App\Http\Controllers\VendorController::class, 'create'])->name('vendor.create');
    Route::post('/store', [App\Http\Controllers\VendorController::class, 'store'])->name('vendor.store');
    Route::get('/edit/{id_supplier}', [App\Http\Controllers\VendorController::class, 'edit'])->name('vendor.edit');
    Route::put('/update/{id_supplier}', [App\Http\Controllers\VendorController::class, 'update'])->name('vendor.update');
    Route::get('/destroy/{id_supplier}', [App\Http\Controllers\VendorController::class, 'destroy'])->name('vendor.destroy');
});
Route::prefix('akun')->group(function () {
    Route::get('/', [App\Http\Controllers\AkunController::class, 'index'])->name('akun.index');
    Route::get('/izin', [App\Http\Controllers\AkunController::class, 'izin'])->name('akun.izin');
    Route::get('/sosmed', [App\Http\Controllers\AkunController::class, 'sosmed'])->name('akun.sosmed');
    Route::get('/lainnya', [App\Http\Controllers\AkunController::class, 'lainnya'])->name('akun.lainnya');
    Route::get('/create', [App\Http\Controllers\AkunController::class, 'create'])->name('akun.create');
    Route::post('/store', [App\Http\Controllers\AkunController::class, 'store'])->name('akun.store');
    Route::get('/edit/{id_akun}', [App\Http\Controllers\AkunController::class, 'edit'])->name('akun.edit');
    Route::put('/update/{id_akun}', [App\Http\Controllers\AkunController::class, 'update'])->name('akun.update');
    Route::get('/destroy/{id_akun}', [App\Http\Controllers\AkunController::class, 'destroy'])->name('akun.destroy');
});
Route::resource('tatacara', TatacaraController::class);
Route::resource('karyawan', KaryawanController::class);


Route::prefix('gaji')->group(function () {
    Route::get('/', [App\Http\Controllers\GajiController::class, 'index'])->name('gaji.index');
    Route::get('/inputgaji', [App\Http\Controllers\GajiController::class, 'inputgaji'])->name('gaji.inputgaji');
});

Route::prefix('kasbon')->group(function () {
    Route::get('/', [App\Http\Controllers\KasbonController::class, 'index'])->name('kasbon.index');
    Route::get('/input', [App\Http\Controllers\KasbonController::class, 'input'])->name('kasbon.input');
    Route::post('/store', [App\Http\Controllers\KasbonController::class, 'store'])->name('kasbon.store');
    Route::get('/acc/{id}', [App\Http\Controllers\KasbonController::class, 'acc'])->name('kasbon.acc');
    Route::put('/update/{id}', [App\Http\Controllers\KasbonController::class, 'update'])->name('kasbon.update');
    Route::get('/del/{id}', [App\Http\Controllers\KasbonController::class, 'destroy'])->name('kasbon.del');
});


Route::prefix('bpjstk')->group(function () {
    Route::get('/programbpjstk', [App\Http\Controllers\Jenis_bpjstkController::class, 'index'])->name('bpjstk.program');
    Route::get('/createprogram', [App\Http\Controllers\Jenis_bpjstkController::class, 'createprogram'])->name('bpjstk.createprogram');
    Route::get('/createtagihan', [App\Http\Controllers\Jenis_bpjstkController::class, 'createtagihan'])->name('bpjs-kesehatan.createtagihan');
    Route::post('/storeprogram', [App\Http\Controllers\Jenis_bpjstkController::class, 'storeprogram'])->name('bpjstk.storeprogram');
    Route::get('/editprogram/{id}', [App\Http\Controllers\Jenis_bpjstkController::class, 'editprogram'])->name('bpjstk.editprogram');
    Route::put('/updateprogram/{id}', [App\Http\Controllers\Jenis_bpjstkController::class, 'updateprogram'])->name('bpjstk.updateprogram');
    Route::get('/destroyprogram/{id}', [App\Http\Controllers\Jenis_bpjstkController::class, 'destroyprogram'])->name('bpjstk.destroyprogram');

    Route::get('/', [App\Http\Controllers\Bpjs_ketenagakerjaanController::class, 'index'])->name('bpjstk.index');
});

Route::prefix('pegawai')->group(function () {
    Route::get('/gaji', [App\Http\Controllers\PegawaiController::class, 'index'])->name('pegawai.default');
    Route::get('/', [App\Http\Controllers\PegawaiController::class, 'index'])->name('pegawai.index');
});

Route::prefix('bpjs-kesehatan')->group(function () {
    Route::get('/jenis-bpjs-kesehatan', [App\Http\Controllers\Jenis_bpjskesehatanController::class, 'index'])->name('bpjs-kesehatan.jenis');
    Route::get('/createjenis', [App\Http\Controllers\Jenis_bpjskesehatanController::class, 'create'])->name('bpjs-kesehatan.createjenis');
    Route::post('/storejenis', [App\Http\Controllers\Jenis_bpjskesehatanController::class, 'store'])->name('bpjs-kesehatan.storejenis');
    Route::get('/edit/{id}', [App\Http\Controllers\Jenis_bpjskesehatanController::class, 'edit'])->name('bpjs-kesehatan.editjenis');
    Route::put('/update/{id}', [App\Http\Controllers\Jenis_bpjskesehatanController::class, 'update'])->name('bpjs-kesehatan.updatejenis');
    Route::get('/destroy/{id}', [App\Http\Controllers\Jenis_bpjskesehatanController::class, 'destroy'])->name('bpjs-kesehatan.destroyjenis');

    Route::get('/', [App\Http\Controllers\Bpjs_ketenagakerjaanController::class, 'index'])->name('bpjstk.index');
});
