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


Auth::routes();

Route::get('/', function () {
    return view('User.layouts.index');
});

/**This Group for all Admin ROUTES and will be under /admins with auth and Role Middleware */
Route::group(['middleware' => ['auth', 'role:admin'], 'prefix' => 'admins'], function () {
    Route::get('/', 'Admin\DashboardController@index');
    Route::resource('user', 'Admin\UserController');
    Route::resource('category', 'Admin\CategoryController');
    Route::resource('subcategory', 'Admin\SubcategoryController');
});

/**This Group for USer acces who need auth and Role Middleware */
Route::group(['middleware' => ['auth', 'role:user']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
});
