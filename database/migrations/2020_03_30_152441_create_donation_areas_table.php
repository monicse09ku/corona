<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donation_areas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('area_name');
            $table->string('lat');
            $table->string('long');
            $table->string('status')->comment('active, pending, dropped');
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
        Schema::dropIfExists('donation_areas');
    }
}
