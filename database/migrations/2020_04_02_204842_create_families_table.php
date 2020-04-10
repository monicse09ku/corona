<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamiliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('families', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('donation_area_id')->unsigned();
            $table->string('name');
            $table->string('phone');
            $table->string('type')->comment('not poor, poor, extreme poor');
            $table->integer('total_member')->default(0);
            $table->integer('elderly')->default(0);
            $table->integer('adult')->default(0);
            $table->integer('children')->default(0);
            $table->integer('smoker')->default(0);
            $table->integer('respiratory')->default(0);
            $table->integer('diabetes')->default(0);
            $table->integer('heart')->default(0);
            $table->text('details')->nullable();
            $table->boolean('contact_history')->default(0);
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
        Schema::dropIfExists('families');
    }
}
