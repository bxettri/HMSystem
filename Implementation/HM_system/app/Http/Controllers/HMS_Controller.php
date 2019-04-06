<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HMS_Controller extends Controller
{

    public function index()
    {
        return view('hms.index');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function login()
    {
       return view('auth.login');
    }

   public function aboutus()
   {
       return view('hms.aboutus');
   }

   public function gallery()
   {
       return view('hms.gallery');
   }

   public function booking()
   {
       return view('hms.booking');
   }

   public function test()
   {
       return view('hms.test');
   }



   public function adminRoom()
   {
       return view('admin.adminRoom');
   }

   public function adminService()
   {
       return view('admin.adminService');
   }

   public function Room()
   {
       return view ('hms.Room');
   }

   public function RoomService()
   {
        return view ('hms.RoomService');
   }
}
