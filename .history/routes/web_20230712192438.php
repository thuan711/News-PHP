<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TinController;
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

Route::get('/',[TinController::class, 'home']);
Route::get('/timkiem/{tukhoa}', [TinController::class,'timkiem']);
Route::get('/lienhe', function(){ return view('lienhe');});
Route::get('/tinmoi',[TinController::class, 'index']);
Route::get('tin/{id}',[TinController::class, 'chitiet']);
Route::get('/{id}', [TinController::class,'tinTL']);