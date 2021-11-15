<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CareerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoronaController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\GiftController;
use App\Http\Controllers\MadeController;

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('about', [AboutController::class, 'index'])->name('about');
Route::get('menu', [MenuController::class, 'index'])->name('menu');
Route::get('event', [EventController::class, 'index'])->name('event');
Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact', [ContactController::class, 'storeContact']);
Route::get('careers', [CareerController::class, 'index'])->name('career');
Route::get('gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('corona', [CoronaController::class, 'index'])->name('corona');
Route::get('made', [MadeController::class, 'index'])->name('made');
Route::get('gift', [GiftController::class, 'index'])->name('gift');
Route::get('privacy', [PrivacyController::class, 'index'])->name('privacy');

Route::get('create_account', [AuthController::class, 'createRegister'])->name('register')->middleware('guest'); // Register page
Route::post('create_account', [AuthController::class, 'storeRegister'])->middleware('guest'); // Send the register form
Route::get('login', [AuthController::class, 'createLogin'])->name('login')->middleware('guest'); // Login page
Route::post('login', [AuthController::class, 'storeLogin'])->middleware('guest'); // Send the login form
Route::post('logout', [AuthController::class, 'destroy'])->middleware('auth'); // Log out if logged in.
Route::get('activate/{uuid}', [AuthController::class, 'createActivate'])->name('createActivate');
Route::get('activate/{uuid}', [AuthController::class, 'createActivate'])->name('createActivate');