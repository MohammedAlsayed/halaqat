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
            $table->integer('role_id');
            $table->integer('mobile_id');
            $table->timestamps();
        });
        Schema::create('employees', function (Blueprint $table) {
            $table->foreign('role_id')->refernces('id')->on('roles');
            $table->foreign('mosque_id')->refernces('id')->on('mosques');
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
