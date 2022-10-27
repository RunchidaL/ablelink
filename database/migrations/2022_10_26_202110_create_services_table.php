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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('title')->nullable();
            $table->string('image1')->nullable();
            $table->string('title1')->nullable();
            $table->string('description1')->nullable();
            $table->string('image2')->nullable();
            $table->string('title2')->nullable();
            $table->string('description2')->nullable();
            $table->string('image3')->nullable();
            $table->string('title3')->nullable();
            $table->string('description3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
};
