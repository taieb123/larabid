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
//     return view('Admin.layouts.index');
// });

Auth::routes();



Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => ['auth', 'role:admin'], 'prefix' => 'admins'], function () {
    Route::get('/', 'Admin\DashboardController@index');
});


Route::group(['middleware' => ['auth', 'role:user']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
});
