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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'ProductController@index')->name('product_index');
Route::post('/create/filter', 'ProductController@createFilter')->name('product_filter');
Route::get('list-with-filter', 'ProductController@withFilter')->name('product_with_filter');