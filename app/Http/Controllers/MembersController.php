<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Boards;
use App\Lists;
use App\Members;
use App\Cards;

use Requests;
use Response;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // return response()->view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function get()
    {
        $members = Members::all();
            
        header("Access-Control-Allow-Origin: *");

        return response()->json($members);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function getOne($id = null)
    {

        $members = Members::where('id', '=', $id)->get();

        header("Access-Control-Allow-Origin: *");

        return response()->json($members);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function getBoards($id = null)
    {
        $boardsTrelloID = new BoardsController;
        $boardsTrelloID = $boardsTrelloID->getBoardTrelloID($id);
        $memberBoards = Members::find($id)->boards;
        $aMemberBoards = explode('|',trim($memberBoards, '|'));
        $boardsMembers = Boards::whereIn('trello_id', $aMemberBoards )->get();
//dd($aMemberBoards,$boardsTrelloID,$boardsMembers);
        header("Access-Control-Allow-Origin: *");

        return response()->json($boardsMembers);

    }
    public function getCards($id = null)
    {
        $cardsController = new CardsController;
        
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
