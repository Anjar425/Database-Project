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
        Schema::table('PENDIDIKAN', function (Blueprint $table) {
            $table->foreign(['NoIDNasional'], 'FK__PENDIDIKA__NoIDN__440B1D61')->references(['NoIDNasional'])->on('PENDUDUK')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('PENDIDIKAN', function (Blueprint $table) {
            $table->dropForeign('FK__PENDIDIKA__NoIDN__440B1D61');
        });
    }
};
