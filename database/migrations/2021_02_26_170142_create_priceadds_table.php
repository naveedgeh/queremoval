<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePriceaddsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('priceadds', function (Blueprint $table) {
            $table->id();
            $table->string('vanname');
            $table->string('vanprice');
            $table->string('driverhelp');
            $table->string('2menprice');
            $table->string('3menprice');
            $table->string('2menhalfhourprice');
            $table->string('3menhalfhourprice');
            $table->string('driverhelphalfhourprice');
            $table->string('floorpricewithoutleft');
            $table->string('floorpricewithleft');
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
        Schema::dropIfExists('priceadds');
    }
}
