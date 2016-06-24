<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToRecitationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recitations', function (Blueprint $table) {
            $table->foreign('student_id', 'fk_recitations_student_id')->references('id')->on('students');
            $table->foreign('hefz_grade_id', 'fk_recitations_hefz_grade_id')->references('id')->on('grades');
            $table->foreign('revision_grade_id', 'fk_recitations_revision_grade_id')->references('id')->on('grades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recitations', function (Blueprint $table) {    
            $table->dropForeign('fk_recitations_student_id');
            $table->dropForeign('fk_recitations_hefz_grade_id');
            $table->dropForeign('fk_recitations_revision_grade_id');
        });
    }
}
