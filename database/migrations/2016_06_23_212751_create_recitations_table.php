<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecitationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recitations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('student_id');
            $table->unsignedInteger('hefz_grade_id');
            $table->unsignedInteger('revision_grade_id');
            $table->string('begning_of_hefz',255)->nullable();
            $table->string('end_of_hefz',255)->nullable();
            $table->string('begning_of_revision',255)->nullable();
            $table->string('end_of_revision',255)->nullable();
            $table->integer('pages_of_hefz')->nullable();
            $table->integer('pages_of_revision')->nullable();
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
        Schema::drop('recitations');
    }
}
