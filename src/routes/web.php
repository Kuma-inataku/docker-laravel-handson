<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampleController;

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

// index
Route::get('/', [SampleController::class, 'index'])->name("index");

// // todo: show
// Route::get('/show', [SampleController::class, 'show'])->name("show");

// create
Route::get('/create', [SampleController::class, 'create'])->name("create");

// store
Route::post('/store', [SampleController::class, 'store'])->name("store");
