<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

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

Route::get('/users', [UsersController::class, 'index'])->name('users.index')->middleware('auth');
Route::get('/users/{iduser}/edit', [UsersController::class, 'edit'])->name('users.edit')->middleware('auth');
Route::patch('/users/{iduser}', [UsersController::class, 'update'])->name('users.update')->middleware('auth');
Route::delete('/users/{iduser}', [UsersController::class, 'destroy'])->name('users.destroy')->middleware('auth');

Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);

Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

