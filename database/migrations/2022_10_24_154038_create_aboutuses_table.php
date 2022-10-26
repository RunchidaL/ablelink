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
        Schema::create('aboutuses', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('company')->nullable();
            $table->string('description',1000)->nullable();
            $table->string('image_vision1')->nullable();
            $table->string('title_vision1')->nullable();
            $table->string('vision1')->nullable();
            $table->string('image_vision2')->nullable();
            $table->string('title_vision2')->nullable();
            $table->string('vision2')->nullable();
            $table->string('image_vision3')->nullable();
            $table->string('title_vision3')->nullable();
            $table->string('vision3')->nullable();
            $table->string('image_vision4')->nullable();
            $table->string('title_vision4')->nullable();
            $table->string('vision4')->nullable();
            $table->string('image_mission1')->nullable();
            $table->string('title_mission1')->nullable();
            $table->string('mission1')->nullable();
            $table->string('image_mission2')->nullable();
            $table->string('title_mission2')->nullable();
            $table->string('mission2')->nullable();
            $table->string('image_mission3')->nullable();
            $table->string('title_mission3')->nullable();
            $table->string('mission3')->nullable();
            $table->string('image_mission4')->nullable();
            $table->string('title_mission4')->nullable();
            $table->string('mission4')->nullable();
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
        Schema::dropIfExists('aboutuses');
    }
};
