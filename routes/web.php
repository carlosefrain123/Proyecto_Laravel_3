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
//TODO: Rutas Especialidad de Store
Route::post('/specialities',[SpecialityController::class,'store'])->name('specialities.store');//(2)
require __DIR__.'/auth.php';
//TODO: Rutas Especialidad de edit
Route::get('/specialities/{speciality}/edit',[SpecialityController::class,'edit'])->name('specialities.edit');//(1)
//TODO: Rutas Especialidad de update
Route::put('/specialities/{speciality}', [SpecialityController::class, 'update'])->name('specialities.update');
//TODO: Rutas Especialidad de destroy
Route::delete('/specialities/{speciality}', [SpecialityController::class, 'destroy'])->name('specialities.destroy');
