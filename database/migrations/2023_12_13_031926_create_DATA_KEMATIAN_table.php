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
        Schema::create('DATA_KEMATIAN', function (Blueprint $table) {
            $table->string('NoSuratKematian', 20)->primary();
            $table->time('JamKematian', 7);
            $table->date('TanggalKematian');
            $table->string('TempatKematian', 100);
            $table->string('Nama', 100);
            $table->string('Pelapor', 100);
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
        Schema::dropIfExists('DATA_KEMATIAN');
    }
};
