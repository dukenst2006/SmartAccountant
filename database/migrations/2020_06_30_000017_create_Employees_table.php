<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('UserID');
            $table->unsignedBigInteger('MarketPlaceID');
            $table->unsignedBigInteger('MarketPlaceOwnerID');
            $table->string('Nationality');
            $table->string('JobTitle');
            $table->string('NationalID');
            $table->string('PhoneNumber');
            $table->string('ProfileImage');
            $table->string('IdentityImage');
            $table->string('EmploymentContractImage');
            $table->string('IBAN');
            $table->string('Sex');
            $table->double('Salary');
            $table->timestamps();



            $table->foreign('UserID')->references('id')->on('users')->onDelete('cascade');

            $table->foreign('MarketPlaceID')->on('marketplaces')->references('id');
            $table->foreign('MarketplaceOwnerID')->references('id')->on('marketplace_owners')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
