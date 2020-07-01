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
            $table->bigIncrements('ID');
            $table->unsignedBigInteger('UserID');
            $table->unsignedBigInteger('MarketplaceID');
            $table->unsignedBigInteger('MarketplaceOwnerID');

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



            $table->foreign('UserID')->references('ID')->on('Users')->onDelete('cascade');
            $table->foreign('MarketplaceID')->references('ID')->on('marketplaces')->onDelete('cascade');
            $table->foreign('MarketplaceOwnerID')->references('ID')->on('marketplace_owners')->onDelete('cascade');
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
