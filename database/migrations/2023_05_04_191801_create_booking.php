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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id('id_booking');
            // foreign key
            $table->foreignId('id_user')->nullable()->default(null);
            $table->foreign('id_pelayanan')->references('id_pelayanan')->on('pelayanans');
            $table->foreignId('id_karyawan')->nullable()->default(null);
            $table->foreign('id_karyawan')->references('id_karyawan')->on('karyawans');
            $table->string('nama');
            $table->integer('no_telpon');
            $table->string('jenis_pelayanan');
            $table->string('harga');
            $table->string('tanggal_booking');
            $table->string('jam_booking');
            $table->string('bukti_transfer');
            $table->string('stats');

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
        Schema::dropIfExists('booking');
    }
};
