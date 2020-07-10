<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterSettingsTableAddEmail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('settings',function (Blueprint $table){
            $table->string('AppName')->nullable();
            $table->string('Email')->nullable();
            $table->string('PhoneNumber')->nullable();
            $table->string('Website')->nullable();
            $table->string('SerialNumber')->nullable();
            $table->string('Logo')->nullable();
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
