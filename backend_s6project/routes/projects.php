<?php
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;


Route::resource('/project', ProjectController::class)->middleware('auth');
Route::resource('/activity', ActivityController::class)->middleware('auth');