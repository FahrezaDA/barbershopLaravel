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
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id('id_pemesanan');
            // foreign key
            $table->foreignId('id_customer');
            $table->foreign('id_customer')->references('id_customer')->on('customers');
            $table->string('nama_customer');
            $table->string('jenis_pelayanan');
            $table->string('harga');
            $table->string('no_antrian');
            $table->string('tanggal_pemesanan');
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
        Schema::dropIfExists('pemesanan');
    }
};
