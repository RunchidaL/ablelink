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
        Schema::create('series_models', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('group_id')->nullable();
            $table->timestamps();
            $table->foreign('group_id')->references('id')->on('group_products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('series_models');
    }
};
