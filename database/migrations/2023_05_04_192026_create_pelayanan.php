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
        Schema::create('pelayanan', function (Blueprint $table) {
            $table->id('id_pelayanan');
            // foreign key
            $table->foreignId('id_booking');
            $table->foreign('id_booking')->references('id_booking')->on('booking');
            $table->foreignId('id_karyawan');
            $table->foreign('id_karyawan')->references('id_karyawan')->on('karyawan');

            $table->string('jenis_pelayanan');
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
        Schema::dropIfExists('pelayanan');
    }
};