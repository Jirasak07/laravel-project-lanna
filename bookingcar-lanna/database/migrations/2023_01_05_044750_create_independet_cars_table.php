<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndependetCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('independet_cars', function (Blueprint $table) {
            $table->id();
            $table->string('inde_brand');
            $table->string('inde_license_palate');
            $table->string('inde_driver');
            $table->string('inde_driver_phone');
            $table->string('inde_status');
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
        Schema::dropIfExists('independet_cars');
    }
}
