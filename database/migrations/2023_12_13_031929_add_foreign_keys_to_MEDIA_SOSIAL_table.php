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
        Schema::table('MEDIA_SOSIAL', function (Blueprint $table) {
            $table->foreign(['NoIDNasional'], 'FK__MEDIA_SOS__NoIDN__412EB0B6')->references(['NoIDNasional'])->on('PENDUDUK')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('MEDIA_SOSIAL', function (Blueprint $table) {
            $table->dropForeign('FK__MEDIA_SOS__NoIDN__412EB0B6');
        });
    }
};
