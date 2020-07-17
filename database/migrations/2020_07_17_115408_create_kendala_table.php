<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKendalaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kendala', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_order');
            $table->string('status_kendala');
            $table->string('jenis_kendala');
            $table->string('segmen_kendala');
            $table->string('status_penyelesaian');
            $table->string('detail_kendala');
            $table->string('keterangan');
            $table->timestamps();

            $table->foreign('id_order')->references('id')->on('operasional')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kendalas');
    }
}
