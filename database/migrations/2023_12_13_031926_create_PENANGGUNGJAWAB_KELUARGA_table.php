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
        Schema::create('PENANGGUNGJAWAB_KELUARGA', function (Blueprint $table) {
            $table->string('IDPK', 25)->primary();
            $table->string('NoKK', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PENANGGUNGJAWAB_KELUARGA');
    }
};
