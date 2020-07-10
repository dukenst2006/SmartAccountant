<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeSalaryInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //  الراتب الاساسى + البدلات – الاسقطاعات والخصومات = صافى الدخل
        Schema::create('employee_salary_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('EmployeeID');  //رقم الموظف
            $table->double('Allowances');  //البدلات
            $table->double('Deductions');   //الخصومات
            $table->string('Description');  //وصف
            $table->timestamps();



            $table->foreign('EmployeeID')->references('id')->on('Employees')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_salary_infos');
    }
}
