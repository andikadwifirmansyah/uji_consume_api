<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampahController;

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

// mengambil semua data & search
Route::get('/', [SampahController::class, 'index'])->name('home');
// halaman tambah data
Route::get('/add', [SampahController::class, 'create'])->name('add');
// tambah data
Route::post('/add/send', [SampahController::class, 'store'])->name('send');
// menampilkan halaman edit dan mengirim satu datanya
Route::get('/edit/{id}', [SampahController::class, 'edit'])->name('edit');
// mengubah data
Route::patch('/update/{id}', [SampahController::class, 'update'])->name('update');
// hapus data pake softdeletes
Route::delete('/delete/{id}', [SampahController::class, 'destroy'])->name('delete');
// ambil data sampah
Route::get('/trash', [SampahController::class, 'trash'])->name('trash');
// restore
Route::get('/trash/restore/{id}', [SampahController::class, 'restore'])->name('restore');
// hapus permanent
Route::get('/trash/delete/permanent/{id}', [SampahController::class, 'permanent'])->name('permanent');