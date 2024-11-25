<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\ApplicationController;

Route::get('/', [ApplicationController::class, 'index'])->name('home');