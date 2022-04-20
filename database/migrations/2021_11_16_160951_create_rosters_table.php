<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRostersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rosters', function (Blueprint $table) {
            $table->id('roster_id');
            $table->date('date');
            $table->string('supervisor');
            $table->string('doctor');
            $table->string('caregiver1');
            $table->string('caregiver2');
            $table->string('caregiver3');
            $table->string('caregiver4');
            $table->string('supervisorID');
            $table->string('doctorID');
            $table->string('caregiver1ID');
            $table->string('caregiver2ID');
            $table->string('caregiver3ID');
            $table->string('caregiver4ID');
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
        Schema::dropIfExists('rosters');
    }
}
