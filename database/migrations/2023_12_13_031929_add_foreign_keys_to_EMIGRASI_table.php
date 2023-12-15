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
        Schema::table('EMIGRASI', function (Blueprint $table) {
            $table->foreign(['IDMigrasi'], 'FK__EMIGRASI__IDMigr__76969D2E')->references(['IDMigrasi'])->on('MIGRASI')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('EMIGRASI', function (Blueprint $table) {
            $table->dropForeign('FK__EMIGRASI__IDMigr__76969D2E');
        });
    }
};
