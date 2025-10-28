<?php

use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';


Route::get('/review/{id}', [ReviewController::class, "show"]);
Route::get('/categories/{id}', [CategoryController::class, "show"]);
