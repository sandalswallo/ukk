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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->integer('outlet_id');
            $table->string('kode_invoice');
            $table->integer('member_id');
            $table->datetime('tanggal');
            $table->datetime('batas_waktu');
            $table->datetime('tanggal_bayar');
            $table->integer('biaya_tambahan');
            $table->double('diskon');
            $table->enum('status', ['baru', 'proses', 'selesai', 'diambil']);
            $table->enum('bayar', ['belum_dibayar', 'sudah_dibayar',]);
            $table->integer('user_id');
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
        Schema::dropIfExists('transaksi');
    }
};