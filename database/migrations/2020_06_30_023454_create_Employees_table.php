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
        Schema::create('Employees', function (Blueprint $table) {
            $table->unsignedBigInteger('ID');
            $table->bigIncrements('UserID');
            $table->bigIncrements('MarketplaceID');
            $table->bigIncrements('MarketplaceOwnerID');

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


            $table->bigIncrements('MarketplaceOwners');

            $table->float('Salary');
            $table->timestamps();



            $table->foreign('UserID')->references('ID')->on('Users')->onDelete('cascade');
            $table->foreign('MarketplacesID')->references('id')->on('Marketplaces')->onDelete('cascade');
            $table->foreign('MarketplaceOwnerID')->references('ID')->on('MarketplaceOwners')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Employees');
    }
}
