<?php

use App\Http\Controllers\FoodsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/posts', [PostsController::class, 'index']);
Route::resource('/foods', FoodsController::class);
// Route::get('/foods/create', [FoodsController::class, 'create']);

/* Route::get('products', [ProductsController::class, 'index']); //gọi tới controller product, sau đó cho hàm index thực thi
Route::get('/products/{id}', [ProductsController::class, 'detail'])->where('id', '[a-zA-Z0-9]+'); //validate dữ liệu đầu vào
Route::get('/products/{productName}', [ProductsController::class, 'info']); */
/* Route::get('/', function () {
    return view('home');
}); */

// Route::get('/users', function () {
//     return 'Hell world';
// });

// Route::get('/foods', function () {
//     return ['sashimi', 'ramen'];
// });

// Route::get('/aboutMe', function () {
//     return response()->json([
//         'name' => 'le tung',
//         'sn'=>'2k'
//     ]); //trả về đối tượng dạng json
// });

// Route::get('/out', function () {
//     return redirect('/foods');
// });
