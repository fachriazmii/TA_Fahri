<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProposalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('proposal')) return;
        Schema::create('proposal', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_judul')->constrained('judul_ta');
            $table->foreignId('id_mhs')->constrained('mahasiswa');
            $table->foreignId('id_repo')->constrained('file_repo');
            $table->foreignId('approve_by')->constrained('users');
            $table->dateTime('waktu_pengajuan', $precision = 0);
            $table->enum('status', ['Pengajuan', 'Disetujui','Revisi','Selesai']);
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
        Schema::dropIfExists('proposal');
    }
}
