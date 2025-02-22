<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/questions', [QuestionController::class, 'index'])->name('questions.index');
    Route::post('/question/store', [QuestionController::class, 'store'])->name('question.store');
    Route::get('/question/{id}/show', [QuestionController::class, 'show'])->name('question.show');
    Route::get('/question/{id}/edit', [QuestionController::class, 'edit'])->name('question.edit');
    Route::put('/question/{id}/update', [QuestionController::class, 'update'])->name('question.update');
    Route::delete('/question/{id}/delete', [QuestionController::class, 'destroy'])->name('question.delete');

    Route::post('/answer/store', [AnswerController::class, 'store'])->name('answer.store');
});

require __DIR__.'/auth.php';
