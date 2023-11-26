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

//blade sayfamızın açılması için get methodu ile bir route oluşturuyoruz
Route::get('/', [DropzoneController::class, 'index'])->name('dropzone');
//resim dosyalarımızı yüklemek için post methodu ile bir route oluşturuyoruz
Route::post('/dropzone', [DropzoneController::class, 'upload'])->name('dropzone.upload');
