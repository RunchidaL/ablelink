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
        Schema::create('product_models', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->longText('description');
            $table->decimal('web_price')->nullable();
            $table->decimal('dealer_price');
            $table->decimal('customer_price');
            $table->unsignedInteger('stock')->nullable();
            $table->bigInteger('product_id')->unsigned()->nullable();
            $table->bigInteger('group_products')->unsigned()->nullable();
            $table->bigInteger('series_id')->unsigned()->nullable();
            $table->bigInteger('type_id')->unsigned()->nullable();
            $table->bigInteger('jacket_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('group_products')->references('id')->on('group_products')->onDelete('cascade');
            $table->foreign('series_id')->references('id')->on('series_models')->onDelete('cascade');
            $table->foreign('type_id')->references('id')->on('type_models')->onDelete('cascade');
            $table->foreign('jacket_id')->references('id')->on('jacket_products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_models');
    }
};
