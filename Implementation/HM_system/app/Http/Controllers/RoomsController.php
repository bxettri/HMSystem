<?php

namespace App\Http\Controllers;

use App\rooms;
use Illuminate\Http\Request;
use DB;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $rooms=new rooms();
      $rooms=$rooms->get();
      return view ('admin.adminRoom',[
          'room'=>$rooms
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $rooms=new rooms();
        $picInfo=$request->file('roomImage');
        $picName=$picInfo->getClientOriginalName();
        $picFolder="image/gallery/";
        $picInfo->move($picFolder,$picName);
        $picUrl=$picFolder.$picName;

        if(rooms::where('roomImage','=',$picUrl)->exists())
        {
            return redirect('/admin/adminRoom')->with('roomNameExists','Same Image file name found. Please enter again');


        }

        else
        {
            $rooms->roomType=$request->roomType;
            $rooms->roomPrice=$request->roomPrice;
            $rooms->roomImage=$picUrl;
            $rooms->save();
            return redirect()->to('/admin/adminRoom')->with('success','Data added');
        }


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
