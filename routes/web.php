<?php

use App\Http\Controllers\ParcelMachineController;
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

Route::post('/export',[ParcelMachineController::class,'export'])->name('parcelmachines.export');

Route::post('/parcelmachines/search',[ParcelMachineController::class,'search'])->name('parcelmachines.search');

Route::resource('/parcelmachines', ParcelMachineController::class );
