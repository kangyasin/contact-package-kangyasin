<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Privileges extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('privileges')) {
            Schema::create('privileges', function (Blueprint $table) {
                $table->increments('id')->unsigned();
                $table->integer('role_id')->unsigned();
                $table->integer('feature_id')->unsigned();
                $table->boolean('view');
                $table->boolean('edit');
                $table->boolean('delete');
                $table->boolean('create');
                $table->tinyInteger('sort')->unsigned();
                $table->softDeletes();
                $table->timestamps();
                $table->foreign('role_id')->references('id')->on('roles');
                $table->foreign('feature_id')->references('id')->on('features');
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
        Schema::dropIfExists('privileges');
        
    }
}
