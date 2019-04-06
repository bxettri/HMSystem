<?php

namespace App\Http\Controllers;

use App\RoomService;
use Illuminate\Http\Request;
use DB;
use redirect;

class RoomServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $serviceType=DB::table('service_type')->get();
        $services=DB::table('services')->join('service_type','service_type.serviceTypeId','=','services.serviceTypeId')->get();
      return view ('hms.RoomService',compact('serviceType','services') );
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
     * @param  \App\RoomService  $roomService
     * @return \Illuminate\Http\Response
     */
    public function show(RoomService $roomService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RoomService  $roomService
     * @return \Illuminate\Http\Response
     */
    public function edit(RoomService $roomService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RoomService  $roomService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RoomService $roomService)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RoomService  $roomService
     * @return \Illuminate\Http\Response
     */
    public function destroy(RoomService $roomService)
    {
        //
    }
}
