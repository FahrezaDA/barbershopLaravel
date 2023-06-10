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
        Schema::create('pelayanans', function (Blueprint $table) {
            $table->id('jenis_pelayanan');
            // foreign key
            $table->foreignId('id_booking');
            $table->foreign('id_booking')->references('id_booking')->on('bookings');
            $table->foreignId('karyawanID');
            $table->foreign('karyawanID')->references('karyawanID')->on('karyawan');


            $table->string('harga');
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
        Schema::dropIfExists('pelayanans');
    }
};
