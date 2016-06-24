<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToStudentsAttendenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('student_attendence', function (Blueprint $table) {
            $table->foreign('student_id', 'fk_student_attendence_student_id')->references('id')->on('students');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('student_attendence', function (Blueprint $table) {
            $table->dropForeign('fk_student_attendence_student_id');
        });
    }
}
