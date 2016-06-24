<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHalaqahStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('halaqah_status', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('halaqah_id');
            $table->unsignedInteger('status');
            $table->unsignedInteger('time');
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
        Schema::drop('halaqah_status');
    }
}
