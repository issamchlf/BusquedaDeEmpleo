<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\WorkController;
use App\Http\Controllers\Api\DetailController;




Route::get('/works', [WorkController::class, 'index'])->name('apihome');
Route::get('/works/{id}', [WorkController::class, 'show'])->name('apishow');
Route::post('/works', [WorkController::class, 'store'])->name('apistore');
Route::put('/works/{id}', [WorkController::class, 'update'])->name('apiupdate');
Route::delete('/works/{id}', [WorkController::class, 'destroy'])->name('apidestroy');
Route::post('/works/{workId}/details', [DetailController::class, 'store'])->name('detailstore');

Route::get('{id}', [DetailController::class, 'index'])->name('api.details.index');
Route::post('{workId}', [DetailController::class, 'store'])->name('api.details.store');
Route::get('{workId}/show', [DetailController::class, 'show'])->name('api.details.show');
