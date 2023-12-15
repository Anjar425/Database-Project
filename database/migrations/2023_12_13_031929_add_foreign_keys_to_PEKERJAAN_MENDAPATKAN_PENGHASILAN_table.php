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
        Schema::table('PEKERJAAN_MENDAPATKAN_PENGHASILAN', function (Blueprint $table) {
            $table->foreign(['IDPekerjaan'], 'FK__PEKERJAAN__IDPek__5DCAEF64')->references(['IDPekerjaan'])->on('PEKERJAAN')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['IDPenghasilan'], 'FK__PEKERJAAN__IDPen__5EBF139D')->references(['IDPenghasilan'])->on('PENGHASILAN')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('PEKERJAAN_MENDAPATKAN_PENGHASILAN', function (Blueprint $table) {
            $table->dropForeign('FK__PEKERJAAN__IDPek__5DCAEF64');
            $table->dropForeign('FK__PEKERJAAN__IDPen__5EBF139D');
        });
    }
};
