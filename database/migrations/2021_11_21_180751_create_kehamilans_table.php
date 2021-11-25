<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKehamilansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kehamilan', function (Blueprint $table) {
            $table->id();
            $table->integer('kehamilan_anak_ke');
            $table->date('tanggal_awal_kehamilan');
            $table->foreignId('nik_ibu');
            $table->date('tanggal_melahirkan')->nullable();
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
        Schema::dropIfExists('kehamilan');
    }
}
