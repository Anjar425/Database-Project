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
        Schema::create('MIGRASI', function (Blueprint $table) {
            $table->string('IDMigrasi', 20)->primary();
            $table->date('WaktuMigrasi');
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
        Schema::dropIfExists('MIGRASI');
    }
};
