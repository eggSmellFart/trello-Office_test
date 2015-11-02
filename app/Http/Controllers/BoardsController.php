<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Boards;

use Requests;

class BoardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // echo $sDate;
        

        return response()->view('boards');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function get()
    {  
       $boards = Boards::all();
       
       $sDate = date('Y-m-d H:i:s', strtotime("-4 months"));

       $boards = Boards::where('last_change', '>', $sDate )->take(30)->get();

       $boards = $boards->sortBy('created_at');

        return $boards;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
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
