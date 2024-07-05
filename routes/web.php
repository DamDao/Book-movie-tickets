<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DiscountController;
use App\Http\Controllers\MovieController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [MovieController::class, 'index'])->name('index');
Route::get('movie-list', [MovieController::class, 'movieList'])->name('movie-list');
Route::get('detail', [MovieController::class, 'show'])->name('detail');
Route::get('movie-ticket-plan', [MovieController::class, 'ticket'])->name('ticket');
Route::get('movie-seat-plan', [MovieController::class, 'seat'])->name('seat');
Route::get('popcorn', [MovieController::class, 'popcorn'])->name('popcorn');
Route::get('movie-checkout', [MovieController::class, 'checkout'])->name('checkout');
Route::get('form-sign-up', [MovieController::class, 'FormSignUp'])->name('FormSignUp');
Route::get('form-sign-in', [MovieController::class, 'FormSignIn'])->name('FormSignIn');

Route::prefix('admin')->group(function(){
    Route::get('/',[AdminController::class,'index'])->name('admin.index');
    Route::resource('category', CategoryController::class);
    Route::resource('discount', DiscountController::class);


});
