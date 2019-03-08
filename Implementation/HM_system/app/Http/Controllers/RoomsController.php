<?php

namespace App\Http\Controllers;

use App\rooms;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $room=new rooms;
        $room->roomType=$request->roomType;
        $room->roomPrice=$request->roomPrice;
        $room->save();
        return redirect()->to('/admin/adminRoom');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function show(rooms $rooms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function edit(rooms $rooms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rooms $rooms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function destroy(rooms $rooms)
    {
        //
    }
}
