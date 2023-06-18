<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// ambil semua data
// Route::get('/', [SampahController::class, 'index']);
// // tambah data baru
// Route::post('/sampahs/tambah-data', [SampahController::class, 'store']);
// // generate token csrf
// Route::get('/generate-token', [SampahController::class, 'createToken']);
// // ambil satu data spesifik
// Route::get('/sampahs/{id}', [SampahController::class, 'show']);
// // mengubah data tertentu
// Route::patch('/sampahs/update/{id}', [SampahController::class, 'update']);
// // menghapus data tertentu
// Route::delete('/sampahs/delete/{id}', [SampahController::class, 'destroy']);
// // menampilkan se;uruh data yang sudah dihapus sementara oleh softdeletes
// Route::get('/sampahs/show/trash', [SampahController::class, 'trash']);
// // mengembalikan data spesifik yang sudah di hapus
// Route::get('/sampahs/trash/restore/{id}', [SampahController::class, 'restore']);
// // mengapus permanen data tertentu
// Route::get('/sampahs/trash/delete/permanent/{id}', [SampahController::class, 'permanentDelete']);