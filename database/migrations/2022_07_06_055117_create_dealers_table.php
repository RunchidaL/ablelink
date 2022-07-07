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
        Schema::create('dealers', function (Blueprint $table) {
            $table->id();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('emailaddress')->nullable();
            $table->string('phonenumber')->nullable();
            $table->string('address')->nullable();
            $table->string('subdistrict')->nullable();
            $table->string('district')->nullable();
            $table->string('county')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('companyTH')->nullable();
            $table->string('companyEN')->nullable();
            $table->string('taxid')->nullable();
            $table->string('idcompany')->nullable();
            $table->decimal('coin')->nullable();
            $table->bigInteger('dealerid')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('dealerid')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dealers');
    }
};