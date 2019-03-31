<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billing', function (Blueprint $table) {
            $table->increments('billingId');
            $table->integer('kotId')->unsigned();
            $table->foreign('kotId')->references('kotId')->on('kot');
            $table->integer('bookingId')->unsigned();
            $table->foreign('bookingId')->references('bookingId')->on('booking');
            $table->date('billingDate');
            $table->float('total');
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
        Schema::dropIfExists('billing');
    }
}
