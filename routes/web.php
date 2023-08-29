<?php

use App\Http\Controllers\NotesController;
use Illuminate\Support\Facades\Route;


Route::view('/home', 'home')->name('home');


// Route::get('/notes', [NotesController::class, 'index'])->name('notes.index');
// Route::get('/notes/create', [NotesController::class, 'create'])->name('notes.create');
// Route::post('/notes', [NotesController::class, 'store'])->name('notes.store');
// Route::get('/notes/{idnote}', [NotesController::class, 'show'])->name('notes.show');
// Route::get('/notes/{idnote}/edit', [NotesController::class, 'edit'])->name('notes.edit');
// Route::patch('/notes/{idnote}', [NotesController::class, 'update'])->name('notes.update');
// Route::delete('/notes/{idnote}', [NotesController::class, 'destroy'])->name('notes.destroy');

Route::resource('notes', NotesController::class, [
    'names' => 'notes',
    'parameters' => ['notes' => 'idnote']
]);


Route::view('/profile', 'profile')->name('profile');

