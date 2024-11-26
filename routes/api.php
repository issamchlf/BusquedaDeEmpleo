<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApplicationController;


Route::get('applications', [ApplicationController::class, 'index'])->name('apihome'); // Fetch all applications
Route::get('applications/{id}', [ApplicationController::class, 'show'])->name('apishow'); // Fetch specific application
Route::post('applications', [ApplicationController::class, 'store'])->name('apistore'); // Create new application
Route::put('applications/{id}', [ApplicationController::class, 'update'])->name('apiupdate'); // Update specific application
Route::delete('applications/{id}', [ApplicationController::class, 'destroy'])->name('apidestroy'); // Delete specific application

