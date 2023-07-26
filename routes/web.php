<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\sesiController;
use App\Http\Middleware\UserAkses;
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
Route::middleware(['guest'])->group(function(){
    Route::get('/',[sesiController::class, 'index'])->name('login');
    Route::post('/',[sesiController::class, 'login']);
});
route::get('/home',function(){
    return redirect('/admin');
});

route::middleware(['auth'])->group(function(){
    route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin/Admin',[AdminController::class, 'admin'])->middleware('userAkses:admin');
    Route::get('/admin/mahasiswa',[AdminController::class, 'mahasiswa'])->middleware('userAkses:mahasiswa');
    Route::get('/admin/dosen',[AdminController::class, 'dosen'])->middleware('userAkses:dosen');
    Route::get('/logout',[SesiController::class, 'logout']);
});
