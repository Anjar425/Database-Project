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
        Schema::table('PENANGGUNGJAWAB_KELUARGA', function (Blueprint $table) {
            $table->foreign(['NoKK'], 'FK__PENANGGUNG__NoKK__5070F446')->references(['NoKK'])->on('KELUARGA')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('PENANGGUNGJAWAB_KELUARGA', function (Blueprint $table) {
            $table->dropForeign('FK__PENANGGUNG__NoKK__5070F446');
        });
    }
};
