<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Boards;
use App\Lists;
use App\Members;

use Requests;

class BoardsController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function get()
    {  
        $boards = Boards::all();
       
        $sDate = date('Y-m-d H:i:s', strtotime("-4 months"));

        $boards = Boards::where('last_change', '>', $sDate )->orderBy('last_change', 'desc')->take(30)->get();

        // $boards = $boards->sortBy('created_at');

        header("Access-Control-Allow-Origin: *");

        return response()->json($boards);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function getOne($id = null)
    {
        $boards = Boards::where('id', '=', $id)->get();

        header("Access-Control-Allow-Origin: *");

        return response()->json($boards);  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function getBoardLists($id = null)
    {
        $boardsTrelloID = BoardsController::getBoardTrelloID($id);
        $boardsLists = Lists::where('boards_trello_id', '=', $boardsTrelloID)->get();

        header("Access-Control-Allow-Origin: *");


        return response()->json($boardsLists);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function getBoardTrelloID($id = null)
    {
        $boardsTrelloID = Boards::where('id', '=', $id )->pluck('trello_id');

        return $boardsTrelloID;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function getBoardsMembers($id = null)
    {
        $boardsTrelloID = BoardsController::getBoardTrelloID($id);
        $MemberBoards = Members::get()->pluck('boards');
        $aMemberBoards = explode('|',$MemberBoards);
      
        $boardsMembers = Members::whereIn('boards', $aMemberBoards )->get();
// dd($boardsMembers);
        header("Access-Control-Allow-Origin: *");

        return response()->json($boardsMembers);

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
