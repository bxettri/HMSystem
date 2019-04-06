<?php

namespace App\Http\Controllers;

use App\serviceType;
use Illuminate\Http\Request;
use redirect;

class ServiceTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $serviceType=new serviceType();

        $serviceType->serviceType=$request->serviceType;
        $serviceType->save();
        return redirect('admin/adminService')->with('success','Service Type added');
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
     * @param  \App\serviceType  $serviceType
     * @return \Illuminate\Http\Response
     */
    public function show(serviceType $serviceType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\serviceType  $serviceType
     * @return \Illuminate\Http\Response
     */
    public function edit(serviceType $serviceType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\serviceType  $serviceType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, serviceType $serviceType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\serviceType  $serviceType
     * @return \Illuminate\Http\Response
     */
    public function destroy(serviceType $serviceType)
    {
        //
    }
}
