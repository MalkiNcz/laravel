<?php

use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



    Route::prefix('books')->group(function () {
        Route::get('/', [BookController::class, 'index'])->name('books.index');
        Route::get('create', [BookController::class, 'create'])->name('books.create');
        Route::post('store', [BookController::class, 'store'])->name('books.store');
    });


    Route::prefix('authors')->group(function () {
        Route::get('/', [AuthorsController::class, 'index'])->name('authors.index');
        Route::get('create', [AuthorsController::class, 'create'])->name('authors.create');
        Route::post('store', [AuthorsController::class, 'store'])->name('authors.store');
    });
});



require __DIR__.'/auth.php';
