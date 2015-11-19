<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Members;
use Illuminate\Http\Request;

use Requests;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return response()->view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function get()
    {
        $members = Members::all();
            

        return $members;
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
