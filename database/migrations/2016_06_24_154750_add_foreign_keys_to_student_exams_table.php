<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToStudentExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('student_exams', function (Blueprint $table) {
            $table->foreign('student_id', 'fk_student_exams_student_id')->references('id')->on('students');
            $table->foreign('exam_id', 'fk_student_exams_exam_id')->references('id')->on('exams');
            $table->foreign('grade_id', 'fk_student_exams_grade_id')->references('id')->on('grades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('student_exams', function (Blueprint $table) {
            $table->dropForeign('fk_student_exams_student_id');
            $table->dropForeign('fk_student_exams_exam_id');
            $table->dropForeign('fk_student_exams_grade_id');
        });
    }
}
