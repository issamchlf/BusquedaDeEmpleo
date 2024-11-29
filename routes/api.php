<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\WorkController;



Route::get('works', [WorkController::class, 'index'])->name('apihome'); 
Route::get('works/{id}', [WorkController::class, 'show'])->name('apishow'); 
Route::post('works', [WorkController::class, 'store'])->name('apistore'); 
Route::put('works/{id}', [WorkController::class, 'update'])->name('apiupdate'); 
Route::delete('works/{id}', [WorkController::class, 'destroy'])->name('apidestroy'); 
