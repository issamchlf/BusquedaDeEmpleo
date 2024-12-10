<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ApplicationController;

Route::get('/', [WorkController::class, 'index'])->name('home');
Route::get('/works/{id}', [WorkController::class, 'show',])->name('show');
Route::get('/works/{id}/edit', [WorkController::class, 'edit'])->name('works.edit');
Route::put('/works/{id}', [WorkController::class, 'update'])->name('works.update');





