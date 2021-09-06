<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRumahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rumah', function (Blueprint $table) {
            $table->id();
            $table->integer('id_spald');
            $table->string('rw');
            $table->string('rt');
            $table->string('nama_kepala_keluarga');
            $table->string('nomor_nik');
            $table->integer('jumlah_anggota_keluarga');
            $table->integer('kepadatan_penduduk');
            $table->string('klasifikasi');
            $table->integer('risiko_sanitasi');
            $table->string('pendapatan');
            $table->integer('babs');
            $table->integer('cubluk_perkotaan');
            $table->integer('cubluk_perdesaan');
            $table->integer('aa_ts_individual');
            $table->integer('aa_ts_komunal');
            $table->integer('aa_ipald');
            $table->integer('al_ts_individual');
            $table->integer('al_ts_komunal');
            $table->integer('al_ipald');
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
        Schema::dropIfExists('rumah');
    }
}
