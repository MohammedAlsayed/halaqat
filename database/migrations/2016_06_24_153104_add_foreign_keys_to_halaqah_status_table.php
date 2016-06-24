<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToHalaqahStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('halaqah_status', function (Blueprint $table) {
            $table->foreign('halaqah_id', 'fk_halaqah_status_halaqah_id')->references('id')->on('halaqat_names');
            $table->foreign('status', 'fk_halaqah_status_status_id')->references('id')->on('statuses');
            $table->foreign('time', 'fk_halaqah_status_time_id')->references('id')->on('halaqah_times');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('halaqah_status', function (Blueprint $table) {
            $table->dropForeign('fk_halaqah_status_halaqah_id');
            $table->dropForeign('fk_halaqah_status_status_id');
            $table->dropForeign('fk_halaqah_status_time_id');
        });
    }
}
