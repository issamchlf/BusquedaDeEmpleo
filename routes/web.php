<?php

use App\Http\Controllers\WorkController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationController;

Route::get('/', [WorkController::class, 'index'])->name('home');
Route::get('/works{id}',[WorkController::class, 'show'])->name('/work.show');