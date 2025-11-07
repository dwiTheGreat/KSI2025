<?php

use App\Http\Controllers\MahasiswaController;

Route::get('/tambah-data', [MahasiswaController::class, 'tambahData']);
