<?php

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
Route::group(['prefix' => 'trucks'], function(){
    Route::get('', [App\Http\Controllers\TruckController::class, 'index'])->name('truck.index');
    Route::get('create/', [App\Http\Controllers\TruckController::class, 'create'])->name('truck.create');
    Route::post('store/', [App\Http\Controllers\TruckController::class, 'store'])->name('truck.store');
    Route::get('edit/{truck}', [App\Http\Controllers\TruckController::class, 'edit'])->name('truck.edit');
    Route::post('update/{truck}', [App\Http\Controllers\TruckController::class, 'update'])->name('truck.update');
    Route::post('destroy/{truck}', [App\Http\Controllers\TruckController::class, 'destroy'])->name('truck.destroy');
    Route::get('show/{truck}', [App\Http\Controllers\TruckController::class, 'show'])->name('truck.show');
  });