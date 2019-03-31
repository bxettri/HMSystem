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
        $roomType=DB::table('room_type')->get();
        $room=DB::table('room')->join('room_type','room_type.roomTypeId','=','room.roomTypeId')->get();
      return view ('admin.adminRoom',compact('roomType','room') );
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
            $rooms->roomTypeId=$request->roomType;
            $rooms->roomPrice=$request->roomPrice;
            $rooms->roomNum=$request->roomNumber;
            $rooms->roomDiscription=$request->roomDiscription;
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
    public function edit(rooms $id)
    {
        $rooms=Rooms::find($id);

        return view ('/admin/adminRoom',['rooms'=>$rooms]);
    }

    /**
     *
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rooms=rooms::find($id);
        if ($request->hasfile('image'))
         {
            app('files')->delete($rooms->image);
            $picInfo = $request->file ('image');
            $picName = $picInfo->getClientOriginalName();
            $picfolder = "image/gallery/";
            $picInfo->move($picfolder,$picName);
            $picUrl=$picfolder.$picName;
            if (rooms::where('image', '=', $picUrl)->exists())
            {

                return redirect('admin/adminRoom')->with('imageNameExits', 'image file name already exits');
            }
            else
             {
                $rooms->image=$picUrl;
            }
        }

        $up_req=$request->all();

        $rooms->productname=$up_req['roomType'];
        $rooms->model=$up_req['roomPrice'];
        $rooms->Price=$up_req['roomImage'];
        $rooms->description=$up_req['description'];

        $rooms->save();

        return redirect()->to('admin/adminRoom')->withSuccess('Rooms updated!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $rooms=rooms::find($id);
        $room = DB::table('room')->where('roomId',$id);
        $room->delete();
        return redirect()->back()->withSuccess('Rooms deleted!!!');

    }
}
