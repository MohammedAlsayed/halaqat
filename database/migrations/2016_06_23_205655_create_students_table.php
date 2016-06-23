<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('f_name');
            $table->string('middle_name');
            $table->string('l_name');
            $table->integer('role');
            $table->integer('masjed');
            $table->integer('halaqah');
            $table->integer('mobile');
            $table->integer('nationality');
            $table->integer('national_id');
            $table->integer('qualification');
            $table->date('birth_date_georgean');
            $table->date('birth_date_hijre');
            $table->string('email');
            $table->boolean('khatem');
            $table->integer('method'); // method of memorizing quran
            $table->integer('added_by'); // method of memorizing quran
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
        Schema::drop('students');
    }
}
