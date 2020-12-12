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
    return view('User.templates.home');
})->name('home_route');
Route::get('/products',function(){
    return view('User.templates.product');
})->name('product_route');

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
    Route::get('/add_item', 'User\OffertController@create')->name('create_offer');
    Route::resource('offer', 'User\OffertController');
});


Route::post('dropzone/upload', 'DropzoneController@upload')->name('dropzone.upload');
Route::get('dropzone/fetch', 'DropzoneController@fetch')->name('dropzone.fetch');
Route::get('dropzone/delete', 'DropzoneController@delete')->name('dropzone.delete');

/**Get Sub-category by  ajax */
Route::get('get-Subcategory', 'Admin\SubcategoryController@findSubcategroyByCategory');
