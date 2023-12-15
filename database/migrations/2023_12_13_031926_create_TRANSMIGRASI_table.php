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
        Schema::create('TRANSMIGRASI', function (Blueprint $table) {
            $table->string('IDMigrasi', 20)->primary();
            $table->string('LokasiTransmigrasi', 40);
            $table->string('AlamatAsal', 40);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TRANSMIGRASI');
    }
};
