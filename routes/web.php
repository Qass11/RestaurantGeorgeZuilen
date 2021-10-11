<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CareerController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('about', [AboutController::class, 'index'])->name('about');
Route::get('menu', [MenuController::class, 'index'])->name('menu');
Route::get('event', [EventController::class, 'index'])->name('event');
Route::get('contact', [ContactController::class, 'index'])->name('contact');


Route::get('careers', [CareerController::class, 'index'])->name('career');