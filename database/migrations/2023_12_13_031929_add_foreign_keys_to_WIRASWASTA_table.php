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
        Schema::table('WIRASWASTA', function (Blueprint $table) {
            $table->foreign(['IDPekerjaan'], 'FK__WIRASWAST__IDPek__7F2BE32F')->references(['IDPekerjaan'])->on('PEKERJAAN')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('WIRASWASTA', function (Blueprint $table) {
            $table->dropForeign('FK__WIRASWAST__IDPek__7F2BE32F');
        });
    }
};
