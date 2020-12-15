<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FamilleController;
use App\Http\Controllers\MedicamentController;
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

Route::prefix('familles')->name('familles.')->group(function () {
    Route::get('/', [\App\Http\Controllers\FamilleController::class, 'index'])->name('index');
    Route::get('{famille}/medicaments', [\App\Http\Controllers\FamilleController::class, 'medicaments'])->name('medicaments');
});
Route::get('/',[\App\Http\Controllers\MedicamentController::class,'index'])->name('index');

Route::resource('medicaments', MedicamentController::class);


