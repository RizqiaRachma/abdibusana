<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGajisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gajis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_karyawan');
            $table->string('gaji');
            $table->string('lembur');
            $table->string('nama');
            $table->string('total');
            $table->string('nama');
            $table->string('makan');
            $table->string('nama');
            $table->string('keterlambatan');
            $table->string('total_');
            $table->string('potongan_lain');
            $table->string('pot_bpjstk');
            $table->string('pot_bjpsks');
            $table->string('upah_diterima');
            $table->string('kasbon');
            $table->string('sisa_upah');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gajis');
    }
}
