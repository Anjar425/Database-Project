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
        Schema::table('MENERIMA', function (Blueprint $table) {
            $table->foreign(['NoIDNasional'], 'FK__MENERIMA__NoIDNa__693CA210')->references(['NoIDNasional'])->on('PENDUDUK')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['IDBantuan'], 'FK__MENERIMA__IDBant__6A30C649')->references(['IDBantuan'])->on('BANTUAN')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('MENERIMA', function (Blueprint $table) {
            $table->dropForeign('FK__MENERIMA__NoIDNa__693CA210');
            $table->dropForeign('FK__MENERIMA__IDBant__6A30C649');
        });
    }
};
