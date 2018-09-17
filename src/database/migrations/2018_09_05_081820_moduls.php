<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Moduls extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('moduls')) {
            Schema::create('moduls', function (Blueprint $table) {
                $table->increments('id')->unsigned();
                $table->integer('plan_id')->unsigned();
                $table->json('name');
                $table->json('description')->nullable(true)->default(null);
                $table->tinyInteger('value')->unsigned();
                $table->integer('price')->unsigned();
                $table->tinyInteger('sort')->unsigned();
                $table->softDeletes();
                $table->timestamps();

                $table->foreign('plan_id')->references('id')->on('plans');

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
        Schema::dropIfExists('moduls');
        
    }
}
