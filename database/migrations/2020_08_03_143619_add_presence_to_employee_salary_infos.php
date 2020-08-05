<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPresenceToEmployeeSalaryInfos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employee_salary_infos', function (Blueprint $table) {
            $table->string('PresenceAndDevotion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employee_salary_infos', function (Blueprint $table) {
            $table->dropColumn('PresenceAndDevotion');
        });
    }
}
