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
        Schema::create('KELUARGA_TERBENTUK_DARI_PERKAWINAN', function (Blueprint $table) {
            $table->string('NoKK', 20);
            $table->string('NoNikah', 20);
            $table->string('NoTelpKepKel', 15)->nullable();
            $table->string('NamaKepKel', 100);
            $table->string('NamaIstri', 100);
            $table->date('WaktuNikah');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('KELUARGA_TERBENTUK_DARI_PERKAWINAN');
    }
};
