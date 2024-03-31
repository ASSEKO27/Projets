<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\Productscontroller;

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



Route::get('/',[HomeController::class,'Acceuil'])->name('website.Acceuil');
Route::get('/contact',[HomeController::class,'Contact'])->name('website.Contact');
Route::get('/presentation',[HomeController::class,'Presentation'])->name('website.Presentation');
Route::get('/produits',[HomeController::class,'Produits'])->name('website.Produits');

Route::resource('categories',CategoriesController::class);

Route::resource('products',ProductsController::class);


