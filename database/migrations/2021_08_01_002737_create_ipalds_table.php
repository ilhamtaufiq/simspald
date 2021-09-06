<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIpaldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ipalds', function (Blueprint $table) {
            $table->id();
            $table->integer('id_spald');
            $table->integer('id_kec');
            $table->integer('id_desa');
            $table->string('kegiatan', 64);
            $table->string('rincian_kegiatan', 64);
            $table->string('pagu');
            $table->string('sumber_dana');
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
        Schema::dropIfExists('ipalds');
    }
}
