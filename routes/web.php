<?php

use App\Http\Controllers\Admin\AdminEventController;
use App\Http\Controllers\Admin\AdminEventPackageController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventController as ControllersEventController;
use App\Http\Controllers\SignInController as ControllersSignInController;
use App\Http\Controllers\SignUpController as ControllersSignUpController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware("guest")->group(function () {
    Route::get('/sign-in', [ControllersSignInController::class, 'index']);
    Route::get('/sign-up', [ControllersSignUpController::class, 'index']);

    Route::get('/auth/google/redirect', [SocialiteController::class, 'redirect'])->name('auth_google');
    Route::get('/auth/google/callback', [SocialiteController::class, 'callback']);
});

Route::post('/logout', [LogoutController::class, 'logout']);

Route::get('/event', [EventController::class, 'index']);
Route::get('/event/id', [EventController::class, 'show']);
Route::get('/event/id/package', [EventController::class, 'showPackage']);
Route::get('/event/id/location', [EventController::class, 'showLocation']);
Route::get('/event/id/upcoming', [EventController::class, 'showUpcoming']);

Route::get('/ticket/id', [TicketController::class, 'index']);
Route::get('/ticket/id/book', [TicketController::class, 'checkout']);
Route::get('/ticket/id/payment', [TicketController::class, 'payment']);
Route::get('/ticket/id/payment-complete', [TicketController::class, 'paymentComplete']);

// ADMIN PAGES
Route::get('/admin', [DashboardController::class, 'index']);
Route::get('/admin/users', [AdminUserController::class, 'index']);

Route::get('/admin/events', [AdminEventController::class, 'index']);
Route::get('/admin/events/create', [AdminEventController::class, 'create']);
Route::post('/admin/events', [AdminEventController::class, 'store']);
Route::get('/admin/events/{id}/edit', [AdminEventController::class, 'edit']);
Route::put('/admin/events/{id}', [AdminEventController::class, 'update']);
Route::delete('/admin/events/{id}', [AdminEventController::class, 'delete']);

Route::get('/admin/packages/{id}', [AdminEventPackageController::class, 'index']);
