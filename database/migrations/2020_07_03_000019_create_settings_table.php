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
            $table->unsignedBigInteger('MarketplaceOwnerID');

            $table->boolean('IsSiteActive')->default(true); //حالة الموقع
            $table->boolean('MessageEn')->default(true);
            $table->boolean('messageAr')->default(true);
            $table->boolean('ProgramStatus')->default(true);
            $table->date('ProgramEndDate')->default(now());
            $table->bigInteger('Capital')->default(0);  // رأس مال المؤسسة
            $table->string('AppName')->nullable();
            $table->string('Email')->nullable();
            $table->string('PhoneNumber')->nullable();
            $table->string('Website')->nullable(); // موقع الكتروني
            $table->string('SerialNumber')->nullable(); // رمز التفعيل
            $table->string('Logo')->nullable(); // شعار المؤسسة
            $table->string('Stamp')->nullable(); // صورة ختم المؤسسة
            $table->double('VAT')->default(0);  // ضريبه القيمة المضافة .. نسبه مؤيه
            $table->boolean('EnableVAT')->default(true);  // تفعيل حساب الضرائب علي الاسعار.
            $table->timestamps();

            $table->foreign('MarketplaceOwnerID')->references('id')->on('marketplace_owners')->onDelete('cascade');

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
