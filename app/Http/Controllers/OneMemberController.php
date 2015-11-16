<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\OneMember;
use Illuminate\Http\Request;

use Response;
use Requests;


class OneMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($id = '')
    {
        // var_dump($id);
        // return response()->view('one-member',['id' => $id]);
        return response()->view('one-member');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function get($id = '')
    {
        $member = OneMember::where('id', '=', $id)->get();
        return response()->json($member);  
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
