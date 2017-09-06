<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['web']], function () {
	Route::resource('admin/categories', 'Admin\\CategoriesController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('admin/capacity', 'Admin\\CapacityController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('admin/generation', 'Admin\\GenerationController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('admin/posts', 'Admin\\PostsController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('admin/posts', 'Admin\\PostsController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('admin/posts', 'Admin\\PostsController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('admin/item', 'Admin\\ItemController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('admin/quotation', 'Admin\\quotationController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('admin/country', 'Admin\\CountryController');
});