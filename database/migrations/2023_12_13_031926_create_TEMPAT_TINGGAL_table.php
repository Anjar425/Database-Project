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
        Schema::create('TEMPAT_TINGGAL', function (Blueprint $table) {
            $table->string('NoDaerah', 30)->primary();
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
        Schema::dropIfExists('TEMPAT_TINGGAL');
    }
};
