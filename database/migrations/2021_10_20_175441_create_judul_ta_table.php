<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJudulTaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('judul_ta')) return;
        Schema::create('judul_ta', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pbb_1')->constrained('dosen');
            $table->foreignId('pbb_2')->constrained('dosen');
            $table->string('judul');
            $table->integer('kuota');
            $table->integer('aktif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('judul_ta');
    }
}
