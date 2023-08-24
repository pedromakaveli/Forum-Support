<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\SupportController;


Route::get('/support', [SupportController::class, 'index'])->name('support.index');
Route::get('/support/open', [SupportController::class, 'open'])->name('support.open');
Route::post('/support', [SupportController::class, 'store'])->name('support.store');
Route::get('/support/{id}', [SupportController::class, 'show'])->name('support.show');