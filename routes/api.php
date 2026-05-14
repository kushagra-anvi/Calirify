<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\Api\HnhWebhookController;
use Illuminate\Support\Facades\Route;

Route::post('/orders', [OrderController::class, 'store'])->name('api.orders.store');

Route::post('/webhooks/hnh', [HnhWebhookController::class, 'handle'])->name('api.webhooks.hnh');
