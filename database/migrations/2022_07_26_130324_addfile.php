<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_models', function (Blueprint $table) {
            $table->longText('overview')->nullable();
            $table->longText('application')->nullable();
            $table->longText('item_spotlight')->nullable();
            $table->longText('feature')->nullable();
            $table->string('videos')->nullable();
            $table->string('datasheet')->nullable();
            $table->string('firmware')->nullable();
            $table->string('guide')->nullable();
            $table->string('cert')->nullable();
            $table->string('config')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_models', function (Blueprint $table) {
            //
        });
    }
};
