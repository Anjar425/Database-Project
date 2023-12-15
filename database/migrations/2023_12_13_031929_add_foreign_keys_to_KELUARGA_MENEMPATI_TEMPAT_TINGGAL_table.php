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
        Schema::table('KELUARGA_MENEMPATI_TEMPAT_TINGGAL', function (Blueprint $table) {
            $table->foreign(['NoKK'], 'FK__KELUARGA_M__NoKK__60A75C0F')->references(['NoKK'])->on('KELUARGA')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['NoDaerah'], 'FK__KELUARGA___NoDae__619B8048')->references(['NoDaerah'])->on('TEMPAT_TINGGAL')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('KELUARGA_MENEMPATI_TEMPAT_TINGGAL', function (Blueprint $table) {
            $table->dropForeign('FK__KELUARGA_M__NoKK__60A75C0F');
            $table->dropForeign('FK__KELUARGA___NoDae__619B8048');
        });
    }
};
