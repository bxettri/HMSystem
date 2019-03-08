<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kot', function (Blueprint $table) {
            $table->increments('kotId');
            $table->integer('id')->unsigned();
            $table->foreign('id')->references('id')->on('users');
            $table->integer('serviceId')->unsigned();
            $table->foreign('serviceId')->references('serviceId')->on('services');
            $table->integer('serviceQuantity');
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
        Schema::dropIfExists('kot');
    }
}
