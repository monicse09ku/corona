<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonationAreaRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donation_area_requests', function (Blueprint $table) {
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
        Schema::dropIfExists('donation_area_requests');
    }
}
