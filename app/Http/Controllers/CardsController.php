<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Cards;


use Requests;

class CardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // $cards = Cards::all();
        
        return response()->view('home');
        // return  $cards;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function get()
    {
     
        $cards = Cards::all();
     
        header("Access-Control-Allow-Origin: *");
     
        return response()->json($cards);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function getOne($id = null)
    {
     
        $cards = Cards::where('id', '=', $id)->get();
     
        header("Access-Control-Allow-Origin: *");
     
        return response()->json($cards);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function getOneWithTrelloID($id = null)
    {
        $cards = Cards::where('trello_id', '=', $id)->get();
        header("Access-Control-Allow-Origin: *");
        return response()->json($cards);
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
