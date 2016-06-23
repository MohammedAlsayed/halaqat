<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateStudentAttendenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_attendence', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id');
            $table->boolean('attended');
            $table->boolean('execuse');
            $table->string('reason',255);
            $table->timestamps();
        });
        Schema::create('student_attendence', function (Blueprint $table) {
            $table->foreign('student_id')->refernces('id')->on('students')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('student_attendence');
    }
}
