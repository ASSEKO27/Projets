<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\Productscontroller;
use App\Http\Controllers\WebsiteController;

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



Route::get ('/',[WebsiteController::class,'Acceuil'])->name('website.Acceuil');
Route::get('/contact',[WebsiteController::class,'Contact'])->name('website.Contact');
Route::get('/presentation',[WebsiteController::class,'Presentation'])->name('website.Presentation');
Route::get('/produits',[WebsiteController::class,'Produits'])->name('website.Produits');

//les routes seront accessibles que pour les utilisateurs authentifier
Route::middleware(['auth'])->group(function (){


Route::resource('categories',CategoriesController::class);
Route::resource('products',ProductsController::class);
});

Route::post("panier/addtocart",[PanierController::class,"addtocart"])->name("panier.addtocart");
Route::get("panier",[PanierController::class,"panier"])->name("panier.panier");
Route::get("panier/delete/{indice}",[PanierController::class,"delprodpanier"])->name("panier.delprodpanier");
Route::get("panier/vide",[PanierController::class,"viderpanier"])->name("panier.viderpanier");




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
