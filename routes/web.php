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
Route::get('/', 'Guest\PagesController@index')->name('index');
Route::get('blog', 'Guest\PagesController@blog')->name('blog');
Route::get('about', 'Guest\PagesController@about')->name('about');


Auth::routes(['register' => false]);

Route::get('/admin', 'Admin\PagesController@index')->name('admin');
Route::resource('admin/articoli', 'Admin\ArticleController');
