<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [NoteController::class, 'index']);

// Route::post('/notes', [NoteController::class, 'getNotes'])->name('seeNotes');
Route::post('/note', [NoteController::class, 'postNote'])->name('saveNote');