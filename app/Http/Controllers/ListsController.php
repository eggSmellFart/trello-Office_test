<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Lists;


use Requests;
use Response;

class ListsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function get()
    {
        $lists = Lists::all();
        
        header("Access-Control-Allow-Origin: *");

        return response()->json($lists); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function getOne($id = null)
    {
        $lists = Lists::where('id', '=' , $id)->get();

        header("Access-Control-Allow-Origin: *");

        return response()->json($lists);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function getBoardLists($id)
    {
        $boardsLists = Lists::where('boards_trello_id', '=', $id)->get();
        return $boardsLists;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
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
