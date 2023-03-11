<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnnonceController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\AnnonceController::class, 'index'])->name('annonces.index');
Route::get('/{id}', [App\Http\Controllers\AnnonceController::class, 'show'])->name('annonces.show');
Route::get('/annonces/create', [App\Http\Controllers\AnnonceController::class, 'create'])->name('annonces.create');
Route::post('/annonces', [App\Http\Controllers\AnnonceController::class, 'createdOnDB'])->name('annonces.createdOnDB');
Route::get('/annonces/validate/{token}', [App\Http\Controllers\AnnonceController::class, 'validateAnnonce'])->name('annonces.validate');
Route::get('/annonces/delete/{token}', [App\Http\Controllers\AnnonceController::class, 'delete'])->name('annonces.delete');
