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
        Schema::create('kasir', function (Blueprint $table) {
            $table->id('id_kasir');
            //foreign key
            $table->foreignId('id_booking');
            $table->foreign('id_booking')->references('id_booking')->on('booking');
            $table->foreignId('id_customer');
            $table->foreign('id_customer')->references('id_customer')->on('customers');

            $table->string('username');
            $table->string('password');
            $table->string('email');

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
        Schema::dropIfExists('kasir');
    }
};
