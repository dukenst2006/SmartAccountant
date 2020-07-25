<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableBondVouchersRemove extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bonds_vouchers',function (Blueprint $blueprint){
            $blueprint->dropForeign('bonds_vouchers_productid_foreign');
        });
        Schema::table('bonds_vouchers',function (Blueprint $blueprint){
            $blueprint->dropColumn('ProductID');
            $blueprint->dropColumn('Quantity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
