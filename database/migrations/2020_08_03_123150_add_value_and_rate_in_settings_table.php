<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddValueAndRateInSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->unsignedFloat('AbsenceDiscountValue')->nullable();
            $table->unsignedFloat('AbsenceDiscountRate')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('settings', function (Blueprint $table) {
                $table->dropColumn('AbsenceDiscountValue');
                $table->dropColumn('AbsenceDiscountRate');
        });
    }
}
