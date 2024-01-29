<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SpecialityController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('/inicio', [AdminController::class, 'index'])->name('admin.index');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//TODO: Prácticamente tiene lo mismo de AdminController.php

//TODO: Rutas Especialidades
Route::get('/specialities',[SpecialityController::class,'index'])->name('specialities.index');
//TODO: Rutas Especialidades de Create
Route::get('/specialities/create',[SpecialityController::class,'create'])->name('specialities.create');//(1)

require __DIR__.'/auth.php';
