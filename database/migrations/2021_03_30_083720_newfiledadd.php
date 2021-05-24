<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Newfiledadd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('priceadds', function (Blueprint $table) {
            $table->string('_2menhalfhourprice');
            $table->string('_3menhalfhourprice');
            $table->string('_driverhelphalfhourprice');
            $table->string('_floorpricewithoutleft');
            $table->string('_floorpricewithleft');
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('priceadds', function (Blueprint $table) {
            $table->dropColumn(['_2menhalfhourprice']);
            $table->dropColumn(['_3menhalfhourprice']);
            $table->dropColumn(['_driverhelphalfhourprice']);
            $table->dropColumn(['_floorpricewithoutleft']);
            $table->dropColumn(['_floorpricewithleft']);
        });
    }
}
