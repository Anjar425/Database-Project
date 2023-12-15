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
        Schema::create('PERKAWINAN', function (Blueprint $table) {
            $table->string('NoNikah', 20)->primary();
            $table->date('WaktuNikah');
            $table->string('NamaIstri', 100);
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
        Schema::dropIfExists('PERKAWINAN');
    }
};
