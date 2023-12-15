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
        Schema::create('DATA_KELAHIRAN', function (Blueprint $table) {
            $table->string('NoAkta', 25)->primary();
            $table->string('NIKAyah', 25);
            $table->string('NIKIbu', 25);
            $table->decimal('BeratLahir', 18, 0);
            $table->integer('PanjangLahir');
            $table->time('JamKelahiran', 7);
            $table->date('TanggalKelahiran');
            $table->string('TempatKelahiran', 60);
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
        Schema::dropIfExists('DATA_KELAHIRAN');
    }
};
