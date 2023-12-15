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
        Schema::create('PNS', function (Blueprint $table) {
            $table->string('IDPekerjaan', 10)->primary();
            $table->string('NIP', 25);
            $table->string('PJabatan', 100);
            $table->string('NamaInstansi', 100);
            $table->string('Kontak', 15);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PNS');
    }
};
