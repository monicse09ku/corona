<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('number_of_patients');
            $table->string('lat');
            $table->string('long');
            $table->text('details')->comment('number of dead,suspected,infected,recovered');
            $table->string('authenticity')->comment('informer,ngo,government');
            $table->integer('claim_count')->default(0);
            $table->date('claim_date')->default(DB::raw('NOW()'));
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
        Schema::dropIfExists('patients');
    }
}
