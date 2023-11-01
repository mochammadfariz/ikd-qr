<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\CabangController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PilihWaktuSubmit;
use App\Http\Controllers\CodeGeneratorController;
use App\Http\Controllers\PrePilihWaktuSubmitController;


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
//     return view('menu.landingpage');
// });

// Route::get('/pilih-frontliner', [JabatanController::class,'index'])->name('pilih-frontliner');
Route::get('/', [JabatanController::class,'index'])->name('pilih-frontliner');


Route::get('/pilih-cabang', [CabangController::class,'pilihCabang'])->name('pilih-cabang');
Route::get('location-cabang', [CabangController::class,'getLocation']);

Route::get('/menu-layanan', [LayananController::class,'menuLayanan'])->name('menu-layanan');



Route::post('/users/store', [UserController::class,'store']);

Route::get('/pilih-jadwal', [PrePilihWaktuSubmitController::class,'index'])->name('pilih-jadwal');
Route::post('/pilih-waktu-submit', [PilihWaktuSubmit::class,'store'])->name('pilih-waktu-submit');

Route::get('/koderef', [CodeGeneratorController::class,'kodeRefGen'] )->name('koderef');
Route::get('/save-view-as-image', [CodeGeneratorController::class,'saveViewAsImage'])->name('saveViewAsImage');