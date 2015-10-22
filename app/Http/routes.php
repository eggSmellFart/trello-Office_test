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

Route::get('/', function () {
    return view('index');
});
// Route::get('/ticket', function () {
// 	return view('ticket');
// 	});
Route::resource('api/Ticket', 'TicketController');
Route::resource('api/Cards', 'CardsController');
Route::resource('Trello-Office/', 'CardsViewController@index');
Route::resource('Trello-Office/ticket','TicketViewController@index');
