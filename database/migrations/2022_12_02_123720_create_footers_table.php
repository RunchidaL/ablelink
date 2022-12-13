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
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->string('link_facebook')->nullable();
            $table->string('link_line')->nullable();
            $table->string('link_email')->nullable();
            $table->string('link_youtube')->nullable();
            $table->string('title1')->nullable();
            $table->string('detail1_1')->nullable();
            $table->string('detail1_2')->nullable();
            $table->string('detail1_3')->nullable();
            $table->string('detail1_4')->nullable();
            $table->string('detail1_5')->nullable();
            $table->string('title2')->nullable();
            $table->string('detail2_1')->nullable();
            $table->string('detail2_2')->nullable();
            $table->string('detail2_3')->nullable();
            $table->string('detail2_4')->nullable();
            $table->string('detail2_5')->nullable();
            $table->string('link2_1')->nullable();
            $table->string('link2_2')->nullable();
            $table->string('link2_3')->nullable();
            $table->string('link2_4')->nullable();
            $table->string('link2_5')->nullable();
            $table->string('title3')->nullable();
            $table->string('detail3_1')->nullable();
            $table->string('detail3_2')->nullable();
            $table->string('detail3_3')->nullable();
            $table->string('detail3_4')->nullable();
            $table->string('detail3_5')->nullable();
            $table->string('link3_1')->nullable();
            $table->string('link3_2')->nullable();
            $table->string('link3_3')->nullable();
            $table->string('link3_4')->nullable();
            $table->string('link3_5')->nullable();
            $table->string('title4')->nullable();
            $table->string('detail4_1')->nullable();
            $table->string('detail4_2')->nullable();
            $table->string('detail4_3')->nullable();
            $table->string('detail4_4')->nullable();
            $table->string('detail4_5')->nullable();
            $table->string('link4_1')->nullable();
            $table->string('link4_2')->nullable();
            $table->string('link4_3')->nullable();
            $table->string('link4_4')->nullable();
            $table->string('link4_5')->nullable();
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
        Schema::dropIfExists('footers');
    }
};
