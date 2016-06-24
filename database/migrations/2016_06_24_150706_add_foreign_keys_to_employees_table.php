<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('employees', function (Blueprint $table) {
            $table->foreign('role_id', 'fk_employees_role_id')->references('id')->on('roles');
            $table->foreign('mobile_id', 'fk_employees_mobile_id')->references('id')->on('mobile_phones');
            $table->foreign('halaqah_id', 'fk_employees_halaqah_id')->references('id')->on('halaqat_names');
            $table->foreign('mosque_id', 'fk_employees_mosque_id')->references('id')->on('mosques');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->dropForeign('fk_employees_role_id');
            $table->dropForeign('fk_employees_mobile_id');
            $table->dropForeign('fk_employees_halaqah_id');
            $table->dropForeign('fk_employees_mosque_id');
        });
    }
}
