<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\FoodsController;



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
Route::get('/', [PagesController::class, 'index']);
Route::get('/about',[PagesController::class, 'about']);

Route::get('/posts',[PostsController::class, 'index']);

// Route::get('/foods',[FoodsController::class, 'index']);
//dùng resource thay get thì nó sẽ thêm toàn bộ CRUD
Route::resource('/foods',FoodsController::class);




// Route::get('/products', [
//     ProductsController::class,
//     'index'
// ])->name('products');
// Route::get('/products/{productName}/{id}', [ProductsController::class,'detail'])
// ->where([
//     'productName'=>'[a-zA-Z0 -9]+',
//     'id'=>'[0-9]+'
// ]);
// // '[a-zA-Z0 -9]+'
// Route::get('/about', [ProductsController::class, 'about']);

// Route::get('/', function () {
//     return view('home');
//     // return env('MY_NAME');
// });
// Route::get('/users', function () {
//     return 'This is users page';
// });
// Route::get('/foods', function () {
//     return ['1', '2', '3'];
// });
// Route::get('about', function () {
//     return response()->json([
//         'name' => "Tran Dung Tien",
//         "email" => "trandungtien1504@gmail.com"
//     ]);
// });

// Route::get('/something', function () {
//     return redirect('/');
//  });