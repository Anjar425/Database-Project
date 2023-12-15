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
        Schema::create('BANTUAN', function (Blueprint $table) {
            $table->string('IDBantuan', 20)->primary();
            $table->string('JenisBantuan', 20);
            $table->string('Syarat', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('BANTUAN');
    }
};
