<?php

use App\Http\Controllers\NotesController;
use Illuminate\Support\Facades\Route;


Route::view('/home', 'home')->name('home');

Route::get('/notes', [NotesController::class, 'index'])->name('notes.index');

Route::get('/notes/{idnote}', [NotesController::class, 'show'])->name('notes.show');

Route::view('/profile', 'profile')->name('profile');

