<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterMarketplaceTableAddAndRemoveThings1407 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('marketplaces',function (Blueprint $blueprint){
            $blueprint->dropColumn('Latitude','Longitude','Logo');
            $blueprint->string('CommercialRegister')->nullable();
            $blueprint->string('LeaseContract'  )->nullable();
            $blueprint->string('Attachment')->nullable();
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
