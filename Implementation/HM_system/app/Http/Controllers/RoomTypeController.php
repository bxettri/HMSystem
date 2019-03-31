<?php

namespace App\Http\Controllers;

use App\roomType;
use Illuminate\Http\Request;
use redirect;

class RoomTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $roomType=new roomType();
        $roomType->roomType=$request->roomType;
        $roomType->save();
        return redirect('admin/adminRoom')->with('success','Room Type added');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\roomType  $roomType
     * @return \Illuminate\Http\Response
     */
    public function show(roomType $roomType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\roomType  $roomType
     * @return \Illuminate\Http\Response
     */
    public function edit(roomType $roomType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\roomType  $roomType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, roomType $roomType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\roomType  $roomType
     * @return \Illuminate\Http\Response
     */
    public function destroy(roomType $roomType)
    {
        //
    }
}
