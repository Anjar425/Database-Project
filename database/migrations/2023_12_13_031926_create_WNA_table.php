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
        Schema::create('WNA', function (Blueprint $table) {
            $table->string('NoIDNasional', 25);
            $table->string('JenisVisa', 40);
            $table->string('NoIzinTinggal', 20);
            $table->string('Kewarganegaraan', 40);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('WNA');
    }
};
