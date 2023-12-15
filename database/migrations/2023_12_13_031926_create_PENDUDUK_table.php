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
        Schema::create('PENDUDUK', function (Blueprint $table) {
            $table->string('NoIDNasional', 25)->primary();
            $table->string('Nama', 100);
            $table->string('Status', 15);
            $table->string('GolDarah', 3);
            $table->string('JenisKelamin', 10);
            $table->integer('Usia');
            $table->string('Agama', 20)->nullable();
            $table->string('Kecamatan', 30);
            $table->string('Kabupaten', 30);
            $table->string('Provinsi', 30);
            $table->date('TanggalLahir');
            $table->string('TempatLahir', 30);
            $table->string('NoKK', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PENDUDUK');
    }
};
