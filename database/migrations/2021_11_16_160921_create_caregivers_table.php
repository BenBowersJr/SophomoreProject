<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaregiversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caregivers', function (Blueprint $table) {
            $table->id('employee_id')
                ->constrained('employees')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('patient_id')->nullable();
            $table->date('date')->nullable();
            $table->boolean('morning_med')->default(0);
            $table->boolean('afternoon_med')->default(0);
            $table->boolean('night_med')->default(0);
            $table->boolean('breakfast')->default(0);
            $table->boolean('lunch')->default(0);
            $table->boolean('dinner')->default(0);
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
        Schema::dropIfExists('caregivers');
    }
}
