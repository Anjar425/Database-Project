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
        Schema::table('NO_TELP_KELUARGA', function (Blueprint $table) {
            $table->foreign(['NoKK'], 'FK__NO_TELP_KE__NoKK__6C190EBB')->references(['NoKK'])->on('KELUARGA')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('NO_TELP_KELUARGA', function (Blueprint $table) {
            $table->dropForeign('FK__NO_TELP_KE__NoKK__6C190EBB');
        });
    }
};
