<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('IsSiteActive')->default(true);
            $table->boolean('MessageEn')->default(true);
            $table->boolean('messageAr')->default(true);
            $table->boolean('ProgramStatus')->default(true);
            $table->date('ProgramEndDate')->default(now());
            $table->bigInteger('Capital')->default(0);
            $table->timestamps();
        });
        \App\Models\Settings::query()->create();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
