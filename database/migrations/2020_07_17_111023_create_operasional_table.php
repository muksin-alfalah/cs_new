<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperasionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operasional', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_sc')->default('blm_bayar');
            $table->string('no_myir')->nullable();;
            $table->string('nama_pelanggan');
            $table->string('nomor_hp');
            $table->string('paket')->nullable();
            $table->string('kkontak')->nullable();
            $table->string('alamat')->nullable();
            $table->text('tikor')->nullable();
            $table->string('odp')->nullable();
            $table->string('alternatif_odp')->nullable();
            $table->string('status_order')->nullable();
            $table->string('status_penarikan')->nullable();
            $table->string('delok')->nullable();
            $table->string('foto_rumah')->nullable();
            $table->date('tanggal_ps');
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
        Schema::dropIfExists('operasionals');
    }
}
