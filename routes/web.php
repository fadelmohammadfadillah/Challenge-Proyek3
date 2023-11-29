<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
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

Route::get('/formBarang', [BarangController::class, 'index'])->name('formBarang');
Route::post('/storeBarang', [BarangController::class, 'store'])->name('storeBarang');
Route::get('/getBarang', [BarangController::class, 'getDataBarang'])->name('getDataBarang');
Route::get('/viewBarang', [BarangController::class, 'viewBarang'])->name('viewBarang');