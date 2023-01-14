<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBpjsKetenagakerjaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bpjs_ketenagakerjaan', function (Blueprint $table) {
            $table->bigIncrements('id_bpjstk');
            $table->string('nama');
            $table->string('bulan');
            $table->string('tahun');
            $table->string('JKK');
            $table->string('JKM');
            $table->string('JHTK');
            $table->string('JHTP');
            $table->string('JP');
            $table->string('tgl_bayar');
            $table->string('tagihan');
            $table->string('buktibayar');
            $table->string('status');
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
        Schema::dropIfExists('bpjs_ketenagakerjaan');
    }
}
