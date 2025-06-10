<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiDBController;
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
    return view('welcome');
});

Route::get('/selamat', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com<h1>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('/hello', [Coba::class, 'helloWorld']);
Route::get('/hello', 'App\Http\Controllers\Coba@helloWolrd');

// Pertemuan 1
Route::get('/pertemuan1', function () {
    return view('pertemuan1');
});

// Latihan Pertemuan 1
Route::get('/latihanpertemuan1', function () {
    return view('latihanpertemuan1');
});

// Pertemuan 3 Bootstrap
Route::get('/bootstrap2pertemuan3', function () {
    return view('bootstrap2pertemuan3');
});

// Pertemuan 4 Latihan Bootstrap
Route::get('/bootstraplatihanpertemuan4', function () {
    return view('bootstraplatihanpertemuan4');
});

// Pertemuan 5 Bootstrap Linktre
Route::get('/bootstraplinktreepertemuan5', function () {
    return view('bootstraplinktreepertemuan5');
});


// Pertemuan 7 Latihan Bootstrap
Route::get('/js1pertemuan7', function () {
    return view('js1pertemuan7');
});

// Pertemuan 7 Latihan Bootstrap
Route::get('/js2pertemuan7', function () {
    return view('js2pertemuan7');
});

// Pertemuan 8 Danantara
Route::get('/danantarapertemuan8', function () {
    return view('danantarapertemuan8');
});

// Pertemuan 9 ETS
Route::get('/etspertemuan9', function () {
    return view('etspertemuan9');
});


Route::get('dosen',
    [Coba::class, 'index']
);

//Route::get('/pegawai/{nama}',
    //[PegawaiController::class, 'index']
//);

// Halaman isian formulir
Route::get('/formulir',
    [PegawaiController::class, 'formulir']
);
Route::post('/formulir/proses',
    [PegawaiController::class, 'proses']
);

Route::get('/blok',
    [BlogController::class, 'home']
);
Route::get('/blok/tentang',
    [BlogController::class, 'tentang']
);

Route::get('/blok/kontak',
    [BlogController::class, 'kontak']
);

Route::get('/pegawai',[PegawaiDBController::class,'index']);

Route::get('/pegawai/tambah',[PegawaiDBController::class,'tambah']);

Route::post('/pegawai/store',[PegawaiDBController::class,'store']);

Route::get('/pegawai/edit/{id}',[PegawaiDBController::class, 'edit']);

Route::post('/pegawai/update',[PegawaiDBController::class, 'update']);

Route::get('/pegawai/hapus/{id}',[PegawaiDBController::class, 'hapus']);

Route::get('/pegawai/cari',[PegawaiDBController::class,'cari']);


//========================

// Tugas CRUD: TV
//route CRUD
Route::get('/tv', [PegawaiDBController::class, 'index2']);
//route CRUD
Route::get('/tv/tambahTV', [PegawaiDBController::class, 'tambahTV']);
Route::post('/tv/storeTV', [PegawaiDBController::class, 'storeTV']);
Route::get('/tv/editTV/{id}', [PegawaiDBController::class, 'editTV']);
Route::post('/tv/updateTV', [PegawaiDBController::class, 'updateTV']);
Route::get('/tv/hapusTV/{id}', [PegawaiDBController::class, 'hapusTV']);

// pertemuan 14 (pencarian, filter, pagination)
Route::get('/tv/cariTV',[PegawaiDBController::class,'cariTV']);
