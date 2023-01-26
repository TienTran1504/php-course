<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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
Route::get('/products', [
    ProductsController::class,
    'index'
]);
Route::get('/about', [ProductsController::class, 'about']);

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