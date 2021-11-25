<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemeriksaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemeriksaan', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->integer('tekanan_darah_sistolik');
            $table->integer('tekanan_darah_diastolik');
            $table->integer('kenaikan_berat_badan');
            $table->boolean('edema');
            $table->integer('proteinuria');
            $table->integer('usia_kehamilan');
            $table->integer('usia_ibu');
            $table->integer('tingkat_risiko');
            $table->string('kategori_risiko');
            $table->foreignId('nik_ibu');
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
        Schema::dropIfExists('pemeriksaan');
    }
}
