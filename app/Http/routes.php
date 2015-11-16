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

// Route::get('/', function () {
//     return view('index');
// });
// Route::get('api/Ticket', function() {
// 	$tickets = Ticket::all();
//     return $tickets;
// });
// Route::get('/ticket', function () {
// 	return view('ticket');
// 	});
// Route::get('/', function() {
// 	$cards = Cards::all();
// 	return $cards;
// });
Route::resource('api/Boards', 'BoardsController@get');
Route::get('Trello-Office/boards', 'BoardsController@index');

Route::resource('api/Cards', 'CardsController@get');
Route::get('Trello-Office/cards', 'CardsController@index');

Route::resource('api/Members', 'MembersController@get');
Route::get('Trello-Office/members', 'MembersController@index');
// Route::get('Trello-Office/members/{id?}', 'MembersController@getOneMember');
Route::get('api/OneMember/{id?}', 'OneMemberController@get');
Route::get('Trello-Office/member/{id?}', 'OneMemberController@index');

Route::resource('/', 'RouteException@get');
Route::get('Trello-Office/', 'RouteException@index');

