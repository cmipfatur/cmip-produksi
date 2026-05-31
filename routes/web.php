<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PreProcessTransactionController;

Route::get('/', [DashboardController::class, 'index']);

Route::controller(PreProcessTransactionController::class)
    ->prefix('PreProcessTransaction')
    ->name('PreProcessTransaction.')
    ->group(function () {

        // ── Halaman utama ────────────────────────────────────────
        Route::get('/', 'index')->name('index');

        // ── List data (AJAX) — harus sebelum /{id} ──────────────
        Route::get('/list/all',           'getListPreProcessTransaction')->name('list');
        Route::get('/bon-bahan-baku/list', 'getListBonBahanBaku')->name('bon-bahan-baku.list');
        Route::get('/karat/list',          'getListKarat')->name('karat.list');

        // ── CRUD ─────────────────────────────────────────────────
        Route::get('/create',    'create')->name('create');
        Route::post('/store',    'store')->name('store');
        Route::get('/{id}',      'show')->name('show');
        Route::delete('/{id}',   'destroy')->name('destroy');
    });
