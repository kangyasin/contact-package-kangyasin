<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MonthlyInvoiceItems extends Migration
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
                $table->integer('subs_usage_id')->unsigned();
                $table->integer('total_usage')->unsigned();
                $table->integer('price')->unsigned();
                $table->enum('type', ['increment', 'decrement']);
                $table->string('name_item');
                $table->softDeletes();
                $table->timestamps();

                $table->foreign('subs_usage_id')->references('id')->on('subscription_usages');
                $table->foreign('no_invoice')->references('no_invoice')->on('monthly_invoices');

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
