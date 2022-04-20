<?php

use App\Models\roles;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SeedRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        roles::create(array('title' => 'admin', 'access_level' => 1));
        roles::create(array('title' => 'supervisor', 'access_level' => 2));
        roles::create(array('title' => 'doctor', 'access_level' => 3));
        roles::create(array('title' => 'caregiver', 'access_level' => 4));
        roles::create(array('title' => 'patient', 'access_level' => 5));
        roles::create(array('title' => 'family', 'access_level' => 6));
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
