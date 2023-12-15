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
        Schema::create('PAJAK', function (Blueprint $table) {
            $table->string('NPWP', 25)->primary();
            $table->integer('PajakPenghasilan')->nullable();
            $table->integer('PBB');
            $table->integer('PajakKendaraan')->nullable();
            $table->integer('JumlahPajak');
            $table->string('IDPenghasilan', 10);
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
        Schema::dropIfExists('PAJAK');
    }
};
