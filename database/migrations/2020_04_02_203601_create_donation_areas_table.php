<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
