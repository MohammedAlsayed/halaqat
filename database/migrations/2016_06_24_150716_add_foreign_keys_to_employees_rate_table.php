<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToEmployeesRateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employees_rate', function (Blueprint $table) {
            $table->foreign('employee_id', 'fk_employees_rate_employee_id')->references('id')->on('employees');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employees_rate', function (Blueprint $table) {
            $table->dropForeign('fk_employees_rate_employee_id');

        });
    }
}
