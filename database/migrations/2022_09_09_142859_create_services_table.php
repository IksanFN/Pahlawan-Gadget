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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('kode_service');
            $table->string('no_whatsapp');
            $table->string('nama_lengkap');
            $table->text('alamat');
            $table->string('profesi');
            $table->enum('jenis', ['Laptop', 'Macbook', 'Smartphone', 'PC', 'Imac']);
            $table->string('merk_series');
            $table->text('spesifikasi');
            $table->string('password')->nulllable();
            $table->text('keluhan');
            $table->text('request')->nullable();
            $table->enum('status', ['Antrian', 'Proses Pengecekan', 'Konfirmasi Lanjutan', 'Konfirmasi Diterima', 'Service Cancel', 'Service Selesai', 'Service Eksternal', 'Pemesanan Sparepart', 'Proses Perbaikan', 'Order Part', 'Cari Part', 'Unit di Customers']);
            $table->text('tindak_lanjut_teknisi');
            $table->integer('biaya')->nullable();
            $table->enum('gift_voucher', ['Sudah', 'Belum', 'Reedem Voucher']);
            $table->enum('jenis_bayar', ['Cash', 'Cash &  Transfer', 'Transfer Bank', 'Transfer QRIS']);
            $table->enum('status_item', ['Sudah di Ambil', 'Belum di Ambil', 'Unit di Cust dulu']);
            $table->date('tanggal_penyerahan');
            $table->enum('chat', ['Sudah pernah WA', 'Belum pernah WA']);
            $table->enum('jenis_service', ['Datang ke Toko', 'Onsite', 'Pickup']);
            $table->enum('sumber', ['Instagram', 'Google Search', 'Kerabat/Rekan', 'Tiktok', 'Website', 'Facebook', 'Telegram', ]);
            $table->enum('review', ['Sudah', 'Belum']);
            $table->timestamps();
            $table->softDeletes();
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
        Schema::dropIfExists('services');
    }
};
