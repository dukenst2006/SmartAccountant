<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddInvoiceCodeInInvoicesAndSuppliersInvoices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('invoices', function (Blueprint $table) {
            $table->string('invoice_code')->nullable()->unique();
        });

        Schema::table('supplier_invoices', function (Blueprint $table) {
            $table->string('invoice_code')->nullable()->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('invoices', function (Blueprint $table) {
                $table->dropColumn('invoice_code');
        });

        Schema::table('supplier_invoices', function (Blueprint $table) {
                $table->dropColumn('invoice_code');
        });
    }
}
