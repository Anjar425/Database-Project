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
        Schema::create('SWASTA', function (Blueprint $table) {
            $table->string('IDPekerjaan', 10)->primary();
            $table->string('NamaPerusahaan', 100);
            $table->string('SJabatan', 100);
            $table->string('Kontak', 15);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('SWASTA');
    }
};
