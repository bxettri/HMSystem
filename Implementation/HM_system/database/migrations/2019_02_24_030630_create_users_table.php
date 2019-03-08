<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('username');
            $table->string('email')->unique();
            $table->timestamp('email_varified_at')->nullable();
            $table->string('password');
            $table->string('address');
            $table->string('gender');
            $table->date('DOB');
            $table->string('contactNo');
            $table->integer('uTypeid')->unsigned();
            $table->foreign('uTypeid')->references('uTypeid')->on('utype');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
