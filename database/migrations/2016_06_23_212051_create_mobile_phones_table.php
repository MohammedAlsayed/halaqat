<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateMobilePhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobile_phones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id');
            $table->string('mobile', 45);
            $table->string('belongs_to', 45);
            $table->timestamps();
        });
        Schema::create('mobile_phones', function (Blueprint $table) {
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
        Schema::drop('mobile_phones');
    }
}
