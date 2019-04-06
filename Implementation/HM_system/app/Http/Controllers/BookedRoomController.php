<?php

namespace App\Http\Controllers;

use App\bookedRoom;
use Illuminate\Http\Request;
Use DB;

class BookedRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user =auth()->user();
        $booking= DB::table('booking')
        ->join('room','room.roomId','=','Booking.roomId')
        ->select('room.*','booking.*')
        ->where('id',$user->id)->get();


        return view('hms.Room', compact('booking'));
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
     * @param  \App\bookedRoom  $bookedRoom
     * @return \Illuminate\Http\Response
     */
    public function show(bookedRoom $bookedRoom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\bookedRoom  $bookedRoom
     * @return \Illuminate\Http\Response
     */
    public function edit(bookedRoom $bookedRoom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\bookedRoom  $bookedRoom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bookedRoom $bookedRoom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\bookedRoom  $bookedRoom
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $booking = DB::table('booking')->where('bookingId',$id);
        $booking->delete();
        return redirect()->back()->withSuccess('Booking Canceled!!!');
    }
}
