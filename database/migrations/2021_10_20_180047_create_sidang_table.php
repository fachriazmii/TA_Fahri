<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSidangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('sidang')) return;
        Schema::create('sidang', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_proposal')->constrained('proposal');
            $table->foreignId('acc_1')->constrained('dosen');
            $table->foreignId('acc_2')->constrained('dosen');
            $table->foreignId('acc_laa')->constrained('users');
            $table->foreignId('acc_dekan')->constrained('users');
            $table->integer('penilaian_1');
            $table->integer('penilaian_2');
            $table->text('revisi_1');
            $table->text('revisi_2');
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
        Schema::table('sidang', function (Blueprint $table) {
            //
        });
    }
}
