<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan', function (Blueprint $table) {
            $table->bigIncrements('nik');
            $table->string('nama_karyawan');
            $table->string('no_hp');
            $table->string('email');
            $table->string('no_rek');
            $table->string('status');
            $table->string('kepegawaian');
            $table->string('jml_kk');
            $table->string('gaji_pokok');
            $table->string('gaji_bpjs'); //gaji yang terdaftar di bpjs 
            $table->string('tunjangan_tetap');
            $table->string('bpjs_tk');
            $table->string('bpjs_ks');
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
        Schema::dropIfExists('karyawan');
    }
}
