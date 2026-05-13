<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/order', function () {
    return view('order');
});

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
