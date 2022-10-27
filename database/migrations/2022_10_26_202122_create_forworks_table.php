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
        Schema::create('forworks', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('title')->nullable();
            $table->string('title1')->nullable();
            $table->string('service1')->nullable();
            $table->string('service2')->nullable();
            $table->string('service3')->nullable();
            $table->string('service4')->nullable();
            $table->string('service5')->nullable();
            $table->string('service6')->nullable();
            $table->string('service7')->nullable();
            $table->string('service8')->nullable();
            $table->string('service9')->nullable();
            $table->string('service10')->nullable();
            $table->string('title2')->nullable();
            $table->string('hrmail')->nullable();
            $table->string('hrtel')->nullable();
            $table->string('heading')->nullable();
            $table->string('detail1')->nullable();
            $table->string('detail2')->nullable();
            $table->string('detail3')->nullable();
            $table->string('detail4')->nullable();
            $table->string('detail5')->nullable();
            $table->string('detail6')->nullable();
            $table->string('detail7')->nullable();
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
        Schema::dropIfExists('forworks');
    }
};
