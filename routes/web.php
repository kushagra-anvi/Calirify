<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PortalController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/order', function () {
    return view('order');
});

// Auth Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login/send-otp', [AuthController::class, 'sendOtp']);
Route::post('/login/verify', [AuthController::class, 'verifyOtp']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard Routes
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/subscriptions/{externalId}', [DashboardController::class, 'showSubscription'])->name('subscription.show');

// Portal Routes
Route::get('/calendar', [PortalController::class, 'calendar'])->name('calendar');
Route::get('/menu', [PortalController::class, 'menu'])->name('menu');
Route::get('/wallet', [PortalController::class, 'wallet'])->name('wallet');
Route::get('/profile', [PortalController::class, 'profile'])->name('profile');
Route::get('/support', [PortalController::class, 'support'])->name('support');

Route::get('/api/serviceability/check', [OrderController::class, 'checkServiceability']);
Route::get('/api/pricing', [OrderController::class, 'getPricing']);
Route::post('/api/subscriptions', [OrderController::class, 'createSubscription']);

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

Route::get('/order-status', function () {
    return view('order-status');
});

Route::get('/refund-policy', function () {
    return view('refund-policy');
});
