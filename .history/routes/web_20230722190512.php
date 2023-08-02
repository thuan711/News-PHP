<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TinController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\LoaiTinController;

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

Route::get('/',[TinController::class, 'index']);
Route::get('/tin/{id}',[TinController::class, 'chitiet']);
Route::get('/loai/{id}', [TinController::class,'tinTL']);
Route::get('/timkiem/{tukhoa}', [TinController::class,'timkiem']);
Route::get('/lienhe', function(){ return view('lienhe');});
Route::get('/about', function(){ return view('about');});
Route::get('/hello', function(){ return view('welcome');});
Route::get('/tinmoi',[TinController::class, 'tin']);

//học
Route::get('/addcate',function(){ return view('categories.add');});
Route::post('/addcate', [TinController::class, 'addCate']);
Route::get('/listcate', [TinController::class, 'listCate'])->name('listcate');
Route::get('/delcate/{id}', [TinController::class, 'delCate'])->name('delcate');
Route::get('/editcate/{id}', [TinController::class, 'editCate'])->name('editcate');
Route::post('/editcate/{id}', [TinController::class, 'updateCate']);
Route::get('/postincate/{id}', function($id) {
    $posts = App\Models\Category::find($id)->posts;
    echo $posts;
});




// admin
Route::get('/admin', function(){ return view('admin.admin');});
Route::group(['prefix' => 'admin'], function() {
    Route::get('/admin', function(){ return view('admin');});
    Route::resource('/loaitin', LoaiTinController::class);
    Route::resource('/tin', NewsController::class);
});



// Route::get('/tin',function(){
//     $query = \DB::table('tin')
//     ->select('id','tieuDe','ngayDang')
//     ->orderBy('ngayDang','desc')
//     ->limit(10);
//     $data = $query->get();
//     return view('tin',['data' => $data]);
// });
// Route::get('/tin/{id}',function($id){
//     $query = \DB::table('tin')
//     ->select('id','tieuDe','tomTat')
//     ->where('idLT','=',$id)
//     ->orderBy('ngayDang','desc')
//     ->limit(10);
//     $data = $query->get();
//     return view('tin',['data' => $data]);
// });
// Route::get('/tin/{id}',function($id){
//     $tin = \DB::table('tin')
//     ->where('id',$id)
//     ->first();
//     return view('tin',['tin' => $tin]);
// });
