<?php

use App\Http\Controllers\DropzoneController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [DropzoneController::class, 'index'])->name('dropzone');
Route::post('/dropzone', [DropzoneController::class, 'upload'])->name('dropzone.upload');
