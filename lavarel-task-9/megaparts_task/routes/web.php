<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductAjaxController;

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
    return view('index');
});
Route::get('/', ProductController::class.'@index')->name('index');

//admin 
Auth::routes([
    'verify' => true
]);

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){
   Route::get('/', function () {
        return view('admin.view_product');
    });
    Route::get('/users', [UserController::class, 'index'])->name('show.email');
    Route::post('/users', [UserController::class, 'sendEmail'])->name('send.email');
    Route::resource('products-ajax-crud', ProductAjaxController::class);
    
});

Route::get('cart', [ProductController::class, 'cart'])->name('cart')->middleware('verified');
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart')->middleware('verified');
Route::patch('update-cart', [ProductController::class, 'update'])->name('update.cart')->middleware('verified');
Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart')->middleware('verified');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
