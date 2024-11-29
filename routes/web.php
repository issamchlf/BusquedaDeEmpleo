<?php

use App\Http\Controllers\Api\WorkController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationController;

Route::get('/', [WorkController::class, 'index'])->name('home');
//Route::get('/offer{id}',[WorkController::class, 'show'])->name('/offer.show');