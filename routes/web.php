<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\SignUpController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sign-in', [SignInController::class, 'index']);
Route::get('/sign-up', [SignUpController::class, 'index']);

Route::get('/event', [EventController::class, 'index']);
Route::get('/event/id', [EventController::class, 'show']);
Route::get('/event/id/package', [EventController::class, 'showPackage']);
Route::get('/event/id/location', [EventController::class, 'showLocation']);
Route::get('/event/id/upcoming', [EventController::class, 'showUpcoming']);
