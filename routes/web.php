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

Route::get('/', 'PageController@index')->name("homepage");
Route::get('/news', 'PageController@news')->name("news");

Route::get('/prodotti', 'ProductController@allProducts')->name("tutti-prodotti");
Route::get("/prodotto/{id}", 'ProductController@singleProduct')->where('id', '[0-9]+')->name("singolo-prodotto");