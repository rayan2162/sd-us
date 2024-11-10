<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShoppingListController;


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

Route::get('/shopping-list', [ShoppingListController::class, 'index']) -> name('shopping.list.index');

// Create korar route
Route::post('/shopping_list', [ShoppingListController::class, 'store'])->name('shopping.list.store');

// Delete korar route
Route::Delete('/shopping_list/{id}', [ShoppingListController::class, 'destory'])->name('shopping.list.destroy');

// Edit er route
Route::get('/shopping_list/{id}/edit', [ShoppingListController::class, 'edit'])->name('shopping.list.edit');

// Update
Route::put('/shopping_list/{id}', [ShoppingListController::class, 'update'])->name('shopping.list.update');