<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('students', function (Blueprint $table){
            $table->foreign('mosque_id', 'fk_students_mosque_id')->references('id')->on('mosques');
            $table->foreign('halaqah_id', 'fk_students_halaqah_id')->references('id')->on('halaqat_names');
            $table->foreign('mobile_id', 'fk_students_mobile_id')->references('id')->on('mobile_phones');
            $table->foreign('nationality_id', 'fk_students_nationality_id')->references('id')->on('nationalites');
            $table->foreign('qualification_id', 'fk_students_qualification_id')->references('id')->on('qualifications');
            $table->foreign('method_id', 'fk_students_method_id')->references('id')->on('methodologies');
            $table->foreign('added_by', 'fk_students_added_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('students', function (Blueprint $table){
            $table->dropForeign('fk_students_mosque_id');
            $table->dropForeign('fk_students_halaqah_id');
            $table->dropForeign('fk_students_mobile_id');
            $table->dropForeign('fk_students_nationality_id');
            $table->dropForeign('fk_students_qualification_id');
            $table->dropForeign('fk_students_method_id');
            $table->dropForeign('fk_students_added_by');
        });
    }
}
