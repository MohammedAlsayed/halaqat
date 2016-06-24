<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToMobilePhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('mobile_phones', function (Blueprint $table) {
             $table->foreign('student_id','fk_mobile_phones_student_id')->references('id')->on('students');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mobile_phones', function (Blueprint $table) {
            $table->dropForeign('fk_mobile_phones_student_id');
        });
    }
}
