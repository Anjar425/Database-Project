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
        Schema::create('PEKERJAAN_MENDAPATKAN_PENGHASILAN', function (Blueprint $table) {
            $table->string('IDPekerjaan', 10);
            $table->string('IDPenghasilan', 10);
            $table->string('NamaPekerjaan', 100);
            $table->string('LokasiPekerjaan', 100);
            $table->integer('JumlahPenghasilan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PEKERJAAN_MENDAPATKAN_PENGHASILAN');
    }
};
