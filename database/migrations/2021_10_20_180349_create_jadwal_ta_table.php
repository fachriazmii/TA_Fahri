<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalTaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('jadwal_ta')) return;
        Schema::create('jadwal_ta', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_sidang')->constrained('sidang');
            $table->foreignId('penguji_1')->constrained('dosen');
            $table->foreignId('penguji_2')->constrained('dosen');
            $table->string('link_zoom');
            $table->dateTime('date', $precision = 0);
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
        Schema::dropIfExists('jadwal_ta');
    }
}
