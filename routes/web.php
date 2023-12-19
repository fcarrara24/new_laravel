<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $products = config('db.pasta');
    /*dd($products);*/ /*-- dump and die (fa il var dump e muore*/ // per passare il prodotto ho bisogno di farlo tramite array associativo
    return view('home', compact('products'));
});

Route::get('/recipes', function () {
    $recipes = config('db.recipes');
    /*dd($products);*/ /*-- dump and die (fa il var dump e muore*/ // per passare il prodotto ho bisogno di farlo tramite array associativo
    return view('home', compact('recipes'));
});
