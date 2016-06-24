<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToStudentStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('student_status', function (Blueprint $table) {
            $table->foreign('student_id', 'fk_student_status_student_id')->references('id')->on('students');
            $table->foreign('status_id', 'fk_student_status_status_id')->references('id')->on('statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('student_status', function (Blueprint $table) {
            $table->dropForeign('fk_student_status_student_id');
            $table->dropForeign('fk_student_status_status_id');
        });
    }
}
