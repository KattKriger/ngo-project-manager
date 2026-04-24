<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/report', [ReportController::class, 'store']);


use App\Http\Controllers\ReportController;

Route::get('/reports', [ReportController::class, 'index']);