<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApplicationController;


Route::get('application',[ApplicationController::class,'index'])->name('apihome');
Route::delete('application',[ApplicationController::class,'destroy'])->name('apidestroy');
Route::post('application',[ApplicationController::class,'store'])->name('apistore');
Route::put('application',[ApplicationController::class,'update'])->name('apiupdate');
Route::get('application',[ApplicationController::class,'show'])->name('apishow');

