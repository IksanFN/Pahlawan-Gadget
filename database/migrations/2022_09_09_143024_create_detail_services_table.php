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
        Schema::create('detail_services', function (Blueprint $table) {
            $table->id();
            $table->enum('status', ['Antrian', 'Proses Pengecekan', 'Proses Perbaikan', 'Konfirmasi Lanjutan', 'Konfirmasi Diterima', 'Service Eksternal', 'Service Selesai', 'Service Cancel', 'Proses Pemesanan Sparepart', 'Unit di Customer']);
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
        Schema::dropIfExists('detail_services');
    }
};
