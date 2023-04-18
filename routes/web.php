<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\SubcategorieController; 

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
    return view('welcome');
});
Route::get('/categories', [CategorieController::class, 'index'])->name('categories');
Route::get('/categories/{category_id}/subcategories', [CategorieController::class, 'show'])->name('subcategories');
Route::get('/subcategories/{subcategory_id}/items', [SubcategorieController::class, 'show'])->name('items');
Route::post('/messages', [UserController::class, 'store'])->name('create_message');