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
        Schema::table('TRANSMIGRASI', function (Blueprint $table) {
            $table->foreign(['IDMigrasi'], 'FK__TRANSMIGR__IDMig__70DDC3D8')->references(['IDMigrasi'])->on('MIGRASI')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('TRANSMIGRASI', function (Blueprint $table) {
            $table->dropForeign('FK__TRANSMIGR__IDMig__70DDC3D8');
        });
    }
};
