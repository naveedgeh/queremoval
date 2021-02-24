<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Bookings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('bookings', function (Blueprint $table) {
        $table->id();
        $table->string("pickuppoint");
        $table->string("dropoffpoint");
        $table->string("distance");
        $table->string("vanname");
        $table->string("price");
        $table->string("extrahelp");
        $table->string('inventory');
        $table->string('passenger');
        $table->string('requirements');
        $table->string("stairsatpickupaddress");
        $table->string("starisatpickupleft");
        $table->string("stairsatdropoffaddress");
        $table->string("stairsatdropoffleft");
        $table->string("bookingdate");
        $table->string("firstname");
        $table->string("lastname");
        $table->string("email");
        $table->string("phonenumber");
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
        Schema::dropIfExists('booking');
    }
}
