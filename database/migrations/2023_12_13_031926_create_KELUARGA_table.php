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
        Schema::create('KELUARGA', function (Blueprint $table) {
            $table->string('NoKK', 20)->primary();
            $table->string('NoTelpKepKel', 15)->nullable();
            $table->string('NamaKepKel', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('KELUARGA');
    }
};
