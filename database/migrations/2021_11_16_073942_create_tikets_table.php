<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tikets', function (Blueprint $table) {
            $table->id();
            $table->string('kode_booking')->unique();
            $table->bigInteger('id_pembeli')->unsigned();
            $table->bigInteger('id_kereta')->unsigned();
            $table->integer('jumlah')->unsigned();
            $table->string('dari');
            $table->string('ke');
            $table->foreign('id_pembeli')->references('id')->on('pembeli');
            $table->foreign('id_kereta')->references('id')->on('kereta');
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
        Schema::dropIfExists('tikets');
    }
}
