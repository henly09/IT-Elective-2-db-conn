<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemsController;

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

Route::get('/items', [ItemsController::class, 'index'])->name('items');
Route::get('/items/create', [ItemsController::class, 'create'])->name('items.create');
Route::post('/items/store' ,[ItemsController::class, 'store'])->name('items.store');