<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AprendizController;
use Illuminate\Support\Facades\Route;


Route::redirect('/', '/aprendices');

Route::middleware(['auth'])->group(function () {
    Route::resource('aprendices', AprendizController::class)->parameters(['aprendices' => 'aprendiz']);
});

Route::get('/dashboard', function () {
    return redirect()->route('aprendices.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';