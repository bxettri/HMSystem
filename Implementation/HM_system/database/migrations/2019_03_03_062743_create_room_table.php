<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room', function (Blueprint $table) {
            $table->increments('roomId');
            $table->integer('roomTypeId')->unsigned();
            $table->foreign('roomTypeId')->references('roomTypeId')->on('room_type');
            $table->integer('roomNum');
            $table->float('roomPrice');
            $table->string('roomImage');
            $table->longText('roomDiscription');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room');
    }
}
