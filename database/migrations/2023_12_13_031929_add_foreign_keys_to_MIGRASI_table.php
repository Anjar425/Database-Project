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
        Schema::table('MIGRASI', function (Blueprint $table) {
            $table->foreign(['NoIDNasional'], 'FK__MIGRASI__NoIDNas__5BE2A6F2')->references(['NoIDNasional'])->on('PENDUDUK')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('MIGRASI', function (Blueprint $table) {
            $table->dropForeign('FK__MIGRASI__NoIDNas__5BE2A6F2');
        });
    }
};
