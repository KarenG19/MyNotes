<?php

use App\Http\Controllers\NotesController;
use Illuminate\Support\Facades\Route;



Route::get('/', [NotesController::class, 'index'])->name('notes');

Route::view('/profile', 'profile')->name('profile');

Route::view('/about', 'about')->name('about');

Route::view('/contact', 'contact')->name('contact');
