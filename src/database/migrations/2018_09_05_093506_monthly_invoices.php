<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MonthlyInvoices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('monthly_invoices')) {
            Schema::create('monthly_invoices', function (Blueprint $table) {
                $table->increments('id')->unsigned();
                $table->string('no_invoice')->unique();
                $table->integer('company_id')->unsigned();
                $table->integer('subtotal_payment')->unsigned();
                $table->integer('total_payment')->unsigned();
                $table->enum('status', ['unpaid', 'paid']);
                $table->date('issued_at')->nullable(true)->default(null);
                $table->date('due_date')->nullable(true)->default(null);
                $table->date('paid_at')->nullable(true)->default(null);
                $table->softDeletes();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('monthly_invoices');
        
    }
}
