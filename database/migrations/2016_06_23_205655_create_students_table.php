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
            $table->unsignedInteger('mosque_id');
            $table->unsignedInteger('halaqah_id');
            $table->unsignedInteger('mobile_id');
            $table->unsignedInteger('nationality_id');
            $table->unsignedInteger('national_id')->nullable();
            $table->unsignedInteger('qualification_id');
            $table->unsignedInteger('added_by'); // method of memorizing quran
            $table->unsignedInteger('method_id'); // method of memorizing quran
            $table->date('birth_date_georgean')->nullable();
            $table->date('birth_date_hijre')->nullable();
            $table->string('email',100);
            $table->boolean('khatem');
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
