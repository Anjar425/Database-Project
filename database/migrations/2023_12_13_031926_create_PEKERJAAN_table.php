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
        Schema::create('PEKERJAAN', function (Blueprint $table) {
            $table->string('IDPekerjaan', 10)->primary();
            $table->string('LokasiPekerjaan', 100);
            $table->string('NamaPekerjaan', 100);
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
        Schema::dropIfExists('PEKERJAAN');
    }
};
