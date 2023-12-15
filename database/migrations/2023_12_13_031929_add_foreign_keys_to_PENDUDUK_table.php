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
        Schema::table('PENDUDUK', function (Blueprint $table) {
            $table->foreign(['NoKK'], 'FK__PENDUDUK__NoKK__398D8EEE')->references(['NoKK'])->on('KELUARGA')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('PENDUDUK', function (Blueprint $table) {
            $table->dropForeign('FK__PENDUDUK__NoKK__398D8EEE');
        });
    }
};
