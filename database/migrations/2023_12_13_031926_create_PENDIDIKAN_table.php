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
        Schema::create('PENDIDIKAN', function (Blueprint $table) {
            $table->string('NoInduk', 20)->primary();
            $table->string('NamaInstansi', 100);
            $table->string('KotaInstansi', 40);
            $table->string('NoIDNasional', 25);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PENDIDIKAN');
    }
};
