<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKasirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kasir', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_booking')->unsigned();
            $table->string('nama_kasir');
            $table->integer('jumlah')->unsigned();
            $table->integer('harga')->unsigned();
            $table->integer('total_harga')->unsigned();
            $table->integer('uang')->unsigned();
            $table->integer('kembalian')->unsigned();
            $table->foreign('id_booking')->references('id')->on('booking');
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
        Schema::dropIfExists('kasir');
    }
}
