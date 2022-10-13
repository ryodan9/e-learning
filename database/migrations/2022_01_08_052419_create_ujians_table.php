<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUjiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ujians', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ujian', 100);
            $table->text('materi');
            // $table->unsignedBigInteger('id_mapel');
            $table->foreignId('mapel_id')->references('id')->on('mapel')->cascadeOnDelete();
            // $table->unsignedBigInteger('id_kelas');
            $table->foreignId('kelas_id')->references('id')->on('kelas')->cascadeOnDelete();
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
        Schema::dropIfExists('ujians');
    }
}
