<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApplicationController;


Route::get('applications', [ApplicationController::class, 'index'])->name('apihome'); 
Route::get('application/{id}', [ApplicationController::class, 'show'])->name('apishow'); 
Route::post('application', [ApplicationController::class, 'store'])->name('apistore'); 
Route::put('application/{id}', [ApplicationController::class, 'update'])->name('apiupdate'); 
Route::delete('application/{id}', [ApplicationController::class, 'destroy'])->name('apidestroy'); 

