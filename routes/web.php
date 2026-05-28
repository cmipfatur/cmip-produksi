<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PreProcessTransactionController;

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

Route::get('/', [DashboardController::class, 'index']);
// Route::get('/PreProcessTransaction', [PreProcessTransactionController::class, 'index']);
Route::controller(PreProcessTransactionController::class)->prefix('PreProcessTransaction')->name('PreProcessTransaction.')->group(function () {
    // Halaman Data Tabel Produk (URL: /product | Name: product.index)
    Route::get('/', 'index')->name('index');
    // Halaman Form Tambah Product (URL: /product/tambah | Name: product.create)
    Route::get('/create', 'create')->name('create');
    Route::get('/{id}', 'show')->name('show');
    // Proses Simpan Data (URL: /product/simpan | Name: product.store)
    Route::post('/store', 'store')->name('store');
});
