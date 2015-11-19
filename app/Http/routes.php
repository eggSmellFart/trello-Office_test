<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::resource('api/Boards', 'BoardsController@get');
Route::resource('api/Cards', 'CardsController@get');
Route::resource('api/Members', 'MembersController@get');
Route::resource('api/Lists', 'ListsController@get');
Route::resource('api/Cards2Members', 'CardsToMembersController@get');

Route::get('api/OneMember/{id?}', 'OneMemberController@get');
Route::resource('/', 'RouteException@get');

