<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApplicationController;


Route::get('applications', [ApplicationController::class, 'index'])->name('apihome'); 
Route::get('applications/{id}', [ApplicationController::class, 'show'])->name('apishow'); 
Route::post('applications', [ApplicationController::class, 'store'])->name('apistore'); 
Route::put('applications/{id}', [ApplicationController::class, 'update'])->name('apiupdate'); 
Route::delete('applications/{id}', [ApplicationController::class, 'destroy'])->name('apidestroy'); 
