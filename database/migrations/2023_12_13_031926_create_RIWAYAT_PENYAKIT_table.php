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
        Schema::create('RIWAYAT_PENYAKIT', function (Blueprint $table) {
            $table->string('IDPenyakit', 10)->primary();
            $table->string('NamaPenyakit', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('RIWAYAT_PENYAKIT');
    }
};
