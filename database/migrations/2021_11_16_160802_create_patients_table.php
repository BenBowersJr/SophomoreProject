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
            $table->id('patient_id');
            $table->string('f_name');
            $table->string('l_name');
            $table->string('email');
            $table->integer('age');
            $table->string('phone');
            $table->string('password');
            $table->date('dob');
            $table->string('family_password');
            $table->string('ec_name');
            $table->string('ec_relation');
            $table->string('ec_phone');
            $table->string('group');
            $table->date('admission_date');
            $table->integer('role_id');
            $table->decimal('balance_due', 10, 2);
            $table->boolean('approved');
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
