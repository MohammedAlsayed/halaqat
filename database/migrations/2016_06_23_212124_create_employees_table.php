<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('f_name',100);
            $table->string('middle_name',100);
            $table->string('l_name',100);
            $table->unsignedInteger('role_id');
            $table->unsignedInteger('mobile_id');
            $table->unsignedInteger('halaqah_id');
            $table->unsignedInteger('mosque_id');
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
        Schema::drop('employees');
    }
}
