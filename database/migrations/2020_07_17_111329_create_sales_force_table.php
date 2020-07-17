<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesForceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_force', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('agency');
            $table->string('mitra');
            $table->string('kkontak');
            $table->string('spv');
            $table->boolean('tl');
            $table->string('kehadiran');
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
        Schema::dropIfExists('sales_force');
    }
}
