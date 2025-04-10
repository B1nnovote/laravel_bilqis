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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->date('tgl_transaksi');  
            $table->integer('jumlah');
            $table->unsignedBigInteger('id_obat');
            $table->unsignedBigInteger('id_pembeli');

            $table->foreign('id_obat')->references('id')->on('obats')->oneDelete('cascade');
            $table->foreign('id_pembeli')->references('id')->on('pembelis')->oneDelete('cascade');

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
        Schema::dropIfExists('transaksis');
    }
};
