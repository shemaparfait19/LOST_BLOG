<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\SystemController;

// Route::get('/', [SystemController::class, 'index']);
Route::get('/',[SystemController::class, 'guest'])->name('blog.guest');

Route::get('/blog/{id}', [SystemController::class, 'show'])->name('blog.show');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/blog', [SystemController::class, 'index'])->name('blog.index');
    Route::get('/blogcreate', [SystemController::class, 'create'])->name('blog.create');
    Route::post('/blogcreate', [SystemController::class, 'insert'])->name('blog.insert');
    Route::get('/blog/{id}/edit', [SystemController::class, 'edit'])->name('blog.edit');
    Route::put('/blog/{id}', [SystemController::class, 'update'])->name('blog.update');
    Route::delete('/blog/{id}', [SystemController::class, 'destroy'])->name('blog.destroy');
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    

});

require __DIR__.'/auth.php';
