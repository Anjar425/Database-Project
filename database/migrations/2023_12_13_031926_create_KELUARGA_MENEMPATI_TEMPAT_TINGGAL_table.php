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
        Schema::create('KELUARGA_MENEMPATI_TEMPAT_TINGGAL', function (Blueprint $table) {
            $table->string('NoKK', 20);
            $table->string('NoTelpKepKel', 15)->nullable();
            $table->string('NamaKepKel', 100);
            $table->string('NoDaerah', 30);
            $table->string('NamaDaerah', 30);
            $table->string('Kecamatan', 30);
            $table->string('Kabupaten', 30);
            $table->string('Provinsi', 30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('KELUARGA_MENEMPATI_TEMPAT_TINGGAL');
    }
};
