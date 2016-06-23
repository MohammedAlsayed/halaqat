<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

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
            $table->string('f_name',100);
            $table->string('middle_name',100);
            $table->string('l_name',100);
            $table->integer('mosque_id');
            $table->integer('halaqah_id');
            $table->integer('mobile_id');
            $table->integer('nationality_id');
            $table->integer('national_id');
            $table->integer('qualification_id');
            $table->date('birth_date_georgean');
            $table->date('birth_date_hijre');
            $table->string('email',100);
            $table->boolean('khatem');
            $table->integer('method_id'); // method of memorizing quran
            $table->integer('added_by'); // method of memorizing quran
            $table->timestamps();
        });

        Schema::create('students', function (Blueprint $table){
            $table->foreign('mosque_id')->refernces('id')->on('mosques');
            $table->foreign('halaqah_id')->refernces('id')->on('halaqat');
            $table->foreign('mobile_id')->refernces('id')->on('mobile_phones');
            $table->foreign('nationality_id')->refernces('id')->on('nationalites');
            $table->foreign('qualification_id')->refernces('id')->on('qualifications');
            $table->foreign('method_id')->refernces('id')->on('methodologies');
            $table->foreign('added_by')->refernces('id')->on('users');
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
