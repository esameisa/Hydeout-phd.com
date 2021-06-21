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

// Route::get('/', function () {
// 	return redirect('login');
// });
Route::get('/','FrontController@index');
// Auth::routes();

// Login Routes...
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::post('message/store','FrontController@storeMessage')->name('store_message');
Route::get('gallery/get/{id}','FrontController@getGallery')->name('get_gallery');
Route::get('api/galleries','FrontController@getGalleries');
Route::group(['prefix' => 'dashboard', 'middleware' => ['auth']], function() {
	Route::resource('users', 'UserController');
	Route::resource('stores','StoreController');
	Route::resource('messages','MessageController');
	Route::resource('contacts','ContactController');
	Route::resource('settings','SettingController');
	Route::resource('points','PointController');
	Route::resource('events', 'EventsController');
	Route::resource('galleries', 'GalleryController');
	Route::resource('events.galleries', 'GalleryController', ['except' => ['index']]);
	Route::resource('galleries.items', 'GalleryItemController');
});

/**
 * Route group for ajax
 */
Route::group(['prefix' => 'ajax', 'namespace' => 'Ajax','as' => 'ajax.' ,'middleware' => ['auth']], function() {
	Route::resource('users', 'UserController');
	Route::resource('stores', 'StoreController');
	Route::resource('messages','MessageController');
	Route::resource('contacts','ContactController');
	Route::resource('settings','SettingController');
	Route::resource('points','PointController');
	Route::resource('events', 'EventsController');
	Route::resource('galleries', 'GalleryController');
	Route::resource('galleries.items', 'GalleryItemController');
});
