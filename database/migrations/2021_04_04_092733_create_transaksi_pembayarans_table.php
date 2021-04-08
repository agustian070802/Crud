<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiPembayaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_pembayarans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_petugas')->nullable();
            $table->bigInteger('id_siswa')->nullable();
            $table->string('nisn')->unique()->nullable();
            $table->bigInteger('id_kelas')->nullable();
            $table->date('tgl_bayar');
            $table->bigInteger('id_spp')->nullable();
            $table->integer('jumlah_bayar');
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
        Schema::dropIfExists('transaksi_pembayarans');
    }
}
