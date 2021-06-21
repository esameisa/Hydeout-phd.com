<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('events/calendar/', 'Api\EventsController@getEventsDatesByMonth');
Route::get('events', 'Api\EventsController@getEventByDate');

Route::get('{entity_type}/{entity_id}/gallery/', 'Api\GalleryController@show');

// todo: check usage
Route::get('events/{id}', 'Api\EventsController@show');
