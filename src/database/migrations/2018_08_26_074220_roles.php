<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Roles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('roles')) {
            Schema::create('roles', function (Blueprint $table) {
                $table->increments('id')->unsigned();
                $table->integer('level_id')->unsigned();
                $table->string('name');
                $table->text('description')->nullable(true)->default(null);
                $table->softDeletes();
                $table->timestamps();

                $table->foreign('level_id')->references('id')->on('levels');

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
        Schema::dropIfExists('roles');
    }
}
