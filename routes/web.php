<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationController;

Route::get('/', [ApplicationController::class, 'index'])->name('home');
Route::get('/application{id}',[ApplicationController::class, 'show'])->name('/application.show');