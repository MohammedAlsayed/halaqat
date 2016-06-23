<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesAttendenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees_attendence', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employee_id');
            $table->boolean('attended');
            $table->boolean('execuse');
            $table->string('reason',255);
            $table->timestamps();
        });
        Schema::create('employees_attendence', function (Blueprint $table) {
            $table->foreign('employee_id')->refernces('id')->on('employees')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employees_attendence');
    }
}
