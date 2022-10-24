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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('title')->nullable();
            $table->string('Address')->nullable();
            $table->string('facebook')->nullable();
            $table->string('link_facebook')->nullable();
            $table->string('line')->nullable();
            $table->string('link_line')->nullable();
            $table->string('youtube')->nullable();
            $table->string('link_youtube')->nullable();
            $table->string('email')->nullable();
            $table->string('link_email')->nullable();
            $table->string('tel')->nullable();
            $table->longText('googlemap')->nullable();
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
        Schema::dropIfExists('contacts');
    }
};
