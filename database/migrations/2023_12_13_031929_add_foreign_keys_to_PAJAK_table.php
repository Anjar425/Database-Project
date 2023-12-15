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
        Schema::table('PAJAK', function (Blueprint $table) {
            $table->foreign(['NoIDNasional'], 'FK__PAJAK__NoIDNasio__4BAC3F29')->references(['NoIDNasional'])->on('PENDUDUK')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['IDPenghasilan'], 'FK__PAJAK__IDPenghas__4AB81AF0')->references(['IDPenghasilan'])->on('PENGHASILAN')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('PAJAK', function (Blueprint $table) {
            $table->dropForeign('FK__PAJAK__NoIDNasio__4BAC3F29');
            $table->dropForeign('FK__PAJAK__IDPenghas__4AB81AF0');
        });
    }
};
