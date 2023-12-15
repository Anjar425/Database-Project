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
        Schema::table('DATA_KEMATIAN', function (Blueprint $table) {
            $table->foreign(['NoKK'], 'FK__DATA_KEMAT__NoKK__5629CD9C')->references(['NoKK'])->on('KELUARGA')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('DATA_KEMATIAN', function (Blueprint $table) {
            $table->dropForeign('FK__DATA_KEMAT__NoKK__5629CD9C');
        });
    }
};
