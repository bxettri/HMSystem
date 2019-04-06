<?php

namespace App\Http\Controllers;

use App\service;
use Illuminate\Http\Request;
use DB;

class ServiceController extends Controller
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
      return view ('admin.adminService',compact('serviceType','services') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $service=new service();

          $service->serviceTypeId=$request->serviceType;
          $service->serviceName=$request->serviceName;
          $service->servicePrice=$request->servicePrice;

          $service->save();
          return redirect()->to('/admin/adminService')->with('success','Data added');
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
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $services = DB::table('services')->where('serviceId',$id);
        $services->delete();
        return redirect()->back()->withSuccess('Service deleted!!!');
    }
}
