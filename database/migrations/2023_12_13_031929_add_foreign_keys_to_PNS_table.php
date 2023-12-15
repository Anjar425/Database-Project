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
        Schema::table('PNS', function (Blueprint $table) {
            $table->foreign(['IDPekerjaan'], 'FK__PNS__IDPekerjaan__797309D9')->references(['IDPekerjaan'])->on('PEKERJAAN')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('PNS', function (Blueprint $table) {
            $table->dropForeign('FK__PNS__IDPekerjaan__797309D9');
        });
    }
};
