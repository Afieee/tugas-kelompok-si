<?php

use App\Models\matakuliah;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\SekretariatController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/sekretariat/view-matakuliah-sekretariat', [MatakuliahController::class, 'viewMatakuliahSekretariat']);
Route::get('/sekretariat/view-dosen-sekretariat', [MatakuliahController::class, 'viewDosenSekretariat']);
Route::get('/sekretariat/view-mahasiswa-sekretariat', [MatakuliahController::class, 'viewMahasiswaSekretariat']);

Route::resource('sekretariat', SekretariatController::class);
Route::resource('sekretariat-matakuliah', MatakuliahController::class);
Route::resource('sekretariat-dosen', DosenController::class);
Route::resource('sekretariat-mahasiswa', MahasiswaController::class);








