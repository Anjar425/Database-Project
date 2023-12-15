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
        Schema::table('SWASTA', function (Blueprint $table) {
            $table->foreign(['IDPekerjaan'], 'FK__SWASTA__IDPekerj__7C4F7684')->references(['IDPekerjaan'])->on('PEKERJAAN')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('SWASTA', function (Blueprint $table) {
            $table->dropForeign('FK__SWASTA__IDPekerj__7C4F7684');
        });
    }
};
