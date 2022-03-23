<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controller\ProductController;
use app\Http\Controller\StudentController;

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

Route::resource('user','UserController');

Route::resource('student','StudentController');

Route::resource('product','ProductController');

Route::resource('category','CategoryController');

Route::resource('gallery','GalleryController');

Route::resource('admin','AdminController');

Route::resource('','HomeController');
// Route::get('/', function () {
//     return View::make('home');
// });
Route::get('home', function () {
    return View::make('pages.home');
});
Route::get('locator', function () {
    return View::make('pages.locator');
});

// Route::get('product', [
//     'uses' => 'productController@index',
//     'as' => 'product.index'
// ]);