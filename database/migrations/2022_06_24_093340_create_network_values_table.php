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
        Schema::create('network_values', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('network_image_id')->unsigned()->nullable();
            $table->bigInteger('product_in_photo')->unsigned()->nullable();
            $table->bigInteger('product_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('network_image_id')->references('id')->on('network_images')->onDelete('cascade');
            $table->foreign('product_in_photo')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('network_values');
    }
};
