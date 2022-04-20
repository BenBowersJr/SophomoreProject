<?php

use App\Models\employee;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SeedUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $employee = employee::create(array('f_name' => 'admin', 'l_name' => 'admin', 'email' => 'admin@test.com', 'password' => '123', 'role_id' => 1));
        $employee->approved = 1;
        $employee->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
