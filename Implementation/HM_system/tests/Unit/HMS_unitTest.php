<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HMS_unitTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testLogin()
    {
        $email="bibek@hms.com";
        $password="123456";

        $response=$this->call("GET",'/login',[
            'email'=>$email,
            'password'=>$password
        ]);

        $this->assertEquals(200,$response->status());

    }



    public function testRegistration()
    {
        $response=$this->call("POST",'/register',[
            'email'=>"ram@hms.com",
            'password'=>"123456",
            'contactNo'=>"9812737484",
            'firstName'=>"Ram",
            'lastName'=>"Shrestha",
            'username'=>"RamDai",
            'DOB'=>"2019-02-02",
            'uTypeId'=>1,
            'gender'=>"male",
            'address'=>"kathmandu"
        ]);
        $this->assertEquals(302,$response->status());
    }

    public function testBooking()
    {
        $response=$this->call("POST",'/booking',[
            'id'=>1,
            'roomId'=>1,
            'bookingDate'=>"2019-04-06",
            'checkInDate'=>"2019-04-06",
            'checkOutDate'=>"2019-05-06",
        ]);

        $this->assertEquals(500,$response->status());
    }




}
