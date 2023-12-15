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
        Schema::table('DATA_KELAHIRAN', function (Blueprint $table) {
            $table->foreign(['NoKK'], 'FK__DATA_KELAH__NoKK__534D60F1')->references(['NoKK'])->on('KELUARGA')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('DATA_KELAHIRAN', function (Blueprint $table) {
            $table->dropForeign('FK__DATA_KELAH__NoKK__534D60F1');
        });
    }
};
