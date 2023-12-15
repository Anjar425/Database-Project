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
        Schema::table('KELUARGA_TERBENTUK_DARI_PERKAWINAN', function (Blueprint $table) {
            $table->foreign(['NoKK'], 'FK__KELUARGA_T__NoKK__6383C8BA')->references(['NoKK'])->on('KELUARGA')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['NoNikah'], 'FK__KELUARGA___NoNik__6477ECF3')->references(['NoNikah'])->on('PERKAWINAN')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('KELUARGA_TERBENTUK_DARI_PERKAWINAN', function (Blueprint $table) {
            $table->dropForeign('FK__KELUARGA_T__NoKK__6383C8BA');
            $table->dropForeign('FK__KELUARGA___NoNik__6477ECF3');
        });
    }
};
