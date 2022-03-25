<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controller\ProductController;
use app\Http\Controller\StudentController;
use app\Http\Controller\LoginController;

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

Route::get('/uploadimage','ImageController@index');   

Route::post('/uploadimage','ImageController@store');


Route::get('registration', [App\Http\Controllers\LoginController::class, 'registration'])->name('register');
Route::post('post-registration', [App\Http\Controllers\LoginController::class, 'postRegistration'])->name('register.post'); 


Route::get('login','LoginController@index');   
Route::get('register','LoginController@register');   
// Route::get('/login', [LoginController::class, 'index'])->name('login');
// Route::post('actionlogin','LoginController@actionlogin');   
Route::post('actionlogin', [App\Http\Controllers\LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('actionlogout', [App\Http\Controllers\LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::post('postRegistration', [App\Http\Controllers\LoginController::class, 'postRegistration'])->name('postRegistration');


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