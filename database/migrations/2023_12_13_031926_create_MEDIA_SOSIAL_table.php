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
        Schema::create('MEDIA_SOSIAL', function (Blueprint $table) {
            $table->string('UserID', 20)->primary();
            $table->string('Username', 50);
            $table->string('JenisMedsos', 10);
            $table->string('NoIDNasional', 25);
            $table->integer('LamaPenggunaan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('MEDIA_SOSIAL');
    }
};
