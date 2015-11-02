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
Route::resource('Trello_Office/boards', 'BoardsController@index' );
Route::resource('api/Boards', 'BoardsController@get');

Route::resource('Trello_Office/cards', 'CardsController@index');
Route::resource('api/Cards', 'CardsController@get');


Route::resource('api/Members', 'MembersController');
// Route::resource('Trello-Office/members', 'CardsController');
