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
        Schema::table('MEMPUNYAI', function (Blueprint $table) {
            $table->foreign(['NoIDNasional'], 'FK__MEMPUNYAI__NoIDN__66603565')->references(['NoIDNasional'])->on('PENDUDUK')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['IDPenyakit'], 'FK__MEMPUNYAI__IDPen__6754599E')->references(['IDPenyakit'])->on('RIWAYAT_PENYAKIT')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('MEMPUNYAI', function (Blueprint $table) {
            $table->dropForeign('FK__MEMPUNYAI__NoIDN__66603565');
            $table->dropForeign('FK__MEMPUNYAI__IDPen__6754599E');
        });
    }
};
