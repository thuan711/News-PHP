<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TinController;
use App\Http\Controllers\NewsController;

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
Route::get('/tin/{id}',[TinController::class, 'chitiet']);
Route::get('/loai/{id}', [TinController::class,'tinTL']);
Route::get('/timkiem/{tukhoa}', [TinController::class,'timkiem']);
Route::get('/lienhe', function(){ return view('lienhe');});
Route::get('/hello', function(){ return view('welcome');});
Route::get('/tinmoi',[TinController::class, 'index']);

// admin
Route::resource('admin/tin', NewsController::class);


// Route::get('/tin',function(){
//     $query = \DB::table('tin')
//     ->select('id','tieuDe','ngayDang')
//     ->orderBy('ngayDang','desc')
//     ->limit(10);
//     $data = $query->get();
//     return view('tin',['data' => $data]);
// });
Route::get('/tin/{id}',function($id){
    $query = \DB::table('tin')
    ->select('id','tieuDe','tomTat')
    ->where('idLT','=',$id)
    ->orderBy('ngayDang','desc')
    ->limit(10);
    $data = $query->get();
    return view('tin',['data' => $data]);
});
