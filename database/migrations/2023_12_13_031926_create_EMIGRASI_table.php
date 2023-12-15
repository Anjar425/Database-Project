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
        Schema::create('EMIGRASI', function (Blueprint $table) {
            $table->string('IDMigrasi', 20)->primary();
            $table->string('ENegaraTujuan', 40);
            $table->string('ENoPaspor', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('EMIGRASI');
    }
};
