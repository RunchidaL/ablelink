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
        Schema::table('orderid', function (Blueprint $table) {
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('subdistrict')->nullable();
            $table->string('district')->nullable();
            $table->string('county')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('phonenumber')->nullable();
            $table->string('company')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orderid', function (Blueprint $table) {
            //
        });
    }
};
