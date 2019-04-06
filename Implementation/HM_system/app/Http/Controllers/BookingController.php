<?php

namespace App\Http\Controllers;

use App\booking;
use Illuminate\Http\Request;
use DB;
use Redirect;
use Auth;
use Carbon;
class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



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
        $booking = new booking();
        $booking->id=Auth::User()->id;
        $booking->checkInDate=$request->checkInDate;
        $booking->checkOutDate=$request->checkOutDate;
        $booking->roomId=$request->roomNo;
        $booking->bookingDate = (Carbon\Carbon::now('Asia/Kathmandu')->toDateTimeString('Y-m-d H:i'));
        $booking->save();
        session()->flash('success', 'Booked Room successfully');
        return redirect()->to('/booking');





    }

    /**
     * Display the specified resource.
     *
     * @param  \App\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(booking $booking)
    {
        //
    }


    public function search(Request $request)
    {
        $booking=DB::table('room_type')->get();
        $checkIn = $request->checkIn;
        $checkOut = $request->checkOut;
        $roomType=$request->roomType;
        $method = $request->method();
        if ($request->isMethod('post')) {
            $booked = DB::table('booking')
            ->select('booking.roomId')
            ->where('booking.checkInDate','<=',$checkIn)
            ->Where('booking.checkOutDate','>=',$checkOut)
            ->groupBy('booking.roomId')
            ->get();

            if(!$booked->isEmpty())
            {
                foreach ($booked as $book) {
                $data[]=$book->roomId;
                }

                $rooms=DB::table('room')
                ->join('room_type','room_type.roomTypeId','=','room.roomTypeId')
                ->select('room.*','room_type.*')
                ->where('room.roomTypeId',$roomType)
                ->whereNotIn('room.roomId',$data)
                ->get();
            }
         else
            {
                $rooms=DB::table('room')
                ->join('room_type','room_type.roomTypeId','=','room.roomTypeId')
                ->select('room.*','room_type.*')
                ->where('room.roomTypeId',$roomType)
                ->get();
            }
        }
        else
             {
                $rooms = null;
             }
            return view('hms.booking', compact('booking','rooms', 'checkIn', 'checkOut'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(booking $booking)
    {
        //
    }
}
