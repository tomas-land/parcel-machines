<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcelMachinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcel_machines', function (Blueprint $table) {
            $table->id();
            $table->string('ZIP');
            $table->string('NAME');
            $table->string('TYPE');
            $table->string('A0_NAME');
            $table->string('A1_NAME');
            $table->string('A2_NAME');
            $table->string('A3_NAME');
            $table->string('A4_NAME');
            $table->string('A5_NAME');
            $table->string('A6_NAME');
            $table->string('A7_NAME');
            $table->string('A8_NAME');
            $table->string('X_COORDINATE');
            $table->string('Y_COORDINATE');
            $table->string('SERVICE_HOURS');
            $table->string('TEMP_SERVICE_HOURS');
            $table->string('TEMP_SERVICE_HOURS_UNTIL');
            $table->string('TEMP_SERVICE_HOURS_2');
            $table->string('TEMP_SERVICE_HOURS_2_UNTIL');
            $table->string('comment_est');
            $table->string('comment_eng');
            $table->string('comment_rus');
            $table->string('comment_lav');
            $table->string('comment_lit');
            $table->string('MODIFIED');
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
        Schema::dropIfExists('parcel_machines');
    }
}
