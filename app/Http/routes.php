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
/* ==================== CARDS ======================= */

Route::get('api/cards', 'CardsController@get');
Route::get('api/cards/{id?}', 'CardsController@getOne');
Route::get('api/cardsToMembers/{id?}', 'CardsToMembersController@get');
Route::get('api/cardsTrelloID/{id?}', 'CardsController@getOneWithTrelloID');

/* ==================== BOARDS ======================= */

Route::get('api/boards', 'BoardsController@get');
Route::get('api/boards/{id?}', 'BoardsController@getOne');
Route::get('api/boards/{id?}/lists', 'BoardsController@getBoardLists');
Route::get('api/boards/{id?}/members', 'BoardsController@getBoardsMembers');

/* ==================== CARDS 2 MEMBERS ======================= */


/* ==================== MEMBERS ======================= */

Route::get('api/members', 'MembersController@get');
Route::get('api/members/{id?}', 'MembersController@getOne');
Route::get('api/members/{id?}/boards', 'MembersController@getBoards');
Route::get('api/members/{id?}/cards', 'CardsController@get' );


/* ==================== LISTS ======================= */

Route::get('api/lists', 'ListsController@get');
Route::get('api/lists/{id?}', 'ListsController@getOne');
Route::get('api/listsTrelloID/{id?}', 'ListsController@getOneWithTrelloID');

/* ==================== CARDS 2 MEMBERS ======================= */




// Route::get('/', 'RouteException@get');

