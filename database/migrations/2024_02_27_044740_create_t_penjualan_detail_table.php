<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // Praktikum 2.2 bagian 4 "membuat tabel t_penjualan_detail"
    public function up(): void
    {
        Schema::create('t_penjualan_detail', function (Blueprint $table) {
            $table->id('detail_id');
            $table->unsignedBigInteger('penjualan_id')->index();
            $table->unsignedBigInteger('barang_id')->index();
            $table->integer('harga');
            $table->integer('jumlah');
            $table->timestamps();

            // mendefinisikan foreign key pada kolom penjualan_id dengan referensi pada kolom penjualan_id pada tabel t_penjualan.
            $table->foreign('penjualan_id')->references('penjualan_id')->on('t_penjualan');
            // mendefinisikan foreign key pada kolom barang_id dengan referensi pada kolom barang_id pada tabel m_barang.
            $table->foreign('barang_id')->references('barang_id')->on('m_barang');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_penjualan_detail');
    }
};
