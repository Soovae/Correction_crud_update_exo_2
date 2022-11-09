<?php

use App\Http\Controllers\MembreController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route Home
Route::get('/', [MembreController::class,'home'])->name('home');

// Route Create
Route::get('/membre/create', [MembreController::class, 'create'])->name('membre.create');

// Route Store
Route::post('/membre/store', [MembreController::class, 'store'])->name('membre.store');

// Route Show
Route::get('/membre/show/{id}', [MembreController::class, 'show'])->name('membre.show');

// Route Edit
Route::get('/membre/edit/{id}', [MembreController::class, 'edit'])->name('membre.edit');

// Route Update
Route::post('/membre/update/{id}', [MembreController::class, 'update'])->name('membre.update');

// Route Delete
Route::delete('/membre/delete/{id}', [MembreController::class, 'destroy'])->name('membre.delete');

// Route AllDelete
Route::delete('/delete/all', [MembreController::class, 'allDestroy'])->name('membre.delete.all');