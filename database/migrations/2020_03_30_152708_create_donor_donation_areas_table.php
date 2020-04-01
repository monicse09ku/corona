<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonorDonationAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donor_donation_areas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('donation_area_id')->unsigned();
            $table->bigInteger('user_id')->unsigned()->comment('donor id');
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
        Schema::dropIfExists('donor_donation_areas');
    }
}
